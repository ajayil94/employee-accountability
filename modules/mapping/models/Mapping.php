<?php

namespace app\modules\mapping\models;

use Yii;

/**
 * This is the model class for table "tbl_mapping".
 *
 * @property int $id
 * @property string $project_id
 * @property string $employee_id
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
            [['project_id', 'employee_id'], 'required'],
            [['project_id', 'employee_id'], 'string'],
            [['created_at', 'modified_at'], 'safe'],
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
            'employee_id' => 'Employee Name',
            'created_at' => 'Created At',
            'modified_at' => 'Modified At',
        ];
    }
}
