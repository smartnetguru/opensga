<div class="row">
    <div class="col-sm-2">
        <?php echo $this->Html->link('<br/><i class="fa fa-plus"></i>Novo Artigo',
                ['controller' => 'artigos', 'action' => 'adicionar_artigo'],
                ['escape' => false, 'class' => 'btn btn-icon btn-block']) ?>
    </div>
</div>