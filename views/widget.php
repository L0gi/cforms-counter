<!-- This file is used to markup the public facing widget. -->
<div class="widget">
	<h3 class="widget-title">
	  <?php if(!empty($title)){_e($title, PLUGIN_LOCALE);} ?>
	</h3>

	<div class="textwidget">
		<ul class="cforms-counter">

			<li>		
				<?php 
					if($countdown==0){
						$c=$submission_count;
					}else{
						$c=$submission_max-$submission_count;
					}
					$text = str_replace("{COUNT}","".$c, $text);
					$text = str_replace("{BR}","</br>",$text);
					echo $text;
				?>
			</li>
		  
		</ul>
	</div>
</div>