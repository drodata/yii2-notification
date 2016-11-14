<?php

use drodata\helpers\Html;
use drodata\widgets\Box;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Comment */

$this->title = 'Create Comment';
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => 'Comments', 'url' => ['index']],
        $this->title,
    ],
];
?>
<div class="row comment-create">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?= Box::widget([
            'title' => $this->title,
            'content' => $this->render('_form', [
                'model' => $model,
            ]),
        ]) ?>
    </div>
</div>
