

    <?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Employee;
use yii\jui\Tabs;


/* @var $this yii\web\View */
/* @var $model app\models\Employee */
echo Html::a('<span class="glyphicon glyphicon-list"></span> List', ['index'], ['class' => 'btn btn-primary']);
$this->title = $model->first_name;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>


<?php $this->beginBlock('personal'); ?>



<div class="row">
<div class="col-sm-8">
<b><?= (Html::img('@web/uploads/'.$model->profile_image, ['width'=>'100', 'height'=>'100'])) ?>&nbsp;&nbsp;&nbsp;</b>


</div>
</div>

<br>
<div class="row">
<div class="col-sm-3">
<b>Employee</b>
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
<b>	gender</b>
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
<b>	Designation</b>
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
<b>	Age</b>
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







<?php $this->endBlock(); ?> 








 


<?php echo Tabs::Widget([
        'items' => [
            [
                'label' => 'Personal',
                'content' => $this->blocks['personal'],
                'active' => true,
            ],
//			[
//                'label' => 'Contact',
//                'content' => $this->blocks['contact'],
//            ],
//            [
//                'label' => 'Education',
//                'content' => $this->blocks['education'],
//            ],
//			[
//                'label' => 'Work Experience',
//                'content' => $this->blocks['workexprience'],
//            ],
//			[
//                'label' => 'Dependents',
//                'content' => $this->blocks['dependents'],
//            ],
//            [
//                'label' => 'Job',
//                'content' => $this->blocks['job'],
//            ],
//			 [
//                'label' => 'Bank',
//                'content' => $this->blocks['bank'],
//            ],
//			[
//                'label' => 'Training',
//                'content' => $this->blocks['training'],
//            ],
			
            
        ]
    ]); 
	
	
	?>
    
    
</div>
