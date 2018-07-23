<?php
/* @var $this PasienController */
/* @var $model Pasien */

$this->breadcrumbs=array(
	'Pasiens'=>array('index'),
	$model->kd_pasien,
);

$this->menu=array(
	array('label'=>'List Pasien', 'url'=>array('index')),
	array('label'=>'Create Pasien', 'url'=>array('create')),
	array('label'=>'Update Pasien', 'url'=>array('update', 'id'=>$model->kd_pasien)),
	array('label'=>'Delete Pasien', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_pasien),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pasien', 'url'=>array('admin')),
);
?>

<h1>View Pasien #<?php echo $model->kd_pasien; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_pasien',
		'nama_pasien',
		'jenis_kelamin',
		'gol_darah',
		'umur',
		'alamat',
	),
)); ?>
