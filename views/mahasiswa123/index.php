<?php
    use yii\grid\GridView;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?=
    Html::a('Tambah Mahasiswa',['create'],['class' => 'btn btn-primary']);
?>
<?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id123',
            'nim123',
            'nama123',
            'kelas123',
            'status123',
            ['class' => ActionColumn::className()]
        ]
    ]);
?>
