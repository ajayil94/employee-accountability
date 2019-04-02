<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\modules\project\models\ProjectMaster;
use app\modules\employee\models\EmployeeMaster;

/* @var $this yii\web\View */
/* @var $model app\modules\mapping\models\Mapping */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Mappings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="mapping-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
//            'project_id',
            [
        'label'=>'Project Name',
        'attribute'=>'project_id',
        'value'=>function($model){
        
        $project= app\modules\project\models\ProjectMaster::find()->where(['id'=>$model->project_id])->one();
        return $project->project_name;
        }
    ],
//            'employee_id',
            [
        'label'=>'Employee Name',
        'attribute'=>'employee_id',
        'value'=>function($model){
        
        $employee= app\modules\employee\models\EmployeeMaster::find()->where(['id'=>$model->employee_id])->one();
        return $employee->first_name;
        }
    ],
            'created_at',
            'modified_at',
        ],
    ]) ?>

</div>
