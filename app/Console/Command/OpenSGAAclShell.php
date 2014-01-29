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
    
    public function docentes(){
        $this->Docente->contain(array(
            'Entidade'=>array(
                'User'
            )
        ));
        $docentes = $this->Docente->find('all', array('conditions' => array('User.group_id' => 4)));
        foreach($docentes as $docente){
            $user_id = $docente['Entidade']['User']['id'];
            $comandos = array();
            $comandos[] = "acl deny User.{$funcionario['User']['id']} controllers";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Docentes/docente_meu_perfil";
        }
    }

    public function funcionarios() {
        //Pegamos todos funcionarios
        $this->Funcionario->contain(array('User'));
        $funcionarios = $this->Funcionario->find('all', array('conditions' => array('group_id' => 2)));
        
        foreach ($funcionarios as $funcionario) {
            $this->out($funcionario['User']['username']);
            
            $unidade_organica = $this->UnidadeOrganica->findById($funcionario['Funcionario']['unidade_organica_id']);
            $unidadeOrganicas = $this->UnidadeOrganica->find('all', array('conditions' => array('parent_id' => $unidade_organica['UnidadeOrganica']['id'])));
         
            if ($unidadeOrganicas) {
            $unidades_organicas = Hash::extract($unidadeOrganicas, '{n}.UnidadeOrganica.codigo');

            $unidades_organicas[] = $unidade_organica['UnidadeOrganica']['codigo'];
         
        } else {
            $unidade_organicas = array($unidade_organica['UnidadeOrganica']['codigo']);
        }
           
           
            $comandos = array();
            $comandos[] = "acl deny User.{$funcionario['User']['id']} controllers";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/autocomplete";
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/mostrar_foto";
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/login";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/logout";
            
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_logout";
            
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/enviar_sms";
            $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/trocar_senha";
                    
                    
             //Permissoes para funcionarios da faculdade
            if ($this->User->isFromFaculdade($funcionario['User']['id'])) {
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cursos/faculdade_index";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cursos/faculdade_ver_curso";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cursos/faculdade_adicionar_curso";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cursos/faculdade_editar_curso";
                                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/faculdade_index";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/faculdade_ver_disciplina";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/faculdade_adicionar_disciplina";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/faculdade_editar_disciplina";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/faculdade_desactivar_disciplina";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/faculdade_remover_disciplina";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Inscricaos/faculdade_inscrever";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Inscricaos/faculdade_valida_inscricao";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Inscricaos/faculdade_ver_inscricoes_aluno";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Inscricaos/faculdade_adicionar_cadeiras_inscricao";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Inscricaos/faculdade_print_comprovativo_inscricao";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Pages/faculdade_home";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/PlanoEstudos/faculdade_index";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/PlanoEstudos/faculdade_adicionar_plano_estudo";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/PlanoEstudos/faculdade_editar_plano_estudo";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/PlanoEstudos/faculdade_ver_plano_estudo";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/PlanoEstudos/faculdade_adicionar_disciplinas";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/PlanoEstudos/faculdade_adicionar_precedencias";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_logout";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_trocar_senha";
                
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_index";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_print_pauta";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_ver_turma";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Turmas/faculdade_print_lista_estudantes";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/faculdade_index";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/faculdade_perfil_estudante";
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/faculdade_pesquisa_aluno_action";
                
            } else {
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Pages/home";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/trocar_senha";
                
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    
                $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Requisicoes/RequisicoesPedidos/entregar_cartao_novo_ingresso";
                
                
                
                
                /*
                 * Permissoes comuns para todos Funcionarios da DRA
                 */
                if(in_array('DRA',$unidade_organicas)){
                     
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/pesquisa_aluno_action";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Candidaturas/index";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/index";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/ver_disciplina";
                    
                    
                }
                if(in_array('DRA_DI',$unidade_organicas)){
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/alterar_status";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/editar_estudante";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/exportar_alunos";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/exportar_alunos_excel";
                    
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
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cursos/adicionar_curso";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Cursos/editar_curso";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/adicionar_disciplina";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Disciplinas/editar_disciplina";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Groups/index";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Groups/novo_grupo";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Groups/editar_grupo";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Groups/remover_grupo";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Groups/ver_grupo";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Logs/index";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Logs/view";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Matriculas/carregar_ficheiro_renovacao";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Matriculas/renovacao_matriculas";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Requisicoes/RequisicoesPedidos/cartao_estudantes";

                                        

                } elseif(in_array('DRA_DR',$unidade_organicas)){
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='DRA_DA'){
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/index";
                    
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/perfil_estudante";
                    
                } elseif($unidade_organica['UnidadeOrganica']['codigo']=='GC'){
                    //Funcionarios do Gabinete de Cooperacao
                    $comandos[] = "acl deny User.{$funcionario['User']['id']} controllers";
            
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/autocomplete";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/mostrar_foto";
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/login";
            
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/logout";
            
            
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Users/faculdade_logout";
            
                    $comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Alunos/enviar_sms";
                }
                
                
            }
            
            foreach($comandos as $comando){
                $this->out($comando);
                $this->dispatchShell($comando);
            }
        }
    }

}