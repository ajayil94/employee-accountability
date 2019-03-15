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
            [['project_id', 'created_at', 'modified_at'], 'required'],
            [['project_id', 'emp_id'], 'string'],
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
            'project_id' => 'Project ID',
            'emp_id' => 'Emp ID',
            'created_at' => 'Created At',
            'modified_at' => 'Modified At',
        ];
    }
}
