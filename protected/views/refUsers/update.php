<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */

$this->breadcrumbs=array(
	'Ref Users'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List RefUsers', 'url'=>array('index')),
	array('label'=>'Create RefUsers', 'url'=>array('create')),
	array('label'=>'View RefUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage RefUsers', 'url'=>array('admin')),
);
?>

<h1>Update RefUsers <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>