<?php
/* @var $data Experience */
?>
<div class="boox">
	<!---<div class="badges"></div>--><?php //echo number_format($data->price, 2, ',', '.'); ?>
	<div class="right-block">
		<div class="image-cover">
			<div class="tag-currency">Rp <?php echo number_format($data->price, 0, '', '.'); ?>/ Orang</div>	
			<a href="<?php echo  CHtml::normalizeUrl(array('/detail/view','id'=>$data->id)); ?>">
				<img class="lazy" src="<?php echo Yii::app()->request->baseUrl; ?>/static/img/placeholder.jpg" data-original="http://www.photoshelter.com/img-get/I0000qlJ1FH_YGsw/s/590/392/North-Maluku-104.jpg">
			</a>
		</div>
		<div class="banner">
			<a href="<?php echo  CHtml::normalizeUrl(array('/detail/view','id'=>$data->id)); ?>" />
				<div class="tag-title"><?php echo $data->experience_title?></div>
			</a>
		</div>
		<div class="bottom-banner">
			<div class="tag-location"><?php //echo //$data->location_detail; ?></div>
		</div>
	</div>
</div>