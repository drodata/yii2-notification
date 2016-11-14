<?php

use drodata\helpers\Html;
use drodata\widgets\Box;
use common\models\Lookup;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel dro\notification\models\MessageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Messages';
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => $this->title, 'url' => 'index'],
        '管理',
    ],
];
?>
<div class="row message-index">
    <div class="col-sm-12">
        <?php Box::begin([
            'title' => $this->title,
            'tools' => [
                Html::a('新建Message', ['create'], ['class' => 'btn btn-sm btn-success'])
            ],
        ]);?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                /* `afterRow` has the same signature
                'rowOptions' => function ($model, $key, $index, $grid) {
                     return [
                         'class' => ($model->status == Product::DISABLED) ? 'bg-danger' : '',
                     ];
                },
                */
                'filterModel' => $searchModel,
               'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'category',
                    'title',
                    'content:ntext',
                    'reference_id',
                    // 'created_by',
                    // 'created_at',
                    // 'updated_by',
                    // 'updated_at',

                    /*
                    [
                        'attribute' => 'status',
                        'filter' => Lookup::items('UserStatus'),
                        'value' => function ($model, $key, $index, $column) {
                            return Lookup::item('UserStatus', $model->status);
                        },
                        'contentOptions' => ['width' => '80px'],
                    ],
                    [
                        'label' => '',
                        'format' => 'raw',
                        'value' => function ($model, $key, $index, $column) {
                            return $model->rolesString;
                        },
                    ],
                    */
                    ['class' => 'drodata\grid\ActionColumn'],
                    /*
                    [
                        'class' => 'drodata\grid\ActionColumn',
                        'template' => '{view} {update} {delete} {}',
                        'buttons' => [
                            '' => function ($url, $model, $key) {
                                return Html::a(Html::icon(''), ['/order/view', 'id' => $model->id],[
                                    'title' => '',
                                    'data' => [
                                        'id' => $model->id,
                                    ],
                                ]);
                            },
                        ],
                    ],
                    */
                ],
            ]); ?>
        <?php Box::end();?>
    </div>
</div> <!-- .row -->
