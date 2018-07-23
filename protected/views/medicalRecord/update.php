<?php
/* @var $this MedicalRecordController */
/* @var $model MedicalRecord */

$this->breadcrumbs=array(
	'Medical Records'=>array('index'),
	$model->nomor_urut=>array('view','id'=>$model->nomor_urut),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedicalRecord', 'url'=>array('index')),
	array('label'=>'Create MedicalRecord', 'url'=>array('create')),
	array('label'=>'View MedicalRecord', 'url'=>array('view', 'id'=>$model->nomor_urut)),
	array('label'=>'Manage MedicalRecord', 'url'=>array('admin')),
);
?>

<h1>Update MedicalRecord <?php echo $model->nomor_urut; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>