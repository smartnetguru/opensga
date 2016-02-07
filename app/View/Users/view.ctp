<div class="actions" id="left-column">
    <h3><?php echo __('Secções'); ?></h3>
    <br/>
    <?php echo $this->Html->link(sprintf(__('Alterar Senha', true)),
            ['controller' => 'users', 'action' => 'trocar_senha'], ['class' => 'link']);
    ?>
</div>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Lista de usuários', true)), ['action' => 'index'],
                ['class' => 'button']); ?>
        <h1><?php echo __('Usuário'); ?></h1>
        <div class="breadcrumbs"><?php ?></div>
    </div>
    <div class="table">

        <?php echo $this->Form->create('User'); ?>
        <table class="listingform" cellpadding="0" cellspacing="0">
            <tr>
                <th class="full" colspan="2"><?php echo __('Registrar Novo Aluno'); ?></th>
            </tr>
            <?php
                echo $this->Form->input('username', [
                        'disabled' => 'true',
                        'label'    => 'Usuario',
                        'before'   => '<tr><td>',
                        'between'  => '</td><td>',
                        'after'    => '</td></tr>',
                        'div'      => false,
                ]);
                echo $this->Form->input('password', [
                        'disabled' => 'true',
                        'label'    => 'Password',
                        'before'   => '<tr><td>',
                        'between'  => '</td><td>',
                        'after'    => '</td></tr>',
                        'div'      => false,
                ]);
                echo $this->Form->input('codigocartao', [
                        'disabled' => 'true',
                        'label'    => 'Codigo do Cartao',
                        'before'   => '<tr><td>',
                        'between'  => '</td><td>',
                        'after'    => '</td></tr>',
                        'div'      => false,
                ]);
                echo $this->Form->input('group_id', [
                        'disabled' => 'true',
                        'label'    => 'Grupo',
                        'before'   => '<tr><td>',
                        'between'  => '</td><td>',
                        'after'    => '</td></tr>',
                        'div'      => false,
                ]);
            ?>

            <tr>
                <td></td>
                <td><?php //echo $this->Form->end(__('Carregar', true));?></td>
            </tr>
        </table>
    </div>
</div>
</div>