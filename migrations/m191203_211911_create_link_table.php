<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%link}}`.
 */
class m191203_211911_create_link_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%link}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'url' => $this->string(255)->notNull(),
            'parent_id' => $this->integer()->defaultValue(null),
            'created_at' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%link}}');
    }
}
