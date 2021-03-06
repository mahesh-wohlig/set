<?php
$this->breadcrumbs=array(
	'Clients'=>array('admin'),
	$model->title,
);
?>

<h4>View Client #<?php echo $model->client_id; ?></h4>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'type'=>'striped bordered condensed hover',
	'attributes'=>array(
		'client_id',
		array(
			'name'=>'client_type',
			'value'=>!empty($model->client_type)?Clients::showClientType($model->client_type):"",
		),
		'title',
		array(
			'name'=>'image',
			'type'=>'raw',
			'value'=>!empty($model->image)?Clients::showimage($model->image):"",
		),
		'slug',
		'link',
		'created_date',
		'updated_date',
		array(
			'name'=>'status',
			'value'=>($model->status=="1")?"Active":"Inactive",
		),
		'url',
		'meta_description',
		'meta_keyword',
	),
)); ?>
