<?php
use app\modules\project\models\ProjectMaster;
use app\modules\employee\models\EmployeeMaster;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\mapping\models\Mapping */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mapping-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'project_id')->dropDownList(
            ArrayHelper::map(app\modules\project\models\ProjectMaster::find()->all(), 'id', 'project_name'), ['prompt' => 'Select Project',]);
    ?>

    <?= $form->field($model, 'employee_id')->dropDownList(
            ArrayHelper::map(app\modules\employee\models\EmployeeMaster::find()->all(), 'id', 'first_name'), ['prompt' => 'Select Employee',]);
    ?>

   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
