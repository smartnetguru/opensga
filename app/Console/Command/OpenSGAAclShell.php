<?php

/**
 * Vamos tentar criar aqui uma superlogica de permissoes que vai fazer com que tudo de certo :)
 * A dica é a seguinte:
 * Pegamos todos os users que tiverem a coluna verifica_permissoes = 1, e dai criamos as permissoes de acordo com o
 * seu  a sua unidade_organica,e a sua funcao_profissional
 *
 * Vamos criar metodos diferentes para funcionarios, docentes e estudantes, para não atrapalhar as coisas
 */
class OpenSGAAclShell extends AppShell
{

    //@formatter:off
    public $uses = ['Funcionario', 'User'];

    public $tasks = array('MainPermission'); // found in Console/Command/Task/SoundTask.php

    public function main()
    {

        $parametros = $this->params;
        $conditions = [];
        if (isset($parametros['username'])) {
            $conditions['User.username'] = $parametros['username'];
        } elseif (isset($parametros['userId'])) {
            $conditions['User.id'] = $parametros['userId'];
        } elseif (isset($parametros['tipoUsuario'])) {
            $conditions['User.group_id'] = $parametros['tipoUsuario'];
        }

        $db = ConnectionManager::getDataSource('default');

        $isconnected = $db->isConnected();  //is the connection open?
        $db->close();  //close the connection
        $db->reconnect();  //reconnect to the db

        if (isset($parametros['codigoUnidade'])) {
            $this->User->Funcionario->contain([
                'UnidadeOrganica',
                'User'
            ]);
            $users = $this->User->Funcionario->find('all',
                ['conditions' => ['UnidadeOrganica.codigo_interno' => $parametros['codigoUnidade']]]);
        } else {
            $users = $this->User->find('all', array('conditions' => $conditions));
        }

        foreach ($users as $user) {

            $comando = "acl deny User.{$user['User']['id']} controllers --quiet";
            $this->out($comando);
            $this->dispatchShell($comando);
            $this->params['userId'] = $user['User']['id'];
            $this->MainPermission->execute();

            $plugins = CakePlugin::loaded();
            foreach ($plugins as $k => $pluginName) {
                $taskName = $pluginName . '.' . $pluginName . 'Permissao';
                try {
                    $PermissionTask = $this->Tasks->load($taskName);
                    $PermissionTask->execute($this->params);
                    $this->Tasks->unload($taskName);

                } catch (Exception $e) {
                }

            }
        }

    }

    public function getOptionParser()
    {
        $parser = parent::getOptionParser();
        $parser->addOption('userId');
        $parser->addOption('username');
        $parser->addOption('codigoUnidade');
        $parser->addOption('tipoUsuario');

        return $parser;


    }


    public function estudantes()
    {
        $grupo = $this->User->Group;
        $grupo->id = 3;
        $comandos[] = "acl deny Group.3 controllers";
        $comandos[] = "acl grant Group.3 controllers/Alunos/estudante_perfil";
        $comandos[] = "acl grant Group.3 controllers/Alunos/estudante_editar_perfil";
        $comandos[] = "acl grant Group.3 controllers/Alunos/estudante_mostrar_foto";
        $comandos[] = "acl grant Group.3 controllers/Alunos/estudante_index";

        $comandos[] = "acl grant Group.3 controllers/CerimoniaGraduacaos/estudante_index";
        $comandos[] = "acl grant Group.3 controllers/CerimoniaGraduacaos/estudante_inscricao";
        $comandos[] = "acl grant Group.3 controllers/CerimoniaGraduacaos/estudante_pagamento_inscricao";
        $comandos[] = "acl grant Group.3 controllers/CerimoniaGraduacaos/estudante_ver_detalhes";

        $comandos[] = "acl grant Group.3 controllers/Inscricaos/estudante_ver_inscricoes_aluno";
        $comandos[] = "acl grant Group.3 controllers/Inscricaos/estudante_index";
        $comandos[] = "acl grant Group.3 controllers/Inscricaos/estudante_ver_detalhes_inscricao";
        $comandos[] = "acl grant Group.3 controllers/Inscricaos/estudante_inscrever";
        $comandos[] = "acl grant Group.3 controllers/Inscricaos/estudante_anular_inscricao";
        $comandos[] = "acl grant Group.3 controllers/Inscricaos/estudante_adicionar_cadeiras_inscricao";

        $comandos[] = "acl grant Group.3 controllers/Matriculas/estudante_como_renovar";
        $comandos[] = "acl grant Group.3 controllers/Matriculas/estudante_index";
        $comandos[] = "acl grant Group.3 controllers/Matriculas/estudante_anular_matricula";
        $comandos[] = "acl grant Group.3 controllers/Matriculas/estudante_ver_matricula";
        $comandos[] = "acl grant Group.3 controllers/Matriculas/estudante_renovar_matricula";

        $comandos[] = "acl grant Group.3 controllers/Messages/estudante_index";
        $comandos[] = "acl grant Group.3 controllers/Messages/estudante_enviar_mensagem";
        $comandos[] = "acl grant Group.3 controllers/Messages/estudante_ver_mensagem";

        $comandos[] = "acl grant Group.3 controllers/Turmas/estudante_index";
        $comandos[] = "acl grant Group.3 controllers/Turmas/estudante_ver_turma";

        $comandos[] = "acl grant Group.3 controllers/users/estudante_mostrar_foto";
        $comandos[] = "acl grant Group.3 controllers/users/estudante_perfil";
        $comandos[] = "acl grant Group.3 controllers/users/estudante_trocar_senha";
        $comandos[] = "acl grant Group.3 controllers/users/estudante_after_fb_login";
        $comandos[] = "acl grant Group.3 controllers/users/estudante_changeLoginProfile";

        foreach ($comandos as $comando) {
            $this->dispatchShell($comando);
        }
    }


}
