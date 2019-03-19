<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\project\models\ProjectMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'project_type')->dropDownList(['Fixed Rate' => 'Fixed Rate', 'Time and Material' => 'Time and Material',], ['prompt' => 'Select Type']) ?>
    
    <?= $form->field($model, 'billing_hours')->textInput(['rows' => 6]) ?>
    
    <?= $form->field($model, 'remaining_hours')->textInput(['rows' => 6]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
