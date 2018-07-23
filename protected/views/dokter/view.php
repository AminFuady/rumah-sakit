<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokters'=>array('index'),
	$model->kd_dokter,
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Create Dokter', 'url'=>array('create')),
	array('label'=>'Update Dokter', 'url'=>array('update', 'id'=>$model->kd_dokter)),
	array('label'=>'Delete Dokter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_dokter),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Dokter', 'url'=>array('admin')),
);
?>

<h1>View Dokter #<?php echo $model->kd_dokter; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_dokter',
		'nama_dokter',
		'jenis_kelamin',
		'telepon',
		'alamat',
		'spesialis',
	),
)); ?>
