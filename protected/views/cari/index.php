<?php
/* @var $model CariForm.... testing capistrano*/
/* @var $this Controller*/
$this->renderPartial('search',array(
	'model'=>$model
	));
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_object',
	'pager'=>array(
		'header'=>false
		),
	'pagerCssClass'=>'pagination pagination-centered',
	'template'=>'
	<div class="container result-heads">
		<div class="result-getter">{summary}</div>
	</div>

	<div class="container result">{items}</div>{pager}'
	));
	?>
