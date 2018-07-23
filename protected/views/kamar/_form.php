<?php
/* @var $this KamarController */
/* @var $model Kamar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'kamar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kd_kamar'); ?>
		<?php echo $form->textField($model,'kd_kamar',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'kd_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jenis_kamar'); ?>
		<?php echo $form->textField($model,'jenis_kamar',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'jenis_kamar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tarif_permalam'); ?>
		<?php echo $form->textField($model,'tarif_permalam'); ?>
		<?php echo $form->error($model,'tarif_permalam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fasilitas'); ?>
		<?php echo $form->textField($model,'fasilitas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fasilitas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->