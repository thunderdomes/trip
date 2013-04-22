<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'post_author'); ?>
		<?php echo $form->textField($model,'post_author',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_date'); ?>
		<?php echo $form->textField($model,'post_date'); ?>
		<?php echo $form->error($model,'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'terms_id'); ?>
		<?php echo $form->textField($model,'terms_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'terms_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_content'); ?>
		<?php echo $form->textArea($model,'post_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_title'); ?>
		<?php echo $form->textArea($model,'post_title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_excerpt'); ?>
		<?php echo $form->textArea($model,'post_excerpt',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'post_excerpt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_status'); ?>
		<?php echo $form->textField($model,'post_status',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_modified'); ?>
		<?php echo $form->textField($model,'post_modified'); ?>
		<?php echo $form->error($model,'post_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guid'); ?>
		<?php echo $form->textField($model,'guid',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'guid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_type'); ?>
		<?php echo $form->textField($model,'post_type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'post_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
		<?php echo $form->textArea($model,'url',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'post_mime_type'); ?>
		<?php echo $form->textField($model,'post_mime_type',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'post_mime_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_1'); ?>
		<?php echo $form->textArea($model,'content_1',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_2'); ?>
		<?php echo $form->textArea($model,'content_2',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content_3'); ?>
		<?php echo $form->textArea($model,'content_3',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_day'); ?>
		<?php echo $form->textField($model,'total_day',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'total_day'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_night'); ?>
		<?php echo $form->textField($model,'total_night',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'total_night'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tripidy_post_image'); ?>
		<?php echo $form->textArea($model,'tripidy_post_image',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tripidy_post_image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_location'); ?>
		<?php echo $form->textField($model,'id_location',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'id_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration'); ?>
		<?php echo $form->error($model,'duration'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_pricing'); ?>
		<?php echo $form->textField($model,'id_pricing'); ?>
		<?php echo $form->error($model,'id_pricing'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->