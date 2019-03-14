<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmployeeMaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-master-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'last_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'designation')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
