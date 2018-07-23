<?php
/* @var $this MedicalRecordController */
/* @var $model MedicalRecord */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'medical-record-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

        <div class="row">
		<?php echo $form->labelEx($model,'nomor_urut'); ?>
		<?php echo $form->textField($model,'nomor_urut',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'nomor_urut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_masuk'); ?>
		<?php echo $form->textField($model,'tanggal_masuk'); ?>
		<?php echo $form->error($model,'tanggal_masuk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keluhan'); ?>
		<?php echo $form->textArea($model,'keluhan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'keluhan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_pasien'); ?>
		<?php echo $form->dropDownList($model, "kd_pasien",
                      CHtml::listData(pasien::model()->findAll(),
                      'kd_pasien','nama_pasien'),
                       array ("empty"=>"Nama Pasien")
                        );
                ?>
		<?php echo $form->error($model,'kd_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif_kamar'); ?>
		<?php echo $form->textField($model,'tarif_kamar'); ?>
		<?php echo $form->error($model,'tarif_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif_layanan'); ?>
		<?php echo $form->textField($model,'tarif_layanan'); ?>
		<?php echo $form->error($model,'tarif_layanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_dokter'); ?>
		<?php echo $form->dropDownList($model, "kd_dokter",
                      CHtml::listData(Dokter::model()->findAll(),
                      'kd_dokter','nama_dokter'),
                       array ("empty"=>"Nama Dokter")
                        );
                ?>
		<?php echo $form->error($model,'kd_dokter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_layanan'); ?>
		<?php echo $form->textField($model,'kd_layanan',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kd_layanan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->