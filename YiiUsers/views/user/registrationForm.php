<h2><?php echo Yii::t("YiiUsers", "Registration");?></h2>

<?php $this->widget('bootstrap.widgets.TbAlert'); ?>

<?php
$module = Yii::app()->getModule("YiiUsers");
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'registrationForm',
    'type'=>'horizontal',
    'enableAjaxValidation'=>true,
    'clientOptions' => array(
			'validateOnSubmit'=>true,
		),
    'action'=>$module->registrationUrl,
)); ?>
<?php echo $form->textFieldRow($model, 'username'); ?>
<?php echo $form->passwordFieldRow($model, 'password'); ?>
<?php echo $form->textFieldRow($model, 'email'); ?>
<div class="form-actions">
<?php echo CHtml::submitButton(Yii::t("YiiUsers", "Register"));?>
</div>
<?php $this->endWidget();?>