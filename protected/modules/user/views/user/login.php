<div class="container login">
	<?php
	$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
	$this->breadcrumbs=array(
		UserModule::t("Login"),
		);
		?>

		<h3><?php echo UserModule::t("Sign in to your Account"); ?></h3>

		<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

		<div class="success">
			<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
		</div>

	<?php endif; ?>

	
	<div class="login-form">
		<div class="form">
			<a class="btn btn-large btn-primary" href="<?php echo Yii::app()->facebook->getLoginUrl(array('scope'=>'email')) ?>">Facebook Login</a>
			<div class="login-form-option">*Find the best places to stay recommended by your friends. Learn More.</div>
			<div class="login-or"></div>
			<div class="on-words"><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/user/registration">Create an account using my e-mail address</a></div>
		</div><!-- form -->
	</div>
	<div class="login-form">
		<h3>Or, log in the usual way</h3>
		<div class="form">
			<?php echo CHtml::beginForm(); ?>
			<div class="alert alert-error">
				<?php echo CHtml::errorSummary($model); ?>
			</div>
			<div class="rows">
				<?php echo CHtml::activeLabelEx($model,'username'); ?>
				<?php echo CHtml::activeTextField($model,'username') ?>
			</div>

			<div class="rows">
				<?php echo CHtml::activeLabelEx($model,'password'); ?>
				<?php echo CHtml::activePasswordField($model,'password') ?>
			</div>


			<div class="rows submit">
				<?php echo CHtml::submitButton(UserModule::t("Login")); ?>
			</div>

			<?php echo CHtml::endForm(); ?>
		</div>

	</div>
</div>

<?php
$form = new CForm(array(
	'elements'=>array(
		'username'=>array(
			'type'=>'text',
			'maxlength'=>32,
			),
		'password'=>array(
			'type'=>'password',
			'maxlength'=>32,
			),
		'rememberMe'=>array(
			'type'=>'checkbox',
			)
		),

	'buttons'=>array(
		'login'=>array(
			'type'=>'submit',
			'label'=>'Login',
			),
		),
	), $model);
?>