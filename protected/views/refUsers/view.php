<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	$model->login,
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Создать пользователя', 'url'=>array('create')),
	array('label'=>'Изменить пользователя', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Удалить пользователя', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Обработать пользователей', 'url'=>array('admin')),
);
?>

<h1>Просмотр пользователя <?php echo $model->login; ?></h1>

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
