<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */

$this->breadcrumbs=array(
	'Ref Users'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List RefUsers', 'url'=>array('index')),
	array('label'=>'Create RefUsers', 'url'=>array('create')),
	array('label'=>'Update RefUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RefUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RefUsers', 'url'=>array('admin')),
);
?>

<h1>View RefUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ref',
		'removal_mark',
		'name',
		'login',
		'password',
		'salt',
	),
)); ?>
