<?php
/* @var $this PostsController */
/* @var $data Posts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_author')); ?>:</b>
	<?php echo CHtml::encode($data->post_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_date')); ?>:</b>
	<?php echo CHtml::encode($data->post_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('terms_id')); ?>:</b>
	<?php echo CHtml::encode($data->terms_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_content')); ?>:</b>
	<?php echo CHtml::encode($data->post_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_title')); ?>:</b>
	<?php echo CHtml::encode($data->post_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_excerpt')); ?>:</b>
	<?php echo CHtml::encode($data->post_excerpt); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('post_status')); ?>:</b>
	<?php echo CHtml::encode($data->post_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_modified')); ?>:</b>
	<?php echo CHtml::encode($data->post_modified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guid')); ?>:</b>
	<?php echo CHtml::encode($data->guid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_type')); ?>:</b>
	<?php echo CHtml::encode($data->post_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('post_mime_type')); ?>:</b>
	<?php echo CHtml::encode($data->post_mime_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_1')); ?>:</b>
	<?php echo CHtml::encode($data->content_1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_2')); ?>:</b>
	<?php echo CHtml::encode($data->content_2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content_3')); ?>:</b>
	<?php echo CHtml::encode($data->content_3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_day')); ?>:</b>
	<?php echo CHtml::encode($data->total_day); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_night')); ?>:</b>
	<?php echo CHtml::encode($data->total_night); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tripidy_post_image')); ?>:</b>
	<?php echo CHtml::encode($data->tripidy_post_image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_location')); ?>:</b>
	<?php echo CHtml::encode($data->id_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_pricing')); ?>:</b>
	<?php echo CHtml::encode($data->id_pricing); ?>
	<br />

	*/ ?>

</div>