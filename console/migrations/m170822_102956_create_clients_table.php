<?php

use yii\db\Migration;

/**
 * Handles the creation of table `clients`.
 */
class m170822_102956_create_clients_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('{{%clients}}', [
            'client_id' => $this->primaryKey(),
            'client_name' => $this->string(32)->notNull(),
            'title' => $this->string(64)->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string(256)->notNull(),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('{{%clients}}');
    }

}
