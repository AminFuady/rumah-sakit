<?php
/* @var $this DokterController */
/* @var $data Dokter */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_dokter')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_dokter), array('view', 'id'=>$data->kd_dokter)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_dokter')); ?>:</b>
	<?php echo CHtml::encode($data->nama_dokter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telepon')); ?>:</b>
	<?php echo CHtml::encode($data->telepon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat')); ?>:</b>
	<?php echo CHtml::encode($data->alamat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spesialis')); ?>:</b>
	<?php echo CHtml::encode($data->spesialis); ?>
	<br />


</div>