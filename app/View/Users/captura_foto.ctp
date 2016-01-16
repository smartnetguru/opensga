
<?php echo $this->Html->script('libs/swfobject',array('inline'=>false,'block'=>'scriptBottom')); ?>
<?php $this->Html->scriptStart(array('inline' => false,'block'=>'scriptBottom'));?>
			var flashvars = {};
			
			var parameters = {};
			parameters.scale = "noscale";
			parameters.wmode = "window";
			parameters.allowFullScreen = "true";
			parameters.allowScriptAccess = "always";
			
			var attributes = {};

			swfobject.embedSWF("<?php echo $this->Html->url('/take_picture_2.swf');?>", "main2", "700", "400", "9", 
					"expressInstall.swf", flashvars, parameters, attributes);
<?php  $this->Html->scriptEnd(); ?>

		</script>
		
					<div id="main2">	
				<div>
					<h1>You need FlashPlayer 9 or higher!</h1>
					<p><a href="http://www.adobe.com/go/getflashplayer"><img 
					src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" 
					alt="Get Adobe Flash player" /></a></p>
				</div>
			</div>