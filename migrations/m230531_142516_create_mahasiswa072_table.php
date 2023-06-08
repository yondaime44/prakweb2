<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa072}}`.
 */
class m230531_142516_create_mahasiswa072_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa072}}', [
            'id072' => $this->primaryKey(),
            'nim072' => $this->string()->notNull(),
            'nama072' => $this->string()->notNull(),
            'kelas072' => $this->string()->notNull(),
            'status072' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa072}}');
    }
}
