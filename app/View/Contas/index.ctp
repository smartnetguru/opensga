<?php
    /**
     * OpenSGA - Sistema de Gest�o Acad�mica
     *   Copyright (C) 2010-2011  INFOmoz (Inform�tica-Mo�ambique)
     *
     * Este programa � um software livre: Voc� pode redistribuir e/ou modificar
     * todo ou parte deste programa, desde que siga os termos da licen�a por nele
     * estabelecidos. Grande parte do c�digo deste programa est� sob a licen�a
     * GNU Affero General Public License publicada pela Free Software Foundation.
     * A vers�o original desta licen�a est� dispon�vel na pasta raiz deste software.
     *
     * Este software � distribuido sob a perspectiva de que possa ser �til para
     * satisfazer as necessidades dos seus utilizadores, mas SEM NENHUMA GARANTIA. Veja
     * os termos da licen�a GNU Affero General Public License para mais detalhes
     *
     * As redistribui��es deste software, mesmo quando o c�digo-fonte for modificado significativamente,
     * devem manter est� informa��o legal, assim como a licen�a original do software.
     *
     * @copyright     Copyright 2010-2011, INFOmoz (Inform�tica-Mo�ambique) (http://infomoz.net)
     ** @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.controller
     * @since         OpenSGA v 0.10.0.0
     *
     */
?>

<div class="contas index">
    <h2><?php echo __('Contas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('aluno_id'); ?></th>
            <th><?php echo $this->Paginator->sort('saldo'); ?></th>
            <th><?php echo $this->Paginator->sort('created'); ?></th>
            <th><?php echo $this->Paginator->sort('modified'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php
            $i = 0;
            foreach ($contas as $conta):
                $class = null;
                if ($i++ % 2 == 0) {
                    $class = ' class="altrow"';
                }
                ?>
                <tr<?php echo $class; ?>>
                    <td><?php echo $conta['Conta']['id']; ?>&nbsp;</td>
                    <td>
                        <?php echo $this->Html->link($conta['Aluno']['name'],
                                ['controller' => 'alunos', 'action' => 'view', $conta['Aluno']['id']]); ?>
                    </td>
                    <td><?php echo $conta['Conta']['saldo']; ?>&nbsp;</td>
                    <td><?php echo $conta['Conta']['created']; ?>&nbsp;</td>
                    <td><?php echo $conta['Conta']['modified']; ?>&nbsp;</td>
                    <td class="actions">
                        <?php echo $this->Html->link(__('View', true), ['action' => 'view', $conta['Conta']['id']]); ?>
                        <?php echo $this->Html->link(__('Edit', true), ['action' => 'edit', $conta['Conta']['id']]); ?>
                        <?php echo $this->Html->link(__('Delete', true), ['action' => 'delete', $conta['Conta']['id']],
                                null,
                                sprintf(__('Are you sure you want to delete # %s?', true), $conta['Conta']['id'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
    <p>
        <?php
            echo $this->Paginator->counter([
                    'format' => __('Page %page% of %pages%, Mostrando %current% linhas. Total: %count% linhas retornadas, starting on record %start%, ending on %end%',
                            true),
            ]);
        ?>    </p>

    <div class="paging">
        <?php echo $this->Paginator->prev('<< ' . __('previous', true), [], null, ['class' => 'disabled']); ?>
        | <?php echo $this->Paginator->numbers(); ?>
        |
        <?php echo $this->Paginator->next(__('next', true) . ' >>', [], null, ['class' => 'disabled']); ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Conta', true), ['action' => 'add']); ?></li>
        <li><?php echo $this->Html->link(__('List Alunos', true),
                    ['controller' => 'alunos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Aluno', true), ['controller' => 'alunos', 'action' => 'add']); ?> </li>
        <li><?php echo $this->Html->link(__('List Pagamentos', true),
                    ['controller' => 'pagamentos', 'action' => 'index']); ?> </li>
        <li><?php echo $this->Html->link(__('New Pagamento', true),
                    ['controller' => 'pagamentos', 'action' => 'add']); ?> </li>
    </ul>
</div>