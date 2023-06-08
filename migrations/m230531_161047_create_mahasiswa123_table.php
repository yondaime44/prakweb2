<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa123}}`.
 */
class m230531_161047_create_mahasiswa123_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa123}}', [
            'id123' => $this->primaryKey(),
            'nim123' => $this->string()->notNull(),
            'nama123' => $this->string()->notNull(),
            'kelas123' => $this->string()->notNull(),
            'status123' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa123}}');
    }
}
