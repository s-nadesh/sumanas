<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contact_us`.
 */
class m170909_063643_create_contact_us_table extends Migration {

    /**
     * @inheritdoc
     */
    public function up() {
        $this->createTable('{{%contact_us}}', [
            'cont_id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'email' => $this->string(255)->notNull(),
            'mobile' => $this->string(255)->notNull(),
            'requirement' => $this->string(255)->notNull(),
            'message' => $this->text()->notNull(),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down() {
        $this->dropTable('{{%contact_us}}');
    }

}
