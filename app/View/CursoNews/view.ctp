<div class="cursoNews view">
    <h2><?php echo __('Curso News'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Grau Academico'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoNews['GrauAcademico']['name'],
                    ['controller' => 'grau_academicos', 'action' => 'view', $cursoNews['GrauAcademico']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo Curso'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoNews['TipoCurso']['name'],
                    ['controller' => 'tipo_cursos', 'action' => 'view', $cursoNews['TipoCurso']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Codigo'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['codigo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['modified']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Pagamento Exclusivo'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['pagamento_exclusivo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Unidade Organica'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoNews['UnidadeOrganica']['name'],
                    ['controller' => 'unidade_organicas', 'action' => 'view', $cursoNews['UnidadeOrganica']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created By'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['created_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified By'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['modified_by']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Codigo Admissao'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['codigo_admissao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado Objecto'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoNews['EstadoObjecto']['name'],
                    ['controller' => 'estado_objectos', 'action' => 'view', $cursoNews['EstadoObjecto']['id']]); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Ano Criacao'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['ano_criacao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Duracao'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['duracao']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('User Responsavel Curso'); ?></dt>
        <dd>
            <?php echo h($cursoNews['CursoNews']['user_responsavel_curso']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Curso Responsavel'); ?></dt>
        <dd>
            <?php echo $this->Html->link($cursoNews['CursoResponsavel']['id'], [
                    'controller' => 'curso_responsavels',
                    'action'     => 'view',
                    $cursoNews['CursoResponsavel']['id'],
            ]); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Curso News'),
                    ['action' => 'edit', $cursoNews['CursoNews']['id']]); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Curso News'),
                    ['action' => 'delete', $cursoNews['CursoNews']['id']],
                    ['confirm' => __('Are you sure you want to delete # %s?', $cursoNews['CursoNews']['id'])]); ?> </li>
        <li><?php echo $this->Html->link(__('List Curso News'), ['action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso News'), ['action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Grau Academicos'),
                    ['controller' => 'grau_academicos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Grau Academico'),
                    ['controller' => 'grau_academicos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Tipo Cursos'),
                    ['controller' => 'tipo_cursos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Tipo Curso'),
                    ['controller' => 'tipo_cursos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Unidade Organicas'),
                    ['controller' => 'unidade_organicas', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Unidade Organica'),
                    ['controller' => 'unidade_organicas', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Estado Objectos'),
                    ['controller' => 'estado_objectos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Estado Objecto'),
                    ['controller' => 'estado_objectos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Curso Responsavels'),
                    ['controller' => 'curso_responsavels', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Curso Responsavel'),
                    ['controller' => 'curso_responsavels', 'action' => 'add']); ?> </li>
    </ul>
</div>
