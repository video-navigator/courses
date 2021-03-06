<?php
/* @var $this VideoController */
/* @var $model Video */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'video-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'scope_id'); ?>
		<?php echo $form->dropDownList($model,'scope_id', $scopes); ?>
		<?php echo $form->error($model,'scope_id'); ?>
	</div>
    
	<div class="form-group row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->dropDownList($model,'product_id', $products); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>
    
	<div class="form-group row">
		<?php echo $form->labelEx($model,'article_id'); ?>
		<?php echo $form->dropDownList($model,'article_id', $articles); ?>
		<?php echo $form->error($model,'article_id'); ?>
	</div>  
    
    <div class="form-group row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>250)); ?>
        <br><button type="button" onclick="loadVideoData();" class="btn btn-info">Load from Youtube</button>
        <?php echo $form->error($model,'link'); ?>
	</div>
        
	<div class="form-group row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'desc'); ?>
		<?php echo $form->textArea($model,'desc',array('size'=>60,'maxlength'=>250, 'cols' => 57)); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->checkBox($model,'active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div> 
    
	<div class="form-group row">
		<?php echo $form->labelEx($model,'ord'); ?>
		<?php echo $form->textField($model,'ord'); ?>
		<?php echo $form->error($model,'ord'); ?>
	</div>    

	<div class="form-group row">
		<?php echo $form->labelEx($model,'picture'); ?>
		<?php echo $form->textField($model,'picture',array('size'=>60,'maxlength'=>250, )); ?>
		<?php echo $form->error($model,'picture'); ?>
        <img src="<?=$model->picture ?>" id="Video_picture_img" height="100" />
	</div>
    
	<div class="form-group row">
		<?php echo $form->labelEx($model,'thumb'); ?>
		<?php echo $form->textField($model,'thumb',array('size'=>60,'maxlength'=>250, )); ?>
		<?php echo $form->error($model,'thumb'); ?>
        <img src="<?=$model->picture ?>" id="Video_thumb_img" height="100" />
	</div>

	<div class="form-group row">
		<?php echo $form->labelEx($model,'ico'); ?>
		<?php echo $form->textField($model,'ico',array('size'=>60,'maxlength'=>50, )); ?>
		<?php echo $form->error($model,'ico'); ?>
        <img src="<?=$model->picture ?>" id="Video_ico_img" height="100" />
	</div>      
    
	<div class="form-group row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
