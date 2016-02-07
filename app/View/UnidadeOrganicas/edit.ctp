<?php
    /**
     * Pagina para adicionar unidades organicas
     *
     * @copyright     Copyright 2010-2012, INFOmoz (Informática-Moçambique) (http://infomoz.net)
     * * @link          http://opensga.com OpenSGA  - Sistema de Gestão Académica
     * @author          Elisio Leonardo (elisio.leonardo@gmail.com)
     * @package       opensga
     * @subpackage    opensga.core.instituicoes
     * @since         OpenSGA v 0.1.0
     * @version        OpenSGA v 0.5.0
     *
     *
     */
    $this->Html->addCrumb(__('Unidades Orgânicas'), '/unidade_organicas');
    $this->Html->addCrumb($this->request->data['UnidadeOrganica']['name'],
            '/unidade_organicas/edit/' . $this->request->data['UnidadeOrganica']['id']);
    $this->Html->addCrumb(__('Editar'), '/unidade_organicas/edit/' . $this->request->data['UnidadeOrganica']['id']);
?>
<div class="container_12">
    <div class="grid_6">
        <div class="block-border">
            <div class="block-header">
                <h1><?php echo __('Dados da Unidade Orgânica') ?></h1><span></span>
            </div>
            <?php echo $this->Form->create('UnidadeOrganica',
                    ['class' => 'block-content form', 'inputDefaults' => ['before' => '<p>', 'after' => '</p>']]); ?>
            <?php echo $this->Form->input('codigo', ['label' => __('Código'), 'div' => '_100', 'class' => 'text',]); ?>
            <?php echo $this->Form->input('name', ['label' => __('Nome'), 'div' => '_100', 'class' => 'text']); ?>
            <?php echo $this->Form->input('parent_id', [
                    'label'            => __('Unidade Orgânica Mãe'),
                    'div'              => '_100',
                    'data-placeholder' => __('Seleccione'),
                    'empty'            => true,
                    'options'          => $parentUnidadeOrganicas,
            ]); ?>
            <?php echo $this->Form->input('tipo_unidade_organica_id', [
                    'label'            => __('Tipo de Unidade'),
                    'div'              => '_100',
                    'data-placeholder' => __('Seleccione'),
                    'empty'            => true,
            ]); ?>
            <?php echo $this->Form->input('area_academica_id', [
                    'label'            => __('Área Académica'),
                    'div'              => '_100',
                    'id'               => 'areaAcademica',
                    'data-placeholder' => __('Seleccione'),
                    'empty'            => true,
            ]); ?>
            <?php echo $this->Form->input('area_unidade_id', [
                    'label'            => __('Área da Unidade'),
                    'div'              => '_100',
                    'data-placeholder' => __('Seleccione'),
                    'empty'            => true,
            ]); ?>
            <?php echo $this->Form->input('director', [
                    'label'            => __('Director/Responsável'),
                    'div'              => '_100',
                    'id'               => 'director',
                    'data-placeholder' => __('Seleccione'),
                    'empty'            => true,
                    'options'          => $directors,
            ]); ?></p>


            <div class="clear"></div>
            <div class="block-actions">
                <ul class="actions-left">
                    <li><?php echo $this->Html->link(__('Lista de Unidades Orgânicas'),
                                ['controller' => 'unidade_organicas', 'action' => 'index'],
                                ['class' => 'button red']) ?></li>
                </ul>
                <ul class="actions-right">
                    <li><?php echo $this->Form->end(['label' => __('GRAVAR', true), 'class' => 'button']); ?> </li>
                </ul>
            </div>
            </form>
        </div>
    </div>
    <div class="clear height-fix"></div>

</div></div> <!--! end of #main-content -->
<?php $this->Html->scriptStart(['inline' => false, 'block' => 'scriptBottom']); ?>
$(function() {
var cache = {},
lastXhr;
$( "#director" ).autocomplete({
minLength: 1,
source: function( request, response ) {
var term = request.term;
if ( term in cache ) {
response( cache[ term ] );
return;
}

lastXhr = $.getJSON( "<?php echo $this->Html->url([
        'controller' => 'funcionarios',
        'action'     => 'autocomplete',
]) ?>", request, function( data, status, xhr ) {
cache[ term ] = data;
if ( xhr === lastXhr ) {
response( data );
}
});
}
});
});

<?php $this->Html->scriptEnd(); ?>


