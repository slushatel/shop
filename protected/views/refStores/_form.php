<?php
/* @var $this RefStoresController */
/* @var $model RefStores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ref-stores-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array('enctype' => 'multipart/form-data')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ref'); ?>
		<?php echo $form->textField($model,'ref',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'ref'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'removal_mark'); ?>
		<?php echo $form->checkbox($model,'removal_mark'); ?>
		<?php echo $form->error($model,'removal_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_imagesmall_id_path'); ?>
		<?php echo $form->fileField($model,'store_imagesmall_id_path'); ?>
		<?php echo $form->error($model,'store_imagesmall_id_path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_imagebig_id'); ?>
		<?php echo $form->textField($model,'store_imagebig_id'); ?>
		<?php echo $form->error($model,'store_imagebig_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_address'); ?>
		<?php echo $form->textField($model,'store_address',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'store_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_phone'); ?>
		<?php echo $form->textField($model,'store_phone',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'store_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_site_address'); ?>
		<?php echo $form->textField($model,'store_site_address',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'store_site_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_unvisible'); ?>
		<?php echo $form->checkbox($model,'price_unvisible'); ?>
		<?php echo $form->error($model,'price_unvisible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->