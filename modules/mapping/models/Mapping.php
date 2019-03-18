<?php

namespace app\modules\mapping\models;

use Yii;

/**
 * This is the model class for table "tbl_mapping".
 *
 * @property int $id
 * @property string $project_id
 * @property string $emp_id
 * @property string $created_at
 * @property string $modified_at
 */
class Mapping extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mapping';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id'], 'required'],
            [['project_id', 'emp_id'], 'string'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project Name',
            'emp_id' => 'Emp Name',
            
        ];
    }
}
