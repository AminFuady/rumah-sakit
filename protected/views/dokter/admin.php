<?php
/* @var $this DokterController */
/* @var $model Dokter */

$this->breadcrumbs=array(
	'Dokters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Dokter', 'url'=>array('index')),
	array('label'=>'Create Dokter', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#dokter-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Dokter</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'btn-btn-succcess')); ?>
<div class="form-group" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'dokter-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'kd_dokter',
		'nama_dokter',
                array(  
                    'name'    => 'jenis_kelamin',  
                    'value'    => '$data->jenis_kelamin == 1 ? "Pria" : "Wanita"',  
                    'filter'=> array(1 => 'Pria', 2 => 'Wanita'), // Membuat dropdown filter  
                     ),
		'telepon',
		'alamat',
		'spesialis',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
