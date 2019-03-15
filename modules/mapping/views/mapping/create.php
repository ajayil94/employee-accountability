<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\mapping\models\Mapping */

$this->title = 'Create Mapping';
$this->params['breadcrumbs'][] = ['label' => 'Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapping-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
