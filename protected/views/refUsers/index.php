<?php
/* @var $this RefUsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ref Users',
);

$this->menu=array(
	array('label'=>'Create RefUsers', 'url'=>array('create')),
	array('label'=>'Manage RefUsers', 'url'=>array('admin')),
);
?>

<h1>Ref Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
