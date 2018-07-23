<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="form-group">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pasien-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_pasien'); ?>
		<?php echo $form->textField($model,'kd_pasien',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'kd_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_pasien'); ?>
		<?php echo $form->textField($model,'nama_pasien',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_pasien'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kelamin'); ?>
		<?php echo $form->textField($model,'jenis_kelamin',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'jenis_kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gol_darah'); ?>
		<?php echo $form->textField($model,'gol_darah',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'gol_darah'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'umur'); ?>
		<?php echo $form->textField($model,'umur',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'umur'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textField($model,'alamat',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->