<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%contact_us}}".
 *
 * @property integer $cont_id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $requirement
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 */
class ContactUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%contact_us}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'mobile', 'requirement', 'message'], 'required'],
            [['message'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'mobile', 'requirement'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cont_id' => 'Cont ID',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'requirement' => 'Requirement',
            'message' => 'Message',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
