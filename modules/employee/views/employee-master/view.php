<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmployeeMaster */

$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Employee Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employee-master-view">

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
            'first_name:ntext',
            'middle_name:ntext',
            'last_name:ntext',
            'age',
            'gender',
            'designation:ntext',
            
            'created_at',
            'modified_at',
//            'profile_image:image',
            
            [
                'label'=>'Profile Image',
                'attribute'=>'profile_image',
                'format'=>'html',
                'value'=> function($model){
        
        return yii\bootstrap\Html::img($model->profile_image,['width'=>'150']);
                }
                
            ],
        ],
    ]) ?>

</div>
