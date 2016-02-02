<?php

App::import('Vendor', 'PHPExcel', array('file' => 'PHPExcel.php'));
		if (!class_exists('PHPExcel'))
			throw new CakeException('Vendor class PHPExcel not found!');

//die(debug($aluno));
        $this->PhpExcel->loadWorksheet(APP.'Reports'.DS.'ficha_cadastro.xlsx');

        //Ano de Ingresso
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('K3', $aluno['Aluno']['ano_ingresso']);

        $this->PhpExcel->xls->getActiveSheet()->setCellValue('G8', $aluno['Aluno']['codigo']);
        //Faculdade
        //$this->PhpExcel->xls->getActiveSheet()->setCellValue('C11', $aluno['Curso']['Faculdade']['name']);
        //Curso
        
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D12', $aluno['Curso']['name']);

        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D15', $aluno['Entidade']['apelido']); //Apelido
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('N15', $aluno['Entidade']['EstadoCivil']['name']); //Estado Civil
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D16', $aluno['Entidade']['nomes']); //Outros Nomes
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D17', $aluno['Entidade']['nomepai']); //Nome do Pai
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('D18', $aluno['Entidade']['nomemae']); //Nome da Mae
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('B21', $aluno['Entidade']['PaisNascimento']['name']); //Pais de Nascimento
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('H21', $aluno['Entidade']['ProvinciaNascimento']['name']); //Provincia de Nascimento
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('N21', $aluno['Entidade']['CidadeNascimento']['name']); //Cidade de Nascimento
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('E23', $aluno['Entidade']['data_nascimento']); //Data de Nascimento
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('I23', $aluno['Entidade']['Genero']['name']); //Sexo
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('M23', $aluno['Entidade']['PaisNascimento']['name']); //Nacionalidade
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('G25', $aluno['Entidade']['DocumentoIdentificacao']['name'].'/'.$aluno['Entidade']['documento_identificacao_num']); //Numero de Documento de Identificacao
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('O25', $aluno['Entidade']['documento_identificacao_validade']); //Data de Validade

        /**
         *@todo Faltam dados de morada
         */


        //Inscricoes e notas
        $linha_actual = 38;
        foreach($inscricaos as $inscricao){
            if(!in_array($linha_actual, array(71,72,106,107))){

                $this->PhpExcel->xls->getActiveSheet()->setCellValue('A'.$linha_actual, $inscricao['Turma']['AnoLectivo']['ano']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('B'.$linha_actual, $inscricao['Turma']['semestre_curricular']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('C'.$linha_actual, $inscricao['Turma']['Disciplina']['name']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('H'.$linha_actual, ''); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('I'.$linha_actual, ''); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('J'.$linha_actual, ''); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('K'.$linha_actual, $inscricao['Inscricao']['nota_frequencia']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('L'.$linha_actual, ''); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('M'.$linha_actual, $inscricao['Inscricao']['nota_exame_normal']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('N'.$linha_actual, ''); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('O'.$linha_actual, $inscricao['Inscricao']['nota_exame_recorrencia']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('P'.$linha_actual, $inscricao['Inscricao']['nota_final']); //Apelido
                $this->PhpExcel->xls->getActiveSheet()->setCellValue('R'.$linha_actual, ''); //Apelido

            }

            $linha_actual++;
        }

        if($has_foto_entidade){
            $this->PhpExcel->addImage(APP.'Assets'.DS.'Fotos'.DS.'Estudantes'.DS.$aluno['Aluno']['codigo'].'.JPG','N1',5,180,175); //Fotografia
        } else{
            $this->PhpExcel->addImage(WWW_ROOT.'img'.DS.'default_profile_picture.jpg','N1',5,180,175); //Fotografia
        }
        $this->PhpExcel->addImage(WWW_ROOT.'img'.DS.'logo_login_'.Configure::read('OpenSGA.instituicao.sigla').'.png','A1',10,220,145); //Logotipo
        $this->PhpExcel->xls->getActiveSheet()->setCellValue('A7', Configure::read('OpenSGA.instituicao.nome')); //Nome da Instituicao

        $this->PhpExcel->addWorksheetMeta($this->Session->read('Auth.User.name'),'Ficha Cadastro');
        $this->PhpExcel->xls->getActiveSheet()->setShowGridlines(false);


        $this->PhpExcel->xls->getSecurity()->setLockWindows(true);
        $this->PhpExcel->xls->getSecurity()->setLockStructure(true);
        $this->PhpExcel->xls->getSecurity()->setWorkbookPassword("PHPExcel");


        $this->PhpExcel->xls->getActiveSheet()->getProtection()->setPassword('PHPExcel');
        $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSheet(true); // This should be enabled in order to enable any of the following!
        $this->PhpExcel->xls->getActiveSheet()->getProtection()->setSort(true);
        $this->PhpExcel->xls->getActiveSheet()->getProtection()->setObjects(true);
        $this->PhpExcel->xls->getActiveSheet()->getProtection()->setInsertRows(true);
        $this->PhpExcel->xls->getActiveSheet()->getProtection()->setFormatCells(true);

        $this->PhpExcel->output('ficha_cadastro_'.$aluno['Aluno']['codigo'].'.xlsx');
