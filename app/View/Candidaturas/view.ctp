<div class="candidaturas view">
    <h2><?php echo __('Candidatura'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Entidade'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['Entidade']['name'],
                    ['controller' => 'entidades', 'action' => 'view', $candidatura['Entidade']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Escola Nivel Medio'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['EscolaNivelMedio']['name'], [
                    'controller' => 'escola_nivel_medios',
                    'action'     => 'view',
                    $candidatura['EscolaNivelMedio']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Conclusao Nivel Medio'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['ano_conclusao_nivel_medio']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Provincia'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['Provincia']['name'],
                    ['controller' => 'provincias', 'action' => 'view', $candidatura['Provincia']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pais'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['pais']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Aluno Via Admissao'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['AlunoViaAdmissao']['name'], [
                    'controller' => 'aluno_via_admissaos',
                    'action'     => 'view',
                    $candidatura['AlunoViaAdmissao']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo Resultado Exame Admissao Id'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['tipo_resultado_exame_admissao_id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Curso'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['Curso']['name'],
                    ['controller' => 'cursos', 'action' => 'view', $candidatura['Curso']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Candidatura'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['ano_candidatura']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Numero Opcao'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['numero_opcao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Numero Candidato'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['numero_candidato']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Apelido'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['apelido']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nomes'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['nomes']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo Ingresso'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['TipoIngresso']['name'],
                    ['controller' => 'tipo_ingressos', 'action' => 'view', $candidatura['TipoIngresso']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nome Faculdade'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['nome_faculdade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nome Curso'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['nome_curso']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Matricula'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['EstadoMatricula']['name'],
                    ['controller' => 'estadomatriculas', 'action' => 'view', $candidatura['EstadoMatricula']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Data Matricula'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['data_matricula']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Funcionario'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['Funcionario']['id'],
                    ['controller' => 'funcionarios', 'action' => 'view', $candidatura['Funcionario']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Unidade Organica'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['UnidadeOrganica']['name'], [
                    'controller' => 'unidade_organicas',
                    'action'     => 'view',
                    $candidatura['UnidadeOrganica']['id'],
            ]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Localidade'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['localidade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Local Id Normal'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['local_id_normal']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bolsa Tipo Bolsa'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['BolsaTipoBolsa']['name'],
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'view', $candidatura['BolsaTipoBolsa']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Numero Estudante'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['numero_estudante']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Conclusao'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['ano_conclusao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Genero'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['Genero']['name'],
                    ['controller' => 'generos', 'action' => 'view', $candidatura['Genero']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Civil'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['estado_civil']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nacionalidade'); ?></dt>
        <dd>
            <?php echo h($candidatura['Candidatura']['nacionalidade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Turno'); ?></dt>
        <dd>
            <?php echo $this->Html->link($candidatura['Turno']['name'],
                    ['controller' => 'turnos', 'action' => 'view', $candidatura['Turno']['id']]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Candidatura'),
                    ['action' => 'edit', $candidatura['Candidatura']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Candidatura'),
                    ['action' => 'delete', $candidatura['Candidatura']['id']], null,
                    __('Are you sure you want to delete # %s?', $candidatura['Candidatura']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Candidaturas'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Candidatura'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Entidades'),
                    ['controller' => 'entidades', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Entidade'), ['controller' => 'entidades', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Escola Nivel Medios'),
                    ['controller' => 'escola_nivel_medios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Escola Nivel Medio'),
                    ['controller' => 'escola_nivel_medios', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Provincias'),
                    ['controller' => 'provincias', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Provincia'),
                    ['controller' => 'provincias', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Aluno Via Admissaos'),
                    ['controller' => 'aluno_via_admissaos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno Via Admissao'),
                    ['controller' => 'aluno_via_admissaos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Cursos'), ['controller' => 'cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso'), ['controller' => 'cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipo Ingressos'),
                    ['controller' => 'tipo_ingressos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Ingresso'),
                    ['controller' => 'tipo_ingressos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estadomatriculas'),
                    ['controller' => 'estadomatriculas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Matricula'),
                    ['controller' => 'estadomatriculas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Funcionarios'),
                    ['controller' => 'funcionarios', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Funcionario'),
                    ['controller' => 'funcionarios', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Bolsa Tipo Bolsas'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Bolsa Tipo Bolsa'),
                    ['controller' => 'bolsa_tipo_bolsas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Generos'), ['controller' => 'generos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Genero'), ['controller' => 'generos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Turnos'), ['controller' => 'turnos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Turno'), ['controller' => 'turnos', 'action' => 'add']); ?> </li>
    </ul>
</div>
