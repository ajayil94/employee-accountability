<?php

use yii\helpers\Html;
use yii\grid\GridView;

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

            'id',
            'first_name:ntext',
            'middle_name:ntext',
            'last_name:ntext',
            'age',
            //'gender',
            //'designation:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
