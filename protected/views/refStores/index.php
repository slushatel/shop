<?php
/* @var $this RefStoresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ref Stores',
);

$this->menu=array(
	array('label'=>'Create RefStores', 'url'=>array('create')),
	array('label'=>'Manage RefStores', 'url'=>array('admin')),
);
?>

<h1>Ref Stores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
