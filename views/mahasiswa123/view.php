<?php
use yii\widgets\DetailView;
?>

<?=
    DetailView::widget([
        'model' => $mhs,
        'attributes' => [
            'id123',
            'nim123',
            'nama123',
            'kelas123',
            'status123',
        ],
    ]);
?>