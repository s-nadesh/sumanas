<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%team}}".
 *
 * @property integer $team_id
 * @property string $name
 * @property string $designation
 * @property string $hobbies
 * @property string $description
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 */
class Team extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%team}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['name', 'designation', 'hobbies', 'image'], 'required', 'on' => 'insert'],
                [['hobbies', 'description'], 'string'],
                [['created_at', 'updated_at'], 'safe'],
                [['image'], 'image', 'extensions' => 'jpg, gif, png', 'skipOnEmpty' => !$this->isNewRecord],
                [['name', 'designation'], 'required', 'on' => 'update'],
                [['name'], 'string', 'max' => 64],
                [['designation'], 'string', 'max' => 32],
                [['image'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'team_id' => 'Team ID',
            'name' => 'Name',
            'designation' => 'Designation',
            'hobbies' => 'Hobbies',
            'description' => 'Description',
            'image' => 'Image',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

}
