<?php
/* 
 * @var $this SiteController 
 * @var $model CariForm
 */

$this->pageTitle=Yii::app()->name;

?>
<div class="top-tags"><div class="top-tag">
	<div class="container">
		<h1>Find <strong>New</strong> Event</h1>
		<h2>a Million Place to get Pleasure</h2>
		

		<div class="searchbox-landing" id="search">
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'kelas-form',
				'enableAjaxValidation'=>false,
				'action'=>array('/cari'),
				'method'=>'GET'
				)); ?>
				<div class="activity"> 
					<?php echo $form->hiddenField($model,'location'); ?>
					<?php 
					$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
						'name'=>'nameLocation',
						'source' => new CJavaScriptExpression('function(request, response) {
							$.ajax({
								url: "'.CHtml::normalizeUrl(array('site/location')).'",
								data: { "q": request.term },
								success: function(data) { 
									response(data); 
								}
							});
					}'),
						'options'=>array(
							'minLength'=>'2',
							'select'=>new CJavaScriptExpression('function( event, ui ) {
								$("#'.CHtml::activeId($model,'location').'").val(ui.item.id);
							}'),
							),
						'htmlOptions'=>array(
							'placeholder'=>'Kemana Tujuanmu',
							),
							)); ?>
						</div>
						<div class="place"> 
							<?php echo $form->hiddenField($model,'activity'); ?>
							<?php 
							$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
								'name'=>'nameActivity',
								'source' => new CJavaScriptExpression('function(request, response) {
									$.ajax({
										url: "'.CHtml::normalizeUrl(array('site/activity')).'",
										data: { "q": request.term },
										success: function(data) { 
											response(data); 
										}
									});
							}'),
								'options'=>array(
									'minLength'=>'2',
									'select'=>new CJavaScriptExpression('function( event, ui ) {
										$("#'.CHtml::activeId($model,'activity').'").val(ui.item.id);
									}'),
									),
								'htmlOptions'=>array(
									'placeholder'=>'Anda ingin Hiking? Tracking? Rafting? Belanja?',
									),
									)); ?>
								</div>
								<div class="place"> 
									<?php echo $form->hiddenField($model,'activity'); ?>
									<?php 
									$this->widget('zii.widgets.jui.CJuiAutoComplete', array(
										'name'=>'nameActivity',
										'source' => new CJavaScriptExpression('function(request, response) {
											$.ajax({
												url: "'.CHtml::normalizeUrl(array('site/activity')).'",
												data: { "q": request.term },
												success: function(data) { 
													response(data); 
												}
											});
									}'),
										'options'=>array(
											'minLength'=>'2',
											'select'=>new CJavaScriptExpression('function( event, ui ) {
												$("#'.CHtml::activeId($model,'activity').'").val(ui.item.id);
											}'),
											),
										'htmlOptions'=>array(
											'placeholder'=>'Tanggal Liburan',
											),
											)); ?>
										</div>


										<div class="search">
											<button class="orange-button" id="btnSearch" type="submit">Cari Liburan</button>
										</div>
										<?php $this->endWidget(); ?>
									</div>
	</div></div></div>
	<div class="container landing">


<div class="mosaic">
	<?php foreach($experiences as $experience): ?>
	<div class="box-3">
		<div class="simple-tag">
			<h1>Tanjung Papuma, Jember</h1>
			<div class="tagline"><?php echo $experience->experience_title; ?></div>
		</div>

		<img class="lazy" src="http://www.haltthesalt.org.au/images_aerial/wka_073_gulf6.jpg">
	</div>
	<?php endforeach; ?>
</div>
	</div>