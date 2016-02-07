<?php
    App::uses('AppModel', 'Model');
    App::uses('HttpSocket', 'Network/Http');
    ini_set('max_execution_time', 300);

    /**
     * SmsEnviada Model
     *
     * @property User $User
     * @property SmsTipo $SmsTipo
     */
    class SmsEnviada extends AppModel
    {


        //The Associations below have been created with all possible keys, those that are not needed can be removed

        /**
         * belongsTo associations
         *
         * @var array
         */
        public $belongsTo = [
            'User'    => [
                'className'  => 'User',
                'foreignKey' => 'user_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
            'SmsTipo' => [
                'className'  => 'SmsTipo',
                'foreignKey' => 'sms_tipo_id',
                'conditions' => '',
                'fields'     => '',
                'order'      => '',
            ],
        ];


        public function sendSMS(
            $destination,
            $text_message,
            $entidade_destino = 0,
            $sms_tipo_id = 1,
            $user_id = null,
            $country_id = 258
        ) {
            $array_sms = [
                'SmsEnviada' => [
                    'destination'      => $destination,
                    'text'             => $text_message,
                    'sms_tipo_id'      => $sms_tipo_id,
                    'user_id'          => $user_id,
                    'entidade_destino' => $entidade_destino,
                ],
            ];
            $this->create();
            $this->save($array_sms);
            $url_sms = "http://mb.timwe.com/sendMT?";
            $params = "CountryId=" . $country_id;
            $params .= "&Destination=" . $destination;
            $params .= "&ExtTxId=" . $this->id;
            $operator = substr($destination, 0, 2);
            if ($operator == 25) {
                $destination = substr($destination, 2);
                $operator = substr($destination, 0, 2);
            }
            if ($operator == 82) {
                $params .= "&OpId=241";
            } elseif ($operator == 84) {
                $params .= "&OpId=242";
            } elseif ($operator == 86) {
                $params .= "&OpId=471";
            } else {
                return 0;
            }
            $params .= "&PartnerRoleId=1112";
            $params .= "&PricePointId=356";
            $params .= "&ProductId=1762";
            $params .= "&Test=0";
            $params .= "&Text=" . utf8_encode(urlencode($text_message));
            $password = "2c0mr9" . utf8_encode($params);
            $password_hash = md5($password);
            $params .= "&PasswordHash=" . $password_hash;
            $url_final = $url_sms . $params;
            $HttpSocket = new HttpSocket([
                'host'    => 'mb.timwe.com',
                'timeout' => 60,
            ]);

            $results = $HttpSocket->get($url_final);
            $resultado = $results->body;
            $this->set('resultado', $resultado);
            $this->set('url_final', $url_final);

            $this->save();
            if (is_numeric($resultado) && $resultado > 0) {
                return 1;
            }

            return 0;
        }
    }
