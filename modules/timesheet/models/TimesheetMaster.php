<?php

namespace app\modules\timesheet\models;

use Yii;

/**
 * This is the model class for table "tbl_timesheet_master".
 *
 * @property int $id
 * @property int $emp_id
 * @property string $project_name
 * @property string $description
 * @property string $duration
 */
class TimesheetMaster extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_timesheet_master';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_id'], 'integer'],
            [['project_name'], 'required'],
            [['description', 'duration'], 'string'],
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
            'emp_id' => 'Emp ID',
            'project_name' => 'Project Name',
            'description' => 'Description',
            'duration' => 'Duration',
        ];
    }
}
