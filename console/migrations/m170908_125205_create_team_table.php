<?php

use yii\db\Migration;

/**
 * Handles the creation of table `team`.
 */
class m170908_125205_create_team_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('{{%team}}', [
            'team_id' => $this->primaryKey(),
            'name' => $this->string(64)->notNull(),
            'designation' => $this->string(32)->notNull(),
            'hobbies' => $this->text()->notNull(),
            'description' => $this->text(),
            'image' => $this->string(256),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('{{%team}}');
    }

}
