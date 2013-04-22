<?php
/* @var $this ExperienceController */
/* @var $model Experience */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'package-form-create-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="rows">
		<?php echo $form->labelEx($model,'experience_title'); ?>
		<?php echo $form->textField($model,'experience_title'); ?>
		<?php echo $form->error($model,'experience_title'); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description'); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'itinerary'); ?>
		<?php echo $form->textArea($model,'itinerary'); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'categories_1'); ?>
		<?php echo $form->dropDownList($model,'categories_1',  CHtml::listData(ExperienceCategori::model()->findAll(),'id','categori') , array('empty'=>'')); ?>
		<?php echo $form->dropDownList($model,'categories_2', CHtml::listData(ExperienceCategori::model()->findAll(),'id','categori') , array('empty'=>'')); ?>
		<?php echo $form->dropDownList($model,'categories_3', CHtml::listData(ExperienceCategori::model()->findAll(),'id','categori') , array('empty'=>'')); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'address_city'); ?>
		<?php echo $form->textField($model,'address_city'); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'special_instructions'); ?>
		<?php echo $form->textArea($model,'special_instructions'); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'duration'); ?>
		<?php echo $form->textField($model,'duration'); ?>
		<?php echo $form->dropDownList($model,'duration_type', Experience::getDurationType()); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'pricing_model'); ?>
		<?php echo $form->radioButton($model,'pricing_model',array('value'=>0,'uncheckValue'=>null)); ?>
		Per Person
		<?php echo $form->radioButton($model,'pricing_model',array('value'=>1,'uncheckValue'=>null)); ?>
		Flat Rate 
	</div>

	<div class="rows">
		<?php echo $form->labelEx($model,'number_of_people_1'); ?>
		<?php echo $form->textField($model,'number_of_people_1',array('class'=>'span1 digits required text-center')); ?>
		&nbsp;To&nbsp;
		<?php echo $form->textField($model,'number_of_people_2',array('class'=>'span1 digits required text-center')); ?>
	</div>

	<div class="rows buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>