<?php
/* @var $this JenisLayananController */
/* @var $model JenisLayanan */

$this->breadcrumbs=array(
	'Jenis Layanans'=>array('index'),
	$model->kd_layanan=>array('view','id'=>$model->kd_layanan),
	'Update',
);

$this->menu=array(
	array('label'=>'List JenisLayanan', 'url'=>array('index')),
	array('label'=>'Create JenisLayanan', 'url'=>array('create')),
	array('label'=>'View JenisLayanan', 'url'=>array('view', 'id'=>$model->kd_layanan)),
	array('label'=>'Manage JenisLayanan', 'url'=>array('admin')),
);
?>

<h1>Update JenisLayanan <?php echo $model->kd_layanan; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>