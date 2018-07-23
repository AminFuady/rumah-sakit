<?php
/* @var $this MedicalRecordController */
/* @var $model MedicalRecord */

$this->breadcrumbs=array(
	'Medical Records'=>array('index'),
	$model->nomor_urut,
);

$this->menu=array(
	array('label'=>'List MedicalRecord', 'url'=>array('index')),
	array('label'=>'Create MedicalRecord', 'url'=>array('create')),
	array('label'=>'Update MedicalRecord', 'url'=>array('update', 'id'=>$model->nomor_urut)),
	array('label'=>'Delete MedicalRecord', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nomor_urut),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedicalRecord', 'url'=>array('admin')),
);
?>

<h1>View MedicalRecord #<?php echo $model->nomor_urut; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nomor_urut',
		'tanggal_masuk',
		'keluhan',
		'kd_pasien',
		'alamat',
		'tarif_kamar',
		'tarif_layanan',
		'kd_dokter',
		'kd_layanan',
	),
)); ?>
