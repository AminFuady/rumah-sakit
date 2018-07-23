<?php
/* @var $this JenisLayananController */
/* @var $data JenisLayanan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kd_layanan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kd_layanan), array('view', 'id'=>$data->kd_layanan)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jenis_layanan')); ?>:</b>
	<?php echo CHtml::encode($data->jenis_layanan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tarif_layanan')); ?>:</b>
	<?php echo CHtml::encode($data->tarif_layanan); ?>
	<br />


</div>