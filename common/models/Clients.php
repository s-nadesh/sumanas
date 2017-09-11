<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%clients}}".
 *
 * @property integer $client_id
 * @property string $client_name
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class Clients extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%clients}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['client_name', 'title', 'description', 'image'], 'required', 'on' => 'insert'],
                [['description'], 'string'],
                [['created_at', 'updated_at'], 'safe'],
                [['image'], 'image', 'extensions' => 'jpg, gif, png', 'skipOnEmpty' => !$this->isNewRecord],
                [['client_name'], 'required', 'on' => 'update'],
                [['client_name'], 'string', 'max' => 32],
                [['title'], 'string', 'max' => 64],
                [['image'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'client_id' => 'Client ID',
            'client_name' => 'Client Name',
            'title' => 'Title',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
