<?php
    /* ---------------------------------------------------------- */
    /* OP��O : Pedagogica                                         */
    /* menu lateral, incluir em todos os files                    */
    /* 2010.10.16  RA                    (c)2010 Cofimatica, Lda  */
    /* ---------------------------------------------------------- */
?>

<div class="actions" id="left-column">
    <h3><?php echo __('Detalhes Adicionais'); ?></h3>
    <br/>
    <?php echo $this->Html->link(sprintf(__('Administração >>', true)), ['controller' => 't0002funcionarios'],
            ['class' => 'link2']); ?>
    <?php echo $this->Html->link(sprintf(__('Graus Academicos', true)), ['controller' => 'Tg0001grauacademicos'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Países', true)), ['controller' => 'tg0002paises'], ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Províncias', true)), ['controller' => 'tg0003provincias'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Cidades', true)), ['controller' => 'tg0004cidades'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Cargos', true)), ['controller' => 'tg0005cargos'], ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Departamentos', true)), ['controller' => 'tg0006departamentos'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Tipos de Curso', true)), ['controller' => 'tg0007tipocursos'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Grupos Disciplinares', true)), ['controller' => 'tg0008grupodisciplinars'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Docs de Identificação', true)), ['controller' => 'tg0009documentos'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Áreas de Trabalho', true)), ['controller' => 'tg0010areatrabalhos'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Turnos', true)), ['controller' => 'tg0012turnos'],
            ['class' => 'linkselected']); ?>
    <?php echo $this->Html->link(sprintf(__('Escolas', true)), ['controller' => 'tg0016escolas'],
            ['class' => 'link']); ?>
    <?php echo $this->Html->link(sprintf(__('Gêneros', true)), ['controller' => 'tg0019generos'],
            ['class' => 'link']); ?>

</div>