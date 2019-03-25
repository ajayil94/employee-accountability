<?php

namespace app\modules\users\models;

use Yii;

/**
 * This is the model class for table "tbl_users".
 *
 * @property int $id
 * @property string $emp_id
 * @property string $role_id
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['emp_id', 'role_id'], 'required'],
            [['emp_id', 'role_id'], 'string'],
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
            'role_id' => 'Role ID',
        ];
    }
}
