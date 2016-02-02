<?php

ini_set('memory_limit', "2048M");
App::uses('AuditableConfig', 'Auditable.Lib');
App::uses('AppShell', 'Console/Command');

class CandidatoShell extends AppShell {

	public $uses = array('User', 'Candidatura','Curso','Entidade');

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
            if (in_array($codigo_curso_admissao, [1119,1138])) {
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
            if (in_array($codigo_curso_admissao, [1164])) {
                $codigo_curso_admissao = 1163;
            }
            if (in_array($codigo_curso_admissao, [1159])) {
                $codigo_curso_admissao = 1158;
            }
            if (in_array($codigo_curso_admissao, [1161])) {
                $codigo_curso_admissao = 1160;
            }
            if (in_array($codigo_curso_admissao, [1167])) {
                $codigo_curso_admissao = 1165;
            }
            $codigoCurso = $codigo_curso_admissao;
                $curso = $this->Curso->findByCodigoAdmissao($codigoCurso);
            if(!empty($curso)){
                $this->out($linha_actual.'--Curso Encontrado.'. $curso['Curso']['name'].'-------'.$nomeCurso);
                sleep(1);
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

    public function importa_admitidos_base()
    {
        AuditableConfig::$Logger = ClassRegistry::init('Auditable.Logger');
        App::import('Vendor', 'PHPExcel', ['file' => 'PHPExcel.php']);
        if (!class_exists('PHPExcel')) {
            throw new CakeException('Vendor class PHPExcel not found!');
        }

        $xls = PHPExcel_IOFactory::load(ROOT.DS . 'Imports' . DS . 'Admitidos' . DS . '2016' . DS . 'admitidos.xlsx');


        $worksheet = $xls->getActiveSheet();
        $linha_actual = 2;
        foreach ($worksheet->getRowIterator() as $row) {
            if ($worksheet->getCell('A' . $linha_actual)->getValue() == '') {
                break;
            }

            $nao_encontrados = [];
            $numero_candidato = $worksheet->getCell('C' . $linha_actual)->getCalculatedValue();
            $candidato = $this->Candidatura->findByNumeroCandidato($numero_candidato);
            $codigo_curso_admissao = $worksheet->getCell('B' . $linha_actual)->getCalculatedValue();

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
            if (in_array($codigo_curso_admissao, [1119,1138])) {
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
            if (in_array($codigo_curso_admissao, [1164])) {
                $codigo_curso_admissao = 1163;
            }
            if (in_array($codigo_curso_admissao, [1159])) {
                $codigo_curso_admissao = 1158;
            }
            if (in_array($codigo_curso_admissao, [1161])) {
                $codigo_curso_admissao = 1160;
            }
            if (in_array($codigo_curso_admissao, [1167])) {
                $codigo_curso_admissao = 1165;
            }

            $curso = $this->Curso->findByCodigoAdmissao($codigo_curso_admissao);
            if (empty($curso)) {

                debug($codigo_curso_admissao);
                $curso_zero[] = $codigo_curso_admissao;
                die();
            }

            $faculdade = $this->Curso->UnidadeOrganica->getFaculdadeByCursoId($curso['Curso']['id']);
            $nomes = ucwords(strtolower(trim($worksheet->getCell('M' . $linha_actual)->getFormattedValue())));
            $apelido = ucwords(strtolower(trim($worksheet->getCell('L' . $linha_actual)->getFormattedValue())));
            $name = $nomes.' '.$apelido;



            $dataNascimento = null;
            $dataNascimentoCell = trim($worksheet->getCell('O' . $linha_actual)->getFormattedValue());
            if (!empty($dataNascimentoCell)) {
                $dateInTimestampValue = PHPExcel_Shared_Date::ExcelToPHP($worksheet->getCell('O' . $linha_actual)->getValue());
                $dataNascimento = date('Y-m-d',$dateInTimestampValue);
            }

            if ($candidato) {
                $this->Candidatura->id = $candidato['Candidatura']['id'];
                $this->Candidatura->set('numero_estudante', $worksheet->getCell('A' . $linha_actual)
                    ->getCalculatedValue());
                $this->Candidatura->set('codigo_curso_admitido_admissao',
                    $worksheet->getCell('B' . $linha_actual)->getCalculatedValue());
                $this->Candidatura->set('name', $name);
                $this->Candidatura->set('aluno_via_admissao_id', 1);
                $this->Candidatura->set('tipo_ingresso_id', 1);
                $this->Candidatura->set('estado_candidatura_id', 2);
                $this->Candidatura->set('ano_lectivo_admissao', 2016);
                $this->Candidatura->set('curso_id', $curso['Curso']['id']);
                $this->Candidatura->set('ano_candidatura', 2015);
                $this->Candidatura->set('nome_faculdade', $faculdade['UnidadeOrganica']['name']);
                $this->Candidatura->set('nome_curso', $curso['Curso']['name']);
                $this->Candidatura->set('estado_matricula_id', 5);
                $this->Candidatura->set('nomes', $nomes);
                $this->Candidatura->set('apelido', $apelido);
                $this->Candidatura->set('data_nascimento', $dataNascimento);




                if(!$this->Candidatura->save()){
                    debug($this->Candidatura->validationErrors);
                    die();
                }
                $this->out($linha_actual . '----------'.$name.'----------------------' . $this->Candidatura->id);
            } else {
                $this->Candidatura->create();
                $arrayCandidatura = [
                    'Candidatura' => [
                        'numero_estudante'               => $worksheet->getCell('A' . $linha_actual)->getCalculatedValue(),
                        'numero_candidato'               => $worksheet->getCell('C' . $linha_actual)->getCalculatedValue(),
                        'codigo_curso_admitido_admissao' => $worksheet->getCell('B' . $linha_actual)
                            ->getCalculatedValue(),
                        'aluno_via_admissao_id'          => 1,
                        'tipo_ingresso_id'               => 1,
                        'estado_candidatura_id'          => 2,
                        'name'                           => $name,
                        'ano_lectivo_admissao'           => 2016,
                        'curso_id'                       => $curso['Curso']['id'],
                        'ano_candidatura'                => 2015,
                        'nome_faculdade'                 => $faculdade['UnidadeOrganica']['name'],
                        'nome_curso'                     => $curso['Curso']['name'],
                        'estado_matricula_id'            => 5,
                        'nomes'                          => $nomes,
                        'apelido'                        => $apelido,
                        'data_nascimento'                        => $dataNascimento

                    ]
                ];
                if(!$this->Candidatura->save($arrayCandidatura)){
                    debug($this->Candidatura->validationErrors);
                    die();
                }
                $this->out($linha_actual . '---------'.$name.'--------NOVO---------------' . $this->Candidatura->id);
                $nao_encontrados[] = $numero_candidato;
            }

            $linha_actual++;
        }
        $this->out($nao_encontrados);
    }

    public function importaCandidatosSQL(){

        $candidatos = $this->Candidatura->query('select * from admissao_candidato');
        $total = count($candidatos);
        foreach($candidatos as $candidato){

            $c = $candidato['admissao_candidato'];


            $numero_candidato = $c['candidato_codigo'];
            $tipoDocumento = $c['tipoDocumento'];
            $tipoDocumentoId = null;
            if(in_array($tipoDocumento,['Bilhete de Identidade','bi','B.I','Bilheite de Identidade','bilhete de
            identificação','Bilhete de indentidade','B.I.','bilhete identidade','Bilhete','BI'])){
                $tipoDocumentoId = 1;
            } elseif(in_array($tipoDocumento,['Carta de ConduÃ§Ã£o','Carta de Condução',''])){
                $tipoDocumentoId = 6;
            } elseif(in_array($tipoDocumento,['Passaporte','Passaport'])){
                $tipoDocumentoId= 2;
            }elseif(in_array($tipoDocumento,['Talão de Bilhete de Identidade','TalÃ£o de Bilhete de Identidade',
                'Recibo de Bi','espera BI','Talão de BI','talão','Cedula Pessoal'])){
                $tipoDocumentoId = 4;
            } elseif(in_array($tipoDocumento,['DIRE'])){
                $tipoDocumentoId =3;
            }

            $numeroDocumento =$c['numeroDocumento'];
            $sexo = $c['genero'];
            if ($sexo == 'Masculino') {
                $genero = 1;
            } elseif ($sexo == 'Feminino') {
                $genero = 2;
            }
            $estadoCivil = $c['estadoCivil'];
            if ($estadoCivil == 'Casado(a)') {
                $estadoCivilId = 2;
            } elseif ($estadoCivil == 'Divorciado(a)') {
                $estadoCivilId = 4;
            } elseif (in_array($estadoCivil,['Solterio(a)','solteiro','solteira'])) {
                $estadoCivilId = 1;
            } elseif ($estadoCivil == 'Viúvo(a)') {
                $estadoCivilId = 6;
            }



            $distritoNascimento = $c['distrito_nascimento'];
            if($distritoNascimento=='DISTRITO URBANO 4'){
                $distritoNascimento = 'Urbano nº 4';
            }
            if($distritoNascimento=='DISTRITO URBANO 1'){
                $distritoNascimento = 'Urbano nº 1';
            }
            if($distritoNascimento=='DISTRITO URBANO 2'){
                $distritoNascimento = 'Urbano nº 2';
            }
            if($distritoNascimento=='DISTRITO URBANO 3'){
                $distritoNascimento = 'Urbano nº 3';
            }
            if($distritoNascimento=='DISTRITO URBANO 5'){
                $distritoNascimento = 'Urbano nº 5';
            }
            if($distritoNascimento=='PEMBA CIDADE'){
                $distritoNascimento = 'Cidade de Pemba';
            }
            if($distritoNascimento=='Maputo Provincia'){
                $distritoNascimento = 'Provincia de Maputo';
            }
            $distritoNascimentoDB = $this->Entidade->CidadeNascimento->find('first',['conditions'=>['name
            LIKE'=>'%'.$distritoNascimento.'%']]);
            if(empty($distritoNascimentoDB)){

            }

            $distritoNascimento = $c['distrito_residencia'];
            if($distritoNascimento=='DISTRITO URBANO 4'){
                $distritoNascimento = 'Urbano nº 4';
            }
            if($distritoNascimento=='DISTRITO URBANO 1'){
                $distritoNascimento = 'Urbano nº 1';
            }
            if($distritoNascimento=='DISTRITO URBANO 2'){
                $distritoNascimento = 'Urbano nº 2';
            }
            if($distritoNascimento=='DISTRITO URBANO 3'){
                $distritoNascimento = 'Urbano nº 3';
            }
            if($distritoNascimento=='DISTRITO URBANO 5'){
                $distritoNascimento = 'Urbano nº 5';
            }
            if($distritoNascimento=='PEMBA CIDADE'){
                $distritoNascimento = 'Cidade de Pemba';
            }
            if($distritoNascimento=='Maputo Provincia'){
                $distritoNascimento = 'Provincia de Maputo';
            }
            $distritoResidenciaDB = $this->Entidade->CidadeNascimento->find('first',['conditions'=>['name
            LIKE'=>'%'.$distritoNascimento.'%']]);
            if(empty($distritoResidenciaDB)){

            }


            $paisNascimento = $c['pai_nascimento'];
            $paisNascimentoDB = $this->Entidade->PaisNascimento->findByName($paisNascimento);
            if(empty($paisNascimentoDB)){

            }

            $provinciaNascimento = $c['provincia_nascimento'];
            if($provinciaNascimento){
                if($provinciaNascimento=='Maputo Provincia'){
                    $provinciaNascimento = 'Maputo';
                }
                if($provinciaNascimento=='ZambÃ©zia'){
                    $provinciaNascimento = 'Zambezia';
                }
                if($provinciaNascimento=='Matola Cidade'){
                    $provinciaNascimento = 'Maputo';
                }
                $provinciaNascimentoDB = $this->Entidade->ProvinciaNascimento->findByName($provinciaNascimento);
                if(empty($provinciaNascimentoDB)){

                }
            }


            $provinciaNascimento = $c['provincia_frequencia'];
            if($provinciaNascimento){
                if($provinciaNascimento=='Maputo Provincia'){
                    $provinciaNascimento = 'Maputo';
                }
                if($provinciaNascimento=='ZambÃ©zia'){
                    $provinciaNascimento = 'Zambezia';
                }
                if($provinciaNascimento=='Matola Cidade'){
                    $provinciaNascimento = 'Maputo';
                }
                $provinciaFrequenciaDB = $this->Entidade->ProvinciaNascimento->findByName($provinciaNascimento);
                if(empty($provinciaFrequenciaDB)){

                }
            }


            $provinciaNascimento = $c['provincia_residencia'];
            if($provinciaNascimento){
                if($provinciaNascimento=='Maputo Provincia'){
                    $provinciaNascimento = 'Maputo';
                }
                if($provinciaNascimento=='ZambÃ©zia'){
                    $provinciaNascimento = 'Zambezia';
                }
                $provinciaResidenciaDB = $this->Entidade->ProvinciaNascimento->findByName($provinciaNascimento);
                if(empty($provinciaResidenciaDB)){

                }
            }


            $escola = $c['cand_escola_preuniversitaria'];
            if($escola){
                $escolaExiste = $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio->findByNameAndProvinciaId
                ($escola,$provinciaFrequenciaDB['ProvinciaNascimento']['id']);
                if(!empty($escolaExiste)){
                    $escolaNivelMedioId = $escolaExiste['EscolaNivelMedio']['id'];
                } else{
                    $escolaNullExiste = $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio
                        ->find('first',['conditions'=>['name'=>$escola,'provincia_id is null']]);
                    if(!empty($escolaNullExiste)){
                        $escolaNivelMedioId = $escolaNullExiste['EscolaNivelMedio']['id'];
                        $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio->id =
                            $escolaNullExiste['EscolaNivelMedio']['id'];
                        $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio->set('provincia_id',
                            $provinciaFrequenciaDB['ProvinciaNascimento']['id']);
                    } else{
                        $arrayEscola = array(
                            'EscolaNivelMedio'=>[
                                'name'=>$escola,
                                'provincia_id'=>$provinciaFrequenciaDB['ProvinciaNascimento']['id']
                            ]
                        );
                        $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio->create();
                        $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio->save($arrayEscola);
                        $escolaNivelMedioId = $this->Entidade->Aluno->AlunoNivelMedio->EscolaNivelMedio->id;
                    }
                }
            }


            $nuit = $c['nuit'];
            if(!is_int($nuit)){
                $nuit  = null;
            }
            $candidatoExiste = $this->Candidatura->findByNumeroCandidato($numero_candidato);
            if ($candidatoExiste) {
                $this->out('Existente');
                $this->Candidatura->id = $candidatoExiste['Candidatura']['id'];
            } else {
                $this->Candidatura->create();
                $this->Candidatura->set('numero_candidato', $numero_candidato);
            }
            $this->Candidatura->set('documento_identificacao_id', $tipoDocumentoId);
            $this->Candidatura->set('documento_identificacao_numero', $numeroDocumento);
            $this->Candidatura->set('documento_identificacao_data_validade', $c['validade']);
            $this->Candidatura->set('estado_civil_id', $estadoCivilId);
            $this->Candidatura->set('genero_id', $genero);
            $this->Candidatura->set('email', $c['email']);
            $this->Candidatura->set('telemovel', $c['celular']);
            $this->Candidatura->set('nuit', $nuit);
            $this->Candidatura->set('nacionalidade', $paisNascimentoDB['PaisNascimento']['id']);
            $this->Candidatura->set('pais_nascimento', $paisNascimentoDB['PaisNascimento']['id']);
            $this->Candidatura->set('provincia_nascimento', $provinciaNascimentoDB['ProvinciaNascimento']['id']);
            $this->Candidatura->set('provincia_candidatura', $provinciaFrequenciaDB['ProvinciaNascimento']['id']);
            $this->Candidatura->set('provincia_residencia', $provinciaResidenciaDB['ProvinciaNascimento']['id']);
            $this->Candidatura->set('ano_conclusao', $c['anoConclusao']);
            $this->Candidatura->set('escola_nivel_medio_id', $escolaNivelMedioId);
            $this->Candidatura->set('nome_pai', $c['nomePai']);
            $this->Candidatura->set('nome_mae', $c['nomeMae']);
            $this->Candidatura->set('distrito_nascimento', $distritoNascimentoDB['CidadeNascimento']['id']);
            $this->Candidatura->set('distrito_residencia', $distritoResidenciaDB['CidadeNascimento']['id']);


            try{
                $this->Candidatura->save();
            } catch(Exception $e){
                print_r($this->Candidatura->data);
            }
            $this->out($total . '----------------Candidato Criado---------------' . $this->Candidatura->id);
            $total--;
        }

    }




}
