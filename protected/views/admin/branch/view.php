<?php
/* @var $this BranchController */
/* @var $model Branch */

$this->breadcrumbs=array(
	'Branches'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Branch', 'url'=>array('index')),
	array('label'=>'Create Branch', 'url'=>array('create')),
	array('label'=>'Update Branch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Branch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Branch', 'url'=>array('admin')),
);
?>

<h1>View Branch #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'alias',
		'title',
        array(
            'label'=>'Scope',
            'name'=>'scope.title',
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
