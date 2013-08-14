<?php

/**
 * Vamos tentar criar aqui uma superlogica de permissoes que vai fazer com que tudo de certo :)
 * A dica é a seguinte:
 * Pegamos todos os users que tiverem a coluna verifica_permissoes = 1, e dai criamos as permissoes de acordo com o seu  a sua unidade_organica,e a sua funcao_profissional
 * 
 * Vamos criar metodos diferentes para funcionarios, docentes e estudantes, para não atrapalhar as coisas
 */
class OpenSGAAclShell extends AppShell {

    public $uses = array('Funcionario', 'User', 'Docente', 'Aluno','UnidadeOrganica');

    public function main() {
        $this->out('Hello world.');
    }

    public function funcionarios() {
        //Pegamos todos funcionarios
        $this->Funcionario->contain(array('User'));
        $funcionarios = $this->Funcionario->find('all', array('conditions' => array('group_id' => 2)));
        foreach ($funcionarios as $funcionario) {
            $acl_command = "acl deny User.{$funcionario['User']['id']} controllers";
            $this->dispatchShell($acl_command);
            
            $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Users/login";
            $this->dispatchShell($acl_command);
            $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Users/logout";
            $this->dispatchShell($acl_command);
            $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_logout";
            $this->dispatchShell($acl_command);
            if ($this->User->isFromFaculdade($funcionario['User']['id'])) {
                $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Pages/faculdade_home";
                $this->dispatchShell($acl_command);
                $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_trocar_senha";
                $this->dispatchShell($acl_command);
            } else {
                $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Pages/home";
                $this->dispatchShell($acl_command);
                $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Users/trocar_senha";
                $this->dispatchShell($acl_command);
                $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    $this->dispatchShell($acl_command);
                $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Requisicoes/RequisicoesPedidos/entregar_cartao_novo_ingresso";
                $this->dispatchShell($acl_command);
                $unidade_organica = $this->UnidadeOrganica->findById($funcionario['Funcionario']['unidade_organica_id']);
                
                /*
                 * Permissoes comuns para todos Funcionarios da DRA
                 */
                if($unidade_organica['UnidadeOrganica']['codigo']=='DRA'){
                     
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    $this->dispatchShell($acl_command);
                }
                if($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DI'){
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_status";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_nome";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/mudanca_curso";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/concluir_nivel";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/renovar_matricula";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/busca_candidato";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/matricular_candidato";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_boletim_matricula";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_matricula";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_mudanca_curso";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_renovacao_matricula";
                    $this->dispatchShell($acl_command);
                    
                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DR'){
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    $this->dispatchShell($acl_command);
                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DA'){
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    $this->dispatchShell($acl_command);
                    $acl_command = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    $this->dispatchShell($acl_command);
                }
            }
            debug($unidade_organica);
        }
    }

}