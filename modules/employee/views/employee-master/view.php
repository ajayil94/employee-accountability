

<?php

//use Yii;
use yii\helpers\Html;
//use yii\widgets\DetailView;
use app\models\Employee;
use yii\bootstrap\Tabs;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

echo Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update', 'id' => $model->id], ['class' => "btn btn-primary btn-sm"]);

echo Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $model->id], [
    'class' => 'btn btn-danger btn-sm',
    'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
    ],
]);
//echo Html::a('<span class="glyphicon glyphicon-list"></span> List', ['index'], ['class' => 'btn btn-info btn-sm']);
$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<br>
<div class="row">

    <div class="col-sm-8">
        <b><?= (Html::img('web/uploads/' . $model->profile_image, ['width' => '100', 'height' => '100'])) ?>&nbsp;&nbsp;&nbsp;</b>
    </div>
</div>

<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr bgcolor='#DBDBDB'>
                    <th>Employee Name</th>
                    <th>Gender</th>
                    <th>Designation</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $emp = \app\modules\employee\models\EmployeeMaster::findOne($model->id);
                echo "<tr>";
                echo "<td>" . Html::encode($emp->first_name) . " " . Html::encode($emp->middle_name) . " " . Html::encode($emp->last_name) . "</td>";
                echo "<td>" . Html::encode($emp->gender) . "</td>";
                echo "<td>" . Html::encode($emp->designation) . "</td>";
                echo "<td>" . Html::encode($emp->age) . "</td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>
<br>

<div class="container">
    <div class="row">
        <table class="table table-bordered" style="width:10%">
            <thead>
                <tr bgcolor='#DBDBDB'>
                    <th>Profile Image</th>
                </tr>
            </thead>
            <tbody >
                <tr>
                    <td>
                        <?php echo ('<img src =' . 'http://localhost/employee-accountability/web/' . $model->profile_image . ' height="100" width="150"' . '>'); ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr bgcolor='#DBDBDB'>
                    <th>Mobile</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $emp = \app\modules\employee\models\EmployeeMaster::findOne($model->id);
                echo "<tr>";
                echo "<td>" . Html::encode($emp->contact) . "</td>";
                echo "<td>" . Html::encode($emp->email) . "</td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>

<br>
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr bgcolor='#DBDBDB'>
                    <th>Create At</th>
                    <th>Modified At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $emp = \app\modules\employee\models\EmployeeMaster::findOne($model->id);
                echo "<tr>";
                echo "<td>" . Html::encode($emp->created_at) . "</td>";
                echo "<td>" . Html::encode($emp->modified_at) . "</td>";
                echo "</tr>";
                ?>
            </tbody>
        </table>
    </div>
</div>













