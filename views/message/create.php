<?php

use drodata\helpers\Html;
use drodata\widgets\Box;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Message */

$this->title = 'Create Message';
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => 'Messages', 'url' => ['index']],
        $this->title,
    ],
];
?>
<div class="row message-create">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?= Box::widget([
            'title' => $this->title,
            'content' => $this->render('_form', [
                'model' => $model,
            ]),
        ]) ?>
    </div>
</div>
