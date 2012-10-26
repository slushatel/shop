<?php
/* @var $this RefStoresController */
/* @var $model RefStores */

$this->breadcrumbs=array(
	'Ref Stores'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RefStores', 'url'=>array('index')),
	array('label'=>'Create RefStores', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ref-stores-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ref Stores</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ref-stores-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'ref',
		'removal_mark',
		'name',
		'store_imagesmall_id',
		'store_imagebig_id',
		/*
		'store_address',
		'store_phone',
		'store_site_address',
		'price_unvisible',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
