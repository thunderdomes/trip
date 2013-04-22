<div class="container login">
		<h3><?php echo UserModule::t("Registration"); ?></h3>
		<div class="small-content"> Get ready to see, how travelling make change for your life</div>
		<div class="login-form">
		<div class="form">
			<h3> Register with your Facebook</h3>
			<a class="btn btn-large btn-primary" href="<?php echo Yii::app()->facebook->getLoginUrl(array('scope'=>'email')) ?>">Register with Facebook</a>
		</div><!-- form -->
	</div>
	<div class="login-form">
	<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
	$this->breadcrumbs=array(
		UserModule::t("Registration"),
		);
		?>

	

		<?php if(Yii::app()->user->hasFlash('registration')): ?>
		<div class="success">
			<?php echo Yii::app()->user->getFlash('registration'); ?>
		</div>
	<?php else: ?>

	<div class="form">
		<?php $form=$this->beginWidget('UActiveForm', array(
			'id'=>'registration-form',
			'enableAjaxValidation'=>true,
			'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
				),
			'htmlOptions' => array('enctype'=>'multipart/form-data'),
			)); ?>

			<h3>Or, sign up the usual way</h3>
			<?php echo $form->errorSummary(array($model,$profile)); ?>

			<div class="rows">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>

			<div class="rows">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
				<p class="hint">
					<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
				</p>
			</div>

			<div class="rows">
				<?php echo $form->labelEx($model,'verifyPassword'); ?>
				<?php echo $form->passwordField($model,'verifyPassword'); ?>
				<?php echo $form->error($model,'verifyPassword'); ?>
			</div>

			<div class="rows">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<?php 
			$profileFields=Profile::getFields();
			if ($profileFields) {
				foreach($profileFields as $field) {
					?>
					<div class="rows">
						<?php echo $form->labelEx($profile,$field->varname); ?>
						<?php 
						if ($widgetEdit = $field->widgetEdit($profile)) {
							echo $widgetEdit;
						} elseif ($field->range) {
							echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
						} elseif ($field->field_type=="TEXT") {
							echo$form->textArea($profile,$field->varname,array('rowss'=>6, 'cols'=>50));
						} else {
							echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
						}
						?>
						<?php echo $form->error($profile,$field->varname); ?>
					</div>	
					<?php
				}
			}
			?>
			<?php if (UserModule::doCaptcha('registration')): ?>
			<div class="rows">
				<?php echo $form->labelEx($model,'verifyCode'); ?>

				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
				<?php echo $form->error($model,'verifyCode'); ?>

				
				</div>
			<?php endif; ?>

			<div class="rows submit">
				<?php echo CHtml::submitButton(UserModule::t("Register")); ?>
			</div>

			<?php $this->endWidget(); ?>
		</div><!-- form -->
	<?php endif; ?>
</div>
</div>