<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\modules\project\models\ProjectMaster;
use app\modules\employee\models\EmployeeMaster;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\mapping\models\MappingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mappings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mapping-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Mapping', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
//            'project_id',
    [
        'label'=>'Project Name',
        'attribute'=>'project_id',
        'value'=>function($model){
        
        $project= app\modules\project\models\ProjectMaster::find()->where(['id'=>$model->project_id])->one();
        return $project->project_name;
        }
    ],
//          'employee_id',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
