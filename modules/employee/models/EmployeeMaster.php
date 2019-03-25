<?php

namespace app\modules\employee\models;

use Yii;

/**
 * This is the model class for table "tbl_employee".
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property int $age
 * @property string $gender
 * @property string $designation
 */
class EmployeeMaster extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    
   // public $file; 
            
    public static function tableName() {
        return 'tbl_employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['first_name', 'last_name', 'age', 'gender', 'designation'], 'required'],
            [['profile_image'],'file','extensions'=>'jpeg,jpg,png,gif'],
            [['first_name', 'middle_name', 'last_name', 'gender', 'designation'], 'string'],
            [['age'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'designation' => 'Designation',
            'profile_image'=>'Profile Image'
            
        ];
    }

}
