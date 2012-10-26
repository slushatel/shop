<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Изменить',
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Создать пользователя', 'url'=>array('create')),
	array('label'=>'Просмотреть пользователя', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Обработать пользователей', 'url'=>array('admin')),
);
?>

<h1>Изменить пользователя <?php echo $model->login; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>