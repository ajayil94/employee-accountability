<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\project\models\ProjectMaster */

$this->title = 'Create Project Master';
$this->params['breadcrumbs'][] = ['label' => 'Project Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
