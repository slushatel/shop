<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */

$this->breadcrumbs=array(
	'Ref Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RefUsers', 'url'=>array('index')),
	array('label'=>'Manage RefUsers', 'url'=>array('admin')),
);
?>

<h1>Create RefUsers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>