<?php
/* @var $this RefStoresController */
/* @var $model RefStores */

$this->breadcrumbs=array(
	'Ref Stores'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List RefStores', 'url'=>array('index')),
	array('label'=>'Create RefStores', 'url'=>array('create')),
	array('label'=>'Update RefStores', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete RefStores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RefStores', 'url'=>array('admin')),
);
?>

<h1>View RefStores #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ref',
		'removal_mark',
		'name',
		'store_imagesmall_id',
		'store_imagebig_id',
		'store_address',
		'store_phone',
		'store_site_address',
		'price_unvisible',
	),
)); ?>
