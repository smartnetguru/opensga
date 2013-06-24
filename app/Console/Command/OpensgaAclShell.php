<?php

/** 
 * Vamos tentar criar aqui uma superlogica de permissoes que vai fazer com que tudo de certo :)
 * A dica é a seguinte:
 * Pegamos todos os users que tiverem a coluna verifica_permissoes = 1, e dai criamos as permissoes de acordo com o seu  a sua unidade_organica,e a sua funcao_profissional
 * 
 * Vamos criar metodos diferentes para funcionarios, docentes e estudantes, para não atrapalhar as coisas
 */
class OpensgaAclShell extends AppShell {
    public $uses = array('Funcionario','User','Docente','Aluno');
    public function main() {
        $this->out('Hello world.');
    }
    
    public function funcionarios(){
        //Pegamos todos funcionarios
        $this->Funcionario->contain(array('User'));
        $funcionarios = $this->Funcionario->find('all',array('conditions'=>array('group_id'=>2,'verificar_permissoes OR'=>array(1,null))));
        foreach($funcionarios as $funcionario){
            debug($funcionario);
        }
    }
   
        
    
}