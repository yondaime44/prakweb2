<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa123".
 *
 * @property int $id123
 * @property string $nim123
 * @property string $nama123
 * @property string $kelas123
 * @property string $status123
 */
class Mahasiswa123 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa123';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim123', 'nama123', 'kelas123', 'status123'], 'required'],
            [['nim123', 'nama123', 'kelas123', 'status123'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id123' => 'Id123',
            'nim123' => 'Nim123',
            'nama123' => 'Nama123',
            'kelas123' => 'Kelas123',
            'status123' => 'Status123',
        ];
    }
}
