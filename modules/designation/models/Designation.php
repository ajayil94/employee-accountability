<?php

namespace app\modules\designation\models;

use Yii;

/**
 * This is the model class for table "tbl_designation".
 *
 * @property int $id
 * @property string $designation
 * @property string $description
 * @property string $created_at
 * @property string $modified_at
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
            [['designation', 'created_at', 'modified_at'], 'required'],
            [['designation', 'description'], 'string'],
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
            'designation' => 'Designation',
            'description' => 'Description',
            'created_at' => 'Created At',
            'modified_at' => 'Modified At',
        ];
    }
}
