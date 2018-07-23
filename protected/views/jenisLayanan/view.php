<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */

$this->breadcrumbs=array(
	'Jenis Layanans'=>array('index'),
	$model->kd_layanan,
);

$this->menu=array(
	array('label'=>'List JenisLayanan', 'url'=>array('index')),
	array('label'=>'Create JenisLayanan', 'url'=>array('create')),
	array('label'=>'Update JenisLayanan', 'url'=>array('update', 'id'=>$model->kd_layanan)),
	array('label'=>'Delete JenisLayanan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_layanan),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JenisLayanan', 'url'=>array('admin')),
);
?>

<h1>View JenisLayanan #<?php echo $model->kd_layanan; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_layanan',
		'jenis_layanan',
		'tarif_layanan',
	),
)); ?>
