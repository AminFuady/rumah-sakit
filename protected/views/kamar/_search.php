<?php
/* @var $this KamarController */
/* @var $model Kamar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kd_kamar'); ?>
		<?php echo $form->textField($model,'kd_kamar',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_kamar'); ?>
		<?php echo $form->textField($model,'jenis_kamar',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif_permalam'); ?>
		<?php echo $form->textField($model,'tarif_permalam'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fasilitas'); ?>
		<?php echo $form->textField($model,'fasilitas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->