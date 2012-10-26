<?php
/* @var $this RefStoresController */
/* @var $model RefStores */

$this->breadcrumbs=array(
	'Ref Stores'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RefStores', 'url'=>array('index')),
	array('label'=>'Manage RefStores', 'url'=>array('admin')),
);
?>

<h1>Create RefStores</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>