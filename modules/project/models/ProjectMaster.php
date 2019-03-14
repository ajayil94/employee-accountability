<?php

namespace app\modules\project\models;

use Yii;

/**
 * This is the model class for table "tbl_project_master".
 *
 * @property int $id
 * @property string $project_name
 * @property string $description
 */
class ProjectMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_project_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_name'], 'required'],
            [['description'], 'string'],
            [['project_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_name' => 'Project Name',
            'description' => 'Description',
        ];
    }
}
