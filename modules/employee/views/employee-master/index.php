<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\employee\models\EmployeeMasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-master-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'first_name:ntext',
            'middle_name:ntext',
            'last_name:ntext',
            'age',
            'gender',
            'designation:ntext',
            'created_at',
            'modified_at',
//            'profile_image:image',
//            [
//                'label'=>'Profile Image',
//                'attribute'=>'profile_image',
//                'format'=>'html',
//                'value'=> function($model){
//        
//        return yii\bootstrap\Html::img($model->profile_image,['width'=>'150']);
//                }
//                
//            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
