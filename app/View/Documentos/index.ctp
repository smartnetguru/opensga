<?php //include('menu.ctp'); ?>

<div class="projectos index" id="center-column">
    <div class="top-bar">
        <?php echo $this->Html->link(sprintf(__('Novo DocumentoIdentificacao', true)), ['action' => 'add'],
                ['class' => 'button']); ?>
        <h1><?php echo __('DocumentoIdentificacaos'); ?></h1>

    </div>

    <div class="table">
        <table cellpadding="0" cellspacing="0" class="listing">
            <tr>
                <th><?php echo $this->Paginator->sort('Id', 'id'); ?></th>
                <th><?php echo $this->Paginator->sort('Nome', 'name'); ?></th>
                <th class="actions"><?php echo __('Accoes'); ?></th>
            </tr>
            <?php
                $i = 0;
                foreach ($documentos as $tg0009documento):
                    $class = null;
                    if ($i++ % 2 == 0) {
                        $class = ' class="altrow"';
                    }
                    ?>
                    <tr<?php echo $class; ?>>
                        <td><?php echo $tg0009documento['DocumentoIdentificacao']['id']; ?>&nbsp;</td>
                        <td><?php echo $tg0009documento['DocumentoIdentificacao']['name']; ?>&nbsp;</td>
                        <td class="accoes">
                            <?php echo $this->Html->image("/img/login-icon.gif", [
                                    "alt"   => "Brownies",
                                    "title" => "Visualizar",
                                    'url'   => ['action' => 'view', $tg0009documento['DocumentoIdentificacao']['id']],
                            ]); ?>
                            <?php echo $this->Html->image("/img/edit-icon.gif", [
                                    "alt"   => "Brownies",
                                    "title" => "Editar",
                                    'url'   => ['action' => 'edit', $tg0009documento['DocumentoIdentificacao']['id']],
                            ]); ?>
                            <?php echo $this->Html->image("/img/hr.gif", [
                                    "alt"   => "Brownies",
                                    "title" => "Eliminar",
                                    'url'   => ['action' => 'delete', $tg0009documento['DocumentoIdentificacao']['id']],
                                    null,
                                    sprintf(__('Tem a certeza que deseja eliminar # %s?', true),
                                            $tg0009documento['DocumentoIdentificacao']['id']),
                            ]); ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
        </table>

    </div>
    <p>
        <?php
            //echo $this->Paginator->counter(array(
            //'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%', true)
            //));
        ?></p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<<', [], null, ['class' => 'disabled']); ?>
        | <?php echo $this->Paginator->numbers(); ?>
        <?php echo $this->Paginator->next('>>', [], null, ['class' => 'disabled']); ?>
    </div>

</div>