<?php

use drodata\helpers\Html;
use drodata\widgets\Box;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Notification */

$this->title = 'Update Notification: ' . $model->id;
$this->params = [
    'title' => $this->title,
    'subtitle' => '',
    'breadcrumbs' => [
        ['label' => 'Notifications', 'url' => ['index']],
        ['label' => $model->id, 'url' => ['view', 'id' => $model->id]],
        'Update',
    ],
];
?>
<div class=row "notification-update">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <?= Box::widget([
            'title' => $this->title,
            'content' => $this->render('_form', [
                'model' => $model,
            ]),
        ]) ?>
    </div>
</div>
