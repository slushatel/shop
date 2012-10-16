<?php
/* @var $this RefUsersController */
/* @var $model RefUsers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ref-users-form',
	'enableAjaxValidation'=>false,
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
		<?php echo $form->textField($model,'removal_mark'); ?>
		<?php echo $form->error($model,'removal_mark'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>-->
        
        <div class="row">
            <?php echo $form->labelEx($model,'password2'); ?>
            <?php echo $form->passwordField($model,'password2'); ?>
            <?php echo $form->error($model,'password2'); ?>
        </div>

<!--	<div class="row">
		<?php echo $form->labelEx($model,'salt'); ?>
		<?php echo $form->textField($model,'salt',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'salt'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->