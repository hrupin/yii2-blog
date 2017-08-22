<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;

$this->title = "Hrupin YII2 Blog"
?>

<?php Pjax::begin(['enablePushState' => false]); ?>
<?= $this->render('_menu'); ?>

<?php
foreach ($aP as $key => $value) {
    $aP[$key] = implode(' | ', $value);
}
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        //'id_category',
        [
            'attribute' => 'id_category',
            'headerOptions' => ['style' => 'width:7%']
        ],
        [
            'attribute' => 'id_parent',
            'label' => 'PARENT',
            'content' => function ($data) use ($aP) {
                if ($data->id_parent) {
                    return $aP[$data->id_parent];
                } else {
                    return '-';
                }
            },
            'filter' => $aP,
            'headerOptions' => ['style' => 'width:25%']
        ],
        [
            'attribute' => 'title',
            'headerOptions' => ['style' => 'width:45%']
        ],
        [
            'attribute' => 'lang',
            'label' => 'LANGUAGE',
            'content' => function ($data) use ($langs) {
                return $langs[$data->lang];
            },
            'filter' => $langs,
            'headerOptions' => ['style' => 'width:16%']
        ],
        [
            'attribute' => 'sort',
            'headerOptions' => ['style' => 'width:7%'],
        ],
        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>
<?php Pjax::end(); ?>