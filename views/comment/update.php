<?php

use drodata\helpers\Html;
use drodata\widgets\Box;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Comment */

$this->title = 'Update Comment: ' . $model->id;
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => 'Comments', 'url' => ['index']],
        ['label' => $model->id, 'url' => ['view', 'id' => $model->id]],
        'Update',
    ],
];
?>
<div class=row "comment-update">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?= Box::widget([
            'title' => $this->title,
            'content' => $this->render('_form', [
                'model' => $model,
            ]),
        ]) ?>
    </div>
</div>
