<?php

namespace app\controllers;

use app\models\Mahasiswa072;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa072Controller extends  \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa072::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionCreate()
    {
        $mhs = new Mahasiswa072;
        $mhs->nim072 = '60200121072-' . rand(100, 999);
        $mhs->nama072 = 'Andi Febrianto';
        $mhs->kelas072 = 'B';
        $mhs->status072 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mahasiswa072::findOne(['id072' => $id]);
        if ($mhs !== null) {
            $mhs->kelas072 = 'B';
            $mhs->status072 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa072::findOne(['id072' => $id]);
        if ($mhs->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }

    public function actionView($id)
    {
        $mhs = Mahasiswa072::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }
}
