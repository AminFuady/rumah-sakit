<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jenis-layanan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_layanan'); ?>
		<?php echo $form->textField($model,'kd_layanan',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kd_layanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_layanan'); ?>
		<?php echo $form->textField($model,'jenis_layanan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'jenis_layanan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif_layanan'); ?>
		<?php echo $form->textField($model,'tarif_layanan'); ?>
		<?php echo $form->error($model,'tarif_layanan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->