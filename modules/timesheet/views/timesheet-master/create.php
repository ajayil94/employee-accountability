<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\timesheet\models\TimesheetMaster */

$this->title = 'Create Timesheet Master';
$this->params['breadcrumbs'][] = ['label' => 'Timesheet Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timesheet-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
