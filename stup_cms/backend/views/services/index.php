<?php
$this->breadcrumbs=array(
	'Services',
);

$this->menu=array(
	array('label'=>'Create Services','url'=>array('create')),
	array('label'=>'Manage Services','url'=>array('admin')),
);
?>

<h1>Services</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
