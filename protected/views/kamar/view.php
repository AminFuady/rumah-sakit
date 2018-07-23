<?php
/* @var $this KamarController */
/* @var $model Kamar */

$this->breadcrumbs=array(
	'Kamars'=>array('index'),
	$model->kd_kamar,
);

$this->menu=array(
	array('label'=>'List Kamar', 'url'=>array('index')),
	array('label'=>'Create Kamar', 'url'=>array('create')),
	array('label'=>'Update Kamar', 'url'=>array('update', 'id'=>$model->kd_kamar)),
	array('label'=>'Delete Kamar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kd_kamar),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kamar', 'url'=>array('admin')),
);
?>

<h1>View Kamar #<?php echo $model->kd_kamar; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kd_kamar',
		'jenis_kamar',
		'tarif_permalam',
		'fasilitas',
	),
)); ?>
