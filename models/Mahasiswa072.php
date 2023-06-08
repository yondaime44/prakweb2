<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa072".
 *
 * @property int $id072
 * @property string $nim072
 * @property string $nama072
 * @property string $kelas072
 * @property string $status072
 */
class Mahasiswa072 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa072';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim072', 'nama072', 'kelas072', 'status072'], 'required'],
            [['nim072', 'nama072', 'kelas072', 'status072'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id072' => 'ID',
            'nim072' => 'No. Induk Mahasiswa',
            'nama072' => 'Nama Mahasiswa',
            'kelas072' => 'Kelas',
            'status072' => 'Status',
        ];
    }
}
