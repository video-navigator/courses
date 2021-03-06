<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scope')); ?>:</b>
	<?php echo CHtml::encode($data->scope->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
	<?php echo CHtml::encode($data->created); ?>
	<br />
    
	<b><?php echo CHtml::encode($data->getAttributeLabel('updated')); ?>:</b>
	<?php echo CHtml::encode($data->updated); ?>
	<br />    

    <b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br /> 
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('picture')); ?>:</b>
	<?php echo CHtml::encode($data->picture); ?>
    <?=  Picture::getImage('product', $data->id, 'picture', $data->picture);?>
	<br /> 
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('thumb')); ?>:</b>
	<?php echo CHtml::encode($data->thumb); ?>
    <?=  Picture::getImage('product', $data->id, 'thumb', $data->thumb);?>
	<br /> 
    
    <b><?php echo CHtml::encode($data->getAttributeLabel('ico')); ?>:</b>
	<?php echo CHtml::encode($data->ico); ?>
    <?=  Picture::getImage('product', $data->id, 'ico', $data->ico);?>
	<br />  
</div>