<?php
/* @var $this MedicalRecordController */
/* @var $model MedicalRecord */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nomor_urut'); ?>
		<?php echo $form->textField($model,'nomor_urut',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_masuk'); ?>
		<?php echo $form->textField($model,'tanggal_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keluhan'); ?>
		<?php echo $form->textArea($model,'keluhan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_pasien'); ?>
		<?php echo $form->textField($model,'kd_pasien',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif_kamar'); ?>
		<?php echo $form->textField($model,'tarif_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif_layanan'); ?>
		<?php echo $form->textField($model,'tarif_layanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_dokter'); ?>
		<?php echo $form->textField($model,'kd_dokter',array('size'=>6,'maxlength'=>6)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kd_layanan'); ?>
		<?php echo $form->textField($model,'kd_layanan',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->