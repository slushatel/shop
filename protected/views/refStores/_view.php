<?php
/* @var $this RefStoresController */
/* @var $data RefStores */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ref')); ?>:</b>
	<?php echo CHtml::encode($data->ref); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('removal_mark')); ?>:</b>
	<?php echo CHtml::encode($data->removal_mark); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_imagesmall_id')); ?>:</b>
	<?php echo CHtml::encode($data->store_imagesmall_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_imagebig_id')); ?>:</b>
	<?php echo CHtml::encode($data->store_imagebig_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_address')); ?>:</b>
	<?php echo CHtml::encode($data->store_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_phone')); ?>:</b>
	<?php echo CHtml::encode($data->store_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_site_address')); ?>:</b>
	<?php echo CHtml::encode($data->store_site_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price_unvisible')); ?>:</b>
	<?php echo CHtml::encode($data->price_unvisible); ?>
	<br />

</div>