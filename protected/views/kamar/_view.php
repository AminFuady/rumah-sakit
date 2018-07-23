<?php
/* @var $this KamarController */
/* @var $data Kamar */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_kamar')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_kamar), array('view', 'id'=>$data->kd_kamar)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kamar')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kamar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif_permalam')); ?>:</b>
	<?php echo CHtml::encode($data->tarif_permalam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fasilitas')); ?>:</b>
	<?php echo CHtml::encode($data->fasilitas); ?>
	<br />


</div>