<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\timesheet\models\TimesheetMaster */

$this->title = 'Update Timesheet Master: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Timesheet Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="timesheet-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
