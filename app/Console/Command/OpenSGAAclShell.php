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
        $funcionarios = $this->Funcionario->find('all', array('conditions' => array('group_id' => 2,'User.id'=>'42849')));
        foreach ($funcionarios as $funcionario) {
            $comando_acl = array();
            $comando_acl[] = "acl deny User.{$funcionario['User']['id']} controllers";
            
            
            $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/login";
            
            $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/logout";
            
            $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_logout";
            
            $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/enviar_sms";
                    
                    
             //Permissoes para funcionarios da faculdade
            if ($this->User->isFromFaculdade($funcionario['User']['id'])) {
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Pages/faculdade_home";
                
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_trocar_senha";
                
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_index";
                
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_view";
                
            } else {
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Pages/home";
                
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/trocar_senha";
                
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    
                $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Requisicoes/RequisicoesPedidos/entregar_cartao_novo_ingresso";
                
                
                $unidade_organica = $this->UnidadeOrganica->findById($funcionario['Funcionario']['unidade_organica_id']);
                
                /*
                 * Permissoes comuns para todos Funcionarios da DRA
                 */
                if($unidade_organica['UnidadeOrganica']['codigo']=='DRA'){
                     
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    
                }
                if($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DI'){
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_status";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/editar_estudante";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_nome";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/mudanca_curso";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/concluir_nivel";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/renovar_matricula";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/reingresso";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/busca_candidato";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/matricular_candidato";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_boletim_matricula";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_matricula";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_mudanca_curso";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_renovacao_matricula";
                    
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/cerimonia_graduacao";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/CerimoniaGraduacaos/index";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/CerimnoniaGraduacaos/nova_cerimonia";
                    
                    

                                        

                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DR'){
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DA'){
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comando_acl[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                }
            }
            foreach($comando_acl as $c_acl){
                $this->dispatchShell($c_acl);
            }
            debug($unidade_organica);
        }
    }

}