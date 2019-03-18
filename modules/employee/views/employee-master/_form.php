<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\designation\models\Designation;
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

    <?= $form->field($model, 'gender')->radioList([ 'Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'designation')->dropDownList(
            
            ArrayHelper::map(app\modules\designation\models\Designation::find()->all(),'id','designation'),
            ['prompt'=>'Select Designation',]); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
