<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat60200121072".
 *
 * @property int $id
 * @property int $kode_obat
 * @property int $harga
 * @property int $stok_obat
 */
class Obat60200121072 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat60200121072';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kode_obat', 'harga', 'stok_obat'], 'required'],
            [['id', 'kode_obat', 'harga', 'stok_obat'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_obat' => 'Kode Obat',
            'harga' => 'Harga',
            'stok_obat' => 'Stok Obat',
        ];
    }
}
