<?php

use yii\widgets\DetailView;
use drodata\helpers\Html;
use drodata\widgets\Box;
use common\models\Lookup;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Message */

$this->title = $model->title;
$this->params = [
    'title' => $this->title,
    'subtitle' => '#' . $model->id,
    'breadcrumbs' => [
        ['label' => 'Messages', 'url' => ['index']],
        $this->title,
    ],
];
?>
<div class="row message-view">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?php Box::begin([
            'title' => $this->title,
            'tools' => [
                Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-sm btn-primary']),
                Html::a('删除', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-sm btn-danger',
                    'data' => [
                        'confirm' => '确定删除此条目吗？',
                        'method' => 'post',
                    ],
                ]),
            ],
        ]);?>
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'category',
                'title',
                'content:ntext',
                'reference_id',
                'created_by',
                'created_at',
                'updated_by',
                'updated_at',
                /*
                [
                    'attribute' => 'status',
                    'value' => Lookup::item('UserStatus', $model->status),
                ],
                */
            ],
        ]) ?>

        <?php Box::end();?>
    </div>
</div>
