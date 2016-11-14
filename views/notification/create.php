<?php

use drodata\helpers\Html;
use drodata\widgets\Box;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Notification */

$this->title = 'Create Notification';
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => 'Notifications', 'url' => ['index']],
        $this->title,
    ],
];
?>
<div class="row notification-create">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?= Box::widget([
            'title' => $this->title,
            'content' => $this->render('_form', [
                'model' => $model,
            ]),
        ]) ?>
    </div>
</div>
