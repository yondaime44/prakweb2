<?php

namespace app\controllers;

use app\models\Mahasiswa123;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa123Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa123::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa123;
        $mhs->nim123 = '60200121123-' . rand(100, 999);
        $mhs->nama123 = 'Sriwahyuni';
        $mhs->kelas123 = 'C';
        $mhs->status123 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mahasiswa123::findOne(['id123' => $id]);
        if ($mhs !== null) {
            $mhs->kelas123 = 'B';
            $mhs->status123 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa123::findOne(['id123' => $id]);
        if ($mhs->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $mhs = Mahasiswa123::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}

