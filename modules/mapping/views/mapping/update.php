<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mapping\models\Mapping */

$this->title = 'Update Mapping: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mapping-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
