<?php
/* @var $this CourseController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->title,
);

$this->menu=array(
	//array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
	array('label'=>'Update Course', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>

<h1>View Course #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alias',
		'title',
        array(
            'label'=>'Product',
            'name'=>'product.title',
        ),
		'created',
		'updated',
        'active',
        array(
            'label'=>'picture',
            'type'=>'raw',
            'value'=>array($this, 'gridPicture'),
        ),        
        array(
            'label'=>'thumb',
            'type'=>'raw',
            'value'=>array($this, 'gridThumb'),
        ),   
        array(
            'label'=>'ico',
            'type'=>'raw',
            'value'=>array($this, 'gridIco'),
        ),
	),
)); ?>
