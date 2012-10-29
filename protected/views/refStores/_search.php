<?php
/* @var $this RefStoresController */
/* @var $model RefStores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ref'); ?>
		<?php echo $form->textField($model,'ref',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'removal_mark'); ?>
		<?php echo $form->checkbox($model,'removal_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_imagesmall_id'); ?>
		<?php echo $form->textField($model,'store_imagesmall_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_imagebig_id'); ?>
		<?php echo $form->textField($model,'store_imagebig_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_address'); ?>
		<?php echo $form->textField($model,'store_address',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_phone'); ?>
		<?php echo $form->textField($model,'store_phone',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_site_address'); ?>
		<?php echo $form->textField($model,'store_site_address',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price_unvisible'); ?>
		<?php echo $form->checkbox($model,'price_unvisible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->