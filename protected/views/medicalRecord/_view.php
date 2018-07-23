<?php
/* @var $this MedicalRecordController */
/* @var $data MedicalRecord */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor_urut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nomor_urut), array('view', 'id'=>$data->nomor_urut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_masuk')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_masuk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keluhan')); ?>:</b>
	<?php echo CHtml::encode($data->keluhan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nama Pasien')); ?>:</b>
	<?php echo CHtml::encode($data->kd_pasien); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif_kamar')); ?>:</b>
	<?php echo CHtml::encode($data->tarif_kamar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif_layanan')); ?>:</b>
	<?php echo CHtml::encode($data->tarif_layanan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->kd_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_layanan')); ?>:</b>
	<?php echo CHtml::encode($data->kd_layanan); ?>
	<br />

	*/ ?>

</div>