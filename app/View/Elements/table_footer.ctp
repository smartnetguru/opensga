<div class="row">
    <div class="col-md-6">
        <div class="dataTables_info">

            <?php
                $paginationOptions = array_merge([
                        'update'      => '#siga-content',
                        'evalScripts' => true,
                        'before'      => $this->Js->get('#busy-indicator')->effect('fadeIn', ['buffer' => false]),
                        'complete'    => $this->Js->get('#busy-indicator')->effect('fadeOut', ['buffer' => false]),
                ]);
                $this->Paginator->options();
            ?>
            <?php
                echo $this->Paginator->counter([
                        'format' => __('Página {:page} de {:pages}, Exibindo {:current} registros de um total de {:count}'),
                ]);
            ?>
        </div>
    </div>
    <div class="col-md-6">
        <div class="dataTables_paginate paging_bootstrap">
            <ul class="pagination pagination-green">
                <?php echo $this->Paginator->prev('<i class="icon-double-angle-left"></i>',
                        ['tag' => 'li', 'escape' => false, 'disabledTag' => 'a'], null,
                        ['class' => 'disabled', 'tag' => 'li', 'escape' => false, 'disabledTag' => 'a']); ?>

                <?php echo $this->Paginator->numbers(['separator'    => '',
                                                      'class'        => 'paginate',
                                                      'currentClass' => 'active',
                                                      'tag'          => 'li',
                                                      'currentTag'   => 'a',
                ]); ?>

                <?php
                    echo $this->Paginator->next('<i class="icon-double-angle-right"></i>',
                            ['tag' => 'li', 'escape' => false, 'disabledTag' => 'a'], null,
                            ['class' => 'disabled', 'tag' => 'li', 'escape' => false, 'disabledTag' => 'a']);
                ?>
            </ul>
        </div>
    </div>
</div>