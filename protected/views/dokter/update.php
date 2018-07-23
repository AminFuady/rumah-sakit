<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokters'=>array('index'),
	$model->kd_dokter=>array('view','id'=>$model->kd_dokter),
	'Update',
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Create Dokter', 'url'=>array('create')),
	array('label'=>'View Dokter', 'url'=>array('view', 'id'=>$model->kd_dokter)),
	array('label'=>'Manage Dokter', 'url'=>array('admin')),
);
?>

<h1>Update Dokter <?php echo $model->kd_dokter; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>