<?php

namespace app\modules\designation\models;

use Yii;

/**
 * This is the model class for table "tbl_designation".
 *
 * @property int $id
 * @property string $designation
 * @property string $description
 
 */
class Designation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_designation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['designation'], 'required'],
            [['designation', 'description'], 'string'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'designation' => 'Designation',
            'description' => 'Description',
//            'created_at' => 'Create at',
//            'modified_at' => 'Modified at',
            
//            
        ];
    }
    

}
