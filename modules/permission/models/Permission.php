<?php

namespace app\modules\permission\models;

use Yii;

/**
 * This is the model class for table "tbl_permission".
 *
 * @property int $id
 * @property string $module_id
 * @property string $role_id
 */
class Permission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_permission';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_id', 'role_id'], 'required'],
            [['module_id', 'role_id'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'module_id' => 'Module ID',
            'role_id' => 'Role ID',
        ];
    }
}
