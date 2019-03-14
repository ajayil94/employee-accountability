<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\timesheet\models\TimesheetMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timesheet-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'emp_id') ?>

    <?= $form->field($model, 'project_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'duration') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
