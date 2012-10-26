<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */

$this->breadcrumbs=array(
	'Пользователи'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список пользователей', 'url'=>array('index')),
	array('label'=>'Обработать пользователей', 'url'=>array('admin')),
);
?>

<h1>Создать пользователя</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>