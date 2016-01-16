<div class="flot-small-container">
	<div id="placeholder6" class="flot-placeholder"></div>
</div>
</div>
<?php
echo $this->Html->script('/assets/plugins/flot/jquery.flot.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/flot/jquery.flot.resize.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/flot/jquery.flot.categories.js', array('block' => 'scriptBottom'));
echo $this->Html->script('/assets/plugins/flot/jquery.flot.pie.js', array('block' => 'scriptBottom'));
?>

<?php $this->Html->scriptStart(array('inline' => false, 'block' => 'scriptBottom')); ?>
var data_category = [<?php echo $javascript ?>];
alert(data_category);
$.plot("#placeholder6", [<?php echo $javascript ?>], {
series: {
bars: {
show: true,
barWidth: 0.6,
align: "center",
fillColor: "#4DBEF4",
lineWidth: 0,
}
},
xaxis: {
mode: "categories",
tickLength: 0
}
});
<?php $this->Html->scriptEnd(); ?>