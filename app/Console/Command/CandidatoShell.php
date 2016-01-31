<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class CandidatoShell extends AppShell {

	public $uses = array('User', 'Candidatura','Curso');

    public function afterImportCandidatos(){

    }


    public function verificaCursoAdmitidos(){
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(ROOT . DS.'Imports' . DS . 'Admitidos' . DS . '2016' . DS . 'admitidos.xlsx');

        $worksheet = $xls->getActiveSheet();
        //debug($xls->getActiveSheetIndex());
        $linha_actual = 2;
        $naoEncontrados  = [];
        $output = fopen("naoEncontraos.csv",'w') or die("Can't open php://output");
        fputcsv($output, array('id','name','description'));

        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                break;
            }

            $codigoCurso = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $nomeCurso = $worksheet->getCell('M' . $linha_actual)->getCalculatedValue();

            $codigo_curso_admissao = $codigoCurso;

            if (in_array($codigo_curso_admissao, [1150, 1151, 1155, 1148, 1149, 1152, 1154])) {
                $codigo_curso_admissao = 1153;
            }

            if (in_array($codigo_curso_admissao, [1142])) {
                $codigo_curso_admissao = 1141;
            }
            if (in_array($codigo_curso_admissao, [1133])) {
                $codigo_curso_admissao = 1042;
            }

            if (in_array($codigo_curso_admissao, [1098, 1099])) {
                $codigo_curso_admissao = 1097;
            }
            if (in_array($codigo_curso_admissao, [1046])) {
                $codigo_curso_admissao = 1156;
            }
            if (in_array($codigo_curso_admissao, [1136])) {
                $codigo_curso_admissao = 1054;
            }

            if (in_array($codigo_curso_admissao, [1104])) {
                $codigo_curso_admissao = 1103;
            }
            if (in_array($codigo_curso_admissao, [1115])) {
                $codigo_curso_admissao = 1114;
            }
            if (in_array($codigo_curso_admissao, [1121])) {
                $codigo_curso_admissao = 1120;
            }
            if (in_array($codigo_curso_admissao, [1119])) {
                $codigo_curso_admissao = 1118;
            }
            if (in_array($codigo_curso_admissao, [1126, 1146])) {
                $codigo_curso_admissao = 1125;
            }
            if (in_array($codigo_curso_admissao, [1017, 1139])) {
                $codigo_curso_admissao = 1015;
            }
            if (in_array($codigo_curso_admissao, [1018, 1147])) {
                $codigo_curso_admissao = 1016;
            }
            if (in_array($codigo_curso_admissao, [1093])) {
                $codigo_curso_admissao = 1091;
            }
            if (in_array($codigo_curso_admissao, [1068, 1069])) {
                $codigo_curso_admissao = 1067;
            }
            if (in_array($codigo_curso_admissao, [1134])) {
                $codigo_curso_admissao = 1045;
            }
            if (in_array($codigo_curso_admissao, [1135])) {
                $codigo_curso_admissao = 1048;
            }
            $codigoCurso = $codigo_curso_admissao;
                $curso = $this->Curso->findByCodigoAdmissao($codigoCurso);
            if(!empty($curso)){
                $this->out($linha_actual.'--Curso Encontrado.'. $curso['Curso']['name'].'-------'.$nomeCurso);
            } else{
                $naoEncontrados[] = [
                    'codigo'=>$codigoCurso,
                    'nome'=>$nomeCurso
                ];

                    fputcsv($output, [
                        'codigo'=>$codigoCurso,
                        'nome'=>$nomeCurso
                    ]);


            }


            $linha_actual++;

        }
        fclose($output) or die("Can't close php://output");

       $unique  = array_unique($naoEncontrados,SORT_REGULAR);
        debug($unique);

    }

    public function importa_admitidos_server()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(APP . 'Imports' . DS . 'Admitidos' . DS . '2015' . DS . 'admitidos_20150821.xlsx');

        $worksheet = $xls->getActiveSheet();
        //debug($xls->getActiveSheetIndex());
        $linha_actual = 2;
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                break;
            }

            $nao_encontrados = [];
            $numero_candidato = $worksheet->getCell('A' . $linha_actual)->getCalculatedValue();
            $array_candidato = [
                'Candidatura' => [
                    'numero_estudante' => $numero_candidato,
                ]
            ];
            $nome_completo2 = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();
            $nome_completo = trim($nome_completo2);
            $nomes = $this->User->splitName($nome_completo);
            $array_candidato['Candidatura']['apelido'] = trim($nomes['surname']);
            $array_candidato['Candidatura']['nomes'] = trim($nomes['firstname']);
            $array_candidato['Candidatura']['estado_matricula_id'] = 5;
            $array_candidato['Candidatura']['ano_lectivo_admissao'] = $worksheet->getCell('F' . $linha_actual)->getCalculatedValue();
            $array_candidato['Candidatura']['tipo_ingresso_id'] = 2;
            $array_candidato['Candidatura']['estado_candidatura_id'] = 2;
            $curso_nome = trim($worksheet->getCell('D' .
                $linha_actual)->getCalculatedValue());
            $curso = $this->Curso->findByName($curso_nome);
            if ($curso) {
                $array_candidato['Candidatura']['curso_id'] = $curso['Curso']['id'];
                $array_candidato['Candidatura']['nome_curso'] = $curso['Curso']['name'];
            } else {

                debug($curso_nome);
                die(debug('Falha no Import'));
            }

            $this->Candidatura->create();
            $this->Candidatura->save($array_candidato);
            $this->out($this->Candidatura->id);


            $linha_actual++;
        }
        $this->out($nao_encontrados);
    }



}
