<?php
        /**
         * CakeResque Lib File
         *
         * Proxy class to Resque
         *
         * PHP version 5
         *
         * Licensed under The MIT License
         * Redistributions of files must retain the above copyright notice.
         *
         * @author        Wan Qi Chen <kami@kamisama.me>
         * @copyright     Copyright 2012, Wan Qi Chen <kami@kamisama.me>
         * @link          http://cakeresque.kamisama.me
         * @package       CakeResque
         * @subpackage      CakeResque.Lib
         * @since         1.2.0
         * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
         */

        App::uses('Folder', 'Utility');

        /**
         * CakeResque Class
         *
         * Proxy to Resque, enabling logging function
         */
        class CakeRabbit
        {


                /**
                 * Envia uma Mensagem para o CakeRabbit
                 *
                 * @param string $queue Name of the queue to enqueue the job to.
                 * @param string $class Class of the job.
                 * @param array $args Arguments passed to the job.
                 * @param boolean $trackStatus Whether to track the status of the job.
                 * @return string Job Id.
                 */
                public static function publish($message, $exchange = 'router', $queue = 'default')
                {
                        App::import('Vendor', 'AMQPConnection', ['file' => 'PhpAmqpLib/Connection/AMQPConnection.php']);
                        App::import('Vendor', 'AMQPMessage', ['file' => 'PhpAmqpLib/Message/AMQPMessage.php']);


                        $conn = new PhpAmqpLib\Connection\AMQPConnection(RABBITMQ_HOST, RABBITMQ_PORT, RABBITMQ_USER,
                            RABBITMQ_PASS, RABBITMQ_VHOST);
                        $ch = $conn->channel();


                        /*
                            name: $queue
                            passive: false
                            durable: true // the queue will survive server restarts
                            exclusive: false // the queue can be accessed in other channels
                            auto_delete: false //the queue won't be deleted once the channel is closed.
                        */
                        $ch->queue_declare($queue, false, true, false, false);

                        /*
                            name: $exchange
                            type: direct
                            passive: false
                            durable: true // the exchange will survive server restarts
                            auto_delete: false //the exchange won't be deleted once the channel is closed.
                        */

                        $ch->exchange_declare($exchange, 'direct', false, true, false);

                        $ch->queue_bind($queue, $exchange);

                        $msg_body = implode(' ', array_slice($message, 1));
                        $msg = new PhpAmqpLib\Message\AMQPMessage($msg_body, [
                            'content_type'  => 'text/plain',
                            'delivery_mode' => 2,
                        ]);
                        $ch->basic_publish($msg, $exchange);

                        $ch->close();
                        $conn->close();
                }

        }