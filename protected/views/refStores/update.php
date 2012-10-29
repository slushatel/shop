<?php
/* @var $this RefStoresController */
/* @var $model RefStores */

$this->breadcrumbs=array(
	'Ref Stores'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RefStores', 'url'=>array('index')),
	array('label'=>'Create RefStores', 'url'=>array('create')),
	array('label'=>'View RefStores', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RefStores', 'url'=>array('admin')),
);
?>

<h1>Update RefStores <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelPayData' => $modelPayData)); ?>