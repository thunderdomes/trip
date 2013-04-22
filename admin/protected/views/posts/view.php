<?php
/* @var $this PostsController */
/* @var $model Posts */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'List Posts', 'url'=>array('index')),
	array('label'=>'Create Posts', 'url'=>array('create')),
	array('label'=>'Update Posts', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Posts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Posts', 'url'=>array('admin')),
);
?>

<h1>View Posts #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID',
		'post_author',
		'post_date',
		'terms_id',
		'post_content',
		'post_title',
		'post_excerpt',
		'post_status',
		'post_modified',
		'guid',
		'post_type',
		'url',
		'post_mime_type',
		'content_1',
		'content_2',
		'content_3',
		'total_day',
		'total_night',
		'tripidy_post_image',
		'id_location',
		'duration',
		'price',
		'id_pricing',
	),
)); ?>
