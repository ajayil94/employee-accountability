

    <?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use app\models\Employee;
use yii\bootstrap\Tabs;


/* @var $this yii\web\View */
/* @var $model app\models\Employee */
echo Html::a('<span class="glyphicon glyphicon-pencil"></span> Update', ['update', 'id' => $model->id], ['class' => "btn btn-outline-success"]);

echo Html::a('<span class="glyphicon glyphicon-trash"></span> Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-Success',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]);
echo Html::a('<span class="glyphicon glyphicon-list"></span> List', ['index'], ['class' => 'btn btn-outline-primary']);
$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>


<?php $this->beginBlock('personal'); ?>




<div class="divTable" id="demo">
    
<div class="divTableRow">
<div class="col-sm-8">
<b><?= (Html::img('/web/uploads/emp/'.$model->profile_image, ['width'=>'100', 'height'=>'100'])) ?>&nbsp;&nbsp;&nbsp;</b>



</div>
</div>
<br>
<div class="row">
<div class="col-sm-3">
    <b>Employee :</b>

</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo Html::encode($emp->first_name)." ".Html::encode($emp->middle_name)." ".Html::encode($emp->last_name);
		?>
	</b>
</div>
</div>


<br>

<div class="row">
<div class="col-sm-3">
    
    <b>gender :</b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->gender;
                
		?>
	</b>
</div>
</div>


<br>

<div class="row">
<div class="col-sm-3">
<b>	Designation :</b>
</div>
<div class="col-sm-3">
<b>
   	<?php
		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->designation;
                
		?>
	</b>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-3">
<b>	Education :</b>
</div>
<div class="col-sm-3">
<b>
   	<?php
		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->education;
                
		?>
	</b>
</div>
</div>

<br>

<div class="row">
<div class="col-sm-3">
<b>	Age :</b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->age;
		?>
	</b>
</div>
</div>




</div>


<?php $this->endBlock(); ?> 


<?php $this->beginBlock('profile'); ?>
<br>
<div class="row">
<div class="col-sm-3">
<b>	Profile Image</b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $model->profile_image;
		?>
	</b>
</div>
</div>




<?php $this->endBlock(); ?> 

<?php $this->beginBlock('contact'); ?>
<br>
<div class="row">
    
<div class="col-sm-3">
<b>	Mobile </b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->contact;
		?>
	</b>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-3">
<b>	Email</b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->email;
		?>
	</b>
</div>
</div>


<?php $this->endBlock(); ?> 

<?php $this->beginBlock('other'); ?>
<br>
<div class="row">
<div class="col-sm-3">
<b>	Created At</b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->created_at;
		?>
	</b>
</div>
</div>

<br>
<div class="row">
<div class="col-sm-3">
<b>	Modified At</b>
</div>
<div class="col-sm-3">
<b>
   	<?php

		$emp = app\modules\employee\models\EmployeeMaster::findOne($model->id);

		echo $emp->modified_at;
		?>
	</b>
</div>
</div>


<?php $this->endBlock(); ?> 





<?php echo \yii\bootstrap\Tabs::Widget([
        'items' => [
            [
                'label' => 'Personal',
                'content' => $this->blocks['personal'],
                'active' => true,
            ],
            [
                'label' => 'Profile',
                'content' => $this->blocks['profile'],
//                'active' => true,
            ],
	[
                'label' => 'Contact',
                'content' => $this->blocks['contact'],
//                'active' => true,
            ],
            
	[
                'label' => 'Other',
                'content' => $this->blocks['other'],
//                'active' => true,
            ],
	
            
            
            
        ],
    ]); 
	
	
	?>
    
    

