<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\project\models\ProjectMaster */

$this->title = 'Update Project Master: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Project Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
