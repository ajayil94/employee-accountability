            <?php

use app\modules\designation\models\Designation;
use app\modules\employee\models\EmployeeMaster;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this View */
/* @var $model EmployeeMaster */
/* @var $form ActiveForm */
?>

<div class="employee-master-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'first_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'middle_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'last_name')->textInput(['rows' => 6]) ?>

    <?= $form->field($model, 'age')->textInput() ?>
    
    
     <?= $form->field($model, 'email')->textInput() ?>
    
   
    <?= $form->field($model, 'contact')->textInput() ?>
    
<?= $form->field($model, 'education')->dropDownList(['BCA' => 'BCA', 'MCA' => 'MCA', 'B.Sc Computer Science' => 'B.Sc Computer Science','M.Sc Computer Science' => 'M.Sc Computer Science',], ['prompt' => 'Select Qualification']) ?>
    
    <?= $form->field($model, 'gender')->radioList(['Male' => 'Male', 'Female' => 'Female', 'Others' => 'Others',], ['prompt' => '']) ?>

    <?=
    $form->field($model, 'designation')->dropDownList(
            ArrayHelper::map(Designation::find()->all(), 'designation', 'designation'), ['prompt' => 'Select Designation',]);
    ?>

    
     <?= $form->field($model, 'profile_image')->fileInput() ?>
    
    <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
