<div class="container details-search">
	<div class="searchbox-detail" id="search">
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
						  'placeholder'=>'Anda ingin liburan ke... bandung? jakarta?',
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

		<div class="search">
			<button class="orange-button" id="btnSearch" type="submit">Cari Liburan</button>
		</div>
	<?php $this->endWidget(); ?>
	</div>
</div>