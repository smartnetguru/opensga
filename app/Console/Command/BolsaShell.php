<?php

    ini_set('memory_limit', "2048M");
    App::uses('AuditableConfig', 'Auditable.Lib');
    App::uses('AppShell', 'Console/Command');
    App::uses('CakeEmail', 'Network/Email');

    class BolsaShell extends AppShell
    {

        public $uses = ['Aluno', 'Candidatura'];

        public function preenche_provincia()
        {
            AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
            App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
            if (!class_exists('PHPExcel')) {
                throw new CakeException('Vendor class PHPExcel not found!');
            }

            $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'ELISIO.xlsx');


            $worksheet = $xls->getActiveSheet();
            $linha_actual = 2;
            foreach ($worksheet->getRowIterator() as $row) {
                if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                    break;
                }

                $numero = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();

                $this->Aluno->contain([
                    'Entidade' => ['ProvinciaNascimento', 'PaisNascimento', 'Genero'],
                ]);

                $aluno = $this->Aluno->findByCodigo($numero);
                if (!empty($aluno)) {
                    $worksheet->setCellValue('F' . $linha_actual, $aluno['Entidade']['Genero']['name']);
                    $worksheet->setCellValue('G' . $linha_actual, $aluno['Entidade']['data_nascimento']);
                    $worksheet->setCellValue('I' . $linha_actual, $aluno['Entidade']['ProvinciaNascimento']['name']);
                    $worksheet->setCellValue('J' . $linha_actual, $aluno['Entidade']['PaisNascimento']['name']);
                    $this->out($numero . '----' . $aluno['Entidade']['ProvinciaNascimento']['name']);

                }


                $linha_actual++;


            }
            $objWriter = PHPExcel_IOFactory::createWriter($xls, 'Excel2007');

            $objWriter->save('bolsas2015.xlsx');

            $xls->disconnectWorksheets();
            unset($xls);

        }

    }
