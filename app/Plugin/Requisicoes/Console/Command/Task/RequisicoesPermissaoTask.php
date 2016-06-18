<?php

class RequisicoesPermissaoTask extends AppShell
{

    //@formatter:off
    public $uses = ['User', 'UnidadeOrganica'];

    public $comandos = [];

    public function execute(array $params)
    {

        $this->params = $params;


        $userId = $this->params['userId'];

        if ($this->User->isFuncionario($userId)) {
            $this->funcionarios($userId);
        }
        if ($this->User->isDocente($userId)) {
            $this->docentes($userId);
        }

        foreach ($this->comandos as $comando) {
            $this->out($comando);
            $this->dispatchShell($comando);
        }
    }

    public function funcionarios($userId)
    {
        //Pegamos todos funcionarios
        $this->User->Funcionario->contain(['User']);
        $funcionario = $this->User->Funcionario->findByUserId($userId);


        $this->out($funcionario['User']['username']);
        $path = $this->UnidadeOrganica->getPath($funcionario['Funcionario']['unidade_organica_id'],
            ['id', 'codigo']);
        $unidadesOrganicas = Hash::extract($path, '{n}.UnidadeOrganica.codigo');


        //Permissoes para funcionarios da faculdade
        if ($this->User->isFromFaculdade($funcionario['User']['id'])) {

            $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Artigos/Artigos/dashboard";

        } else {

            $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Artigos/Artigos/dashboard";
            $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Artigos/Artigos/artigos_recentes";
            $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Artigos/Artigos/adicionar_artigo";
            $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Artigos/Artigos/editar_artigo";
            $this->comandos[] = "acl grant User.{$funcionario['User']['id']} controllers/Artigos/Artigos/remover_artigo";
        }


    }

    public function docentes()
    {
    }

}

?>