<?php

use drodata\helpers\Html;
use drodata\widgets\Box;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Message */

$this->title = 'Update Message: ' . $model->title;
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => 'Messages', 'url' => ['index']],
        ['label' => $model->title, 'url' => ['view', 'id' => $model->id]],
        'Update',
    ],
];
?>
<div class=row "message-update">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?= Box::widget([
            'title' => $this->title,
            'content' => $this->render('_form', [
                'model' => $model,
            ]),
        ]) ?>
    </div>
</div>
