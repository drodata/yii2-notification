<?php

use yii\widgets\DetailView;
use drodata\helpers\Html;
use drodata\widgets\Box;
use commom\models\Lookup;

/* @var $model dro\notification\models\Message */

?>
<?php Box::begin([
    'title' => $model->id,
]);?>
    <?= DetailView::widget([
        'model' => $model,
        'template' => Html::beginTag('tr')
            . Html::tag('th', '{label}', ['width' => '20%', 'class' => 'text-right'])
            . Html::tag('td', '{value}')
            . Html::endTag('td'),
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
        ],
    ]) ?>
<?php Box::end();?>
