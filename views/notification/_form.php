<?php

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use common\models\Lookup;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\Notification */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notification-form">

    <?php $form = ActiveForm::begin(); ?>
        <!--
        <div class="row">
            <div class="col-lg-6 col-md-12">
            </div>
        </div>
        -->
    <?= $form->field($model, 'message_id')->textInput() ?>

    <?= $form->field($model, 'receiver_id')->textInput() ?>

    <?= $form->field($model, 'is_read')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '新建' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
