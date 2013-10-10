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
            $this->out($funcionario['User']['username']);
            
            $comandos = array();
            $comandos[] = "acl deny User.{$funcionario['User']['id']} controllers";
            
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/login";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/logout";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_logout";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/enviar_sms";
                    
                    
             //Permissoes para funcionarios da faculdade
            if ($this->User->isFromFaculdade($funcionario['User']['id'])) {
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Pages/faculdade_home";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_trocar_senha";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_index";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_view";
                
            } else {
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Pages/home";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/trocar_senha";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Requisicoes/RequisicoesPedidos/entregar_cartao_novo_ingresso";
                
                
                $unidade_organica = $this->UnidadeOrganica->findById($funcionario['Funcionario']['unidade_organica_id']);
                
                /*
                 * Permissoes comuns para todos Funcionarios da DRA
                 */
                if($unidade_organica['UnidadeOrganica']['codigo']=='DRA'){
                     
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    
                }
                if($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DI'){
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_status";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/editar_estudante";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_nome";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/mudanca_curso";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/concluir_nivel";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/renovar_matricula";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/reingresso";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/busca_candidato";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/matricular_candidato";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_boletim_matricula";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_matricula";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_mudanca_curso";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/print_comprovativo_renovacao_matricula";
                   $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/cerimonia_graduacao";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/CerimoniaGraduacaos/index";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/CerimoniaGraduacaos/ver_detalhes";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/CerimoniaGraduacaos/print_lista_graduandos";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/CerimoniaGraduacaos/nova_cerimonia";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Logs/index";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Logs/view";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Matriculas/carregar_ficheiro_renovacao";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Matriculas/renovacao_matriculas";

                                        

                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DR'){
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DA'){
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                }
            }
            
            foreach($comandos as $comando){
                $this->out($comando);
                $this->dispatchShell($comando);
            }
        }
    }

}