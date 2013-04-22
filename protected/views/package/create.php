<div class="container detail">
	<?php
	/* @var $this PackageFormController */
	/* @var $model PackageForm */
	/* @var $form CActiveForm */
	?>
	<div class="container wizard">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#basicInformation" data-toggle="tab">Basics Information</a></li>
			<li><a href="#Photo" data-toggle="tab">Trip Photo</a></li>
			<li><a href="#schedule" data-toggle="tab">Shedule Of Trip</a></li>
			<li><a href="#publish" data-toggle="tab">Publish</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="basicInformation">
				<div class="notify">
					<h1>The Basics</h1>
					<p>Start by giving it a name, a short description and other important details.</p>
				</div>
				<?php $this->renderPartial('form',array('model'=>$model)); ?>
				</div>
				<div class="tab-pane" id="Photo">
					<div class="notify">
					<h1>Upload Photo</h1>
					<p>Start by giving it a name, a short description and other important details.</p>
				</div>
				</div>
				<div class="tab-pane" id="schedule">
					<div class="notify">
					<h1>Trip Availibility</h1>
					<p>Start by giving it a name, a short description and other important details.</p>
				</div>
				</div>
				<div class="tab-pane" id="publish">
					<div class="notify">
					<h1>Publish The Trip</h1>
					<p>Start by giving it a name, a short description and other important details.</p>
				</div>
				</div>
			</div>
		</div>
		<div class="form">



		</div><!-- form -->
	</div>