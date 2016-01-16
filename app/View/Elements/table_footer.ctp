<div class="row">
    <div class="col-md-6">
        <div class="dataTables_info">

			<?php
			$paginationOptions = array_merge(array(
				'update' => '#siga-content',
				'evalScripts' => true,
				'before' => $this->Js->get('#busy-indicator')->effect('fadeIn', array('buffer' => false)),
				'complete' => $this->Js->get('#busy-indicator')->effect('fadeOut', array('buffer' => false)),
			));
			$this->Paginator->options();
			?>
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Página {:page} de {:pages}, Exibindo {:current} registros de um total de {:count}')
			));
			?>
		</div>
	</div>
    <div class="col-md-6">
		<div class="dataTables_paginate paging_bootstrap">
			<ul class="pagination pagination-green">
				<?php echo $this->Paginator->prev('<i class="icon-double-angle-left"></i>', array('tag' => 'li', 'escape' => false, 'disabledTag' => 'a'), null, array('class' => 'disabled', 'tag' => 'li', 'escape' => false, 'disabledTag' => 'a')); ?>

				<?php echo $this->Paginator->numbers(array('separator' => '', 'class' => 'paginate', 'currentClass' => 'active', 'tag' => 'li', 'currentTag' => 'a')); ?>

				<?php
				echo $this->Paginator->next('<i class="icon-double-angle-right"></i>', array('tag' => 'li', 'escape' => false, 'disabledTag' => 'a'), null, array('class' => 'disabled', 'tag' => 'li', 'escape' => false, 'disabledTag' => 'a'));
				?>
            </ul>
		</div>
	</div>
</div>