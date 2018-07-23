<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kd_layanan'); ?>
		<?php echo $form->textField($model,'kd_layanan',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jenis_layanan'); ?>
		<?php echo $form->textField($model,'jenis_layanan',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tarif_layanan'); ?>
		<?php echo $form->textField($model,'tarif_layanan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->