<?php
    /**
     * CakePHP DatabaseLog Plugin
     *
     * Licensed under The MIT License.
     *
     * @license http://www.opensource.org/licenses/mit-license.php MIT License
     * @link https://github.com/dereuromark/CakePHP-DatabaseLog
     */
?>
<p>
    <?php
        echo $this->Paginator->counter([
                'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%'),
        ]);
        if (isset($filter)) {
            $this->Paginator->options(['url' => [$filter]]);
        }
    ?>    </p>

<div class="paging">
    <?php echo $this->Paginator->prev('<< ' . __('previous'), [], null, ['class' => 'disabled']); ?>
    <?php echo $this->Paginator->numbers(); ?>
    <?php echo $this->Paginator->next(__('next') . ' >>', [], null, ['class' => 'disabled']); ?>
</div>