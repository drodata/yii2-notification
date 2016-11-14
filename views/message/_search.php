<?php

use yii\bootstrap\ActiveForm;
use drodata\helpers\Html;
use drodata\widgets\Box;
use commom\models\Lookup;

/* @var $this yii\web\View */
/* @var $model dro\notification\models\MessageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row message-search">
    <div class="col-sm-12">
        <?php Box::begin([ 'title' => '搜索', ]);?>
            <?php $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
            ]); ?>
            <?= $form->field($model, 'id') ?>

            <?= $form->field($model, 'category') ?>

            <?= $form->field($model, 'title') ?>

            <?= $form->field($model, 'content') ?>

            <?= $form->field($model, 'reference_id') ?>

            <?php // echo $form->field($model, 'created_by') ?>

            <?php // echo $form->field($model, 'created_at') ?>

            <?php // echo $form->field($model, 'updated_by') ?>

            <?php // echo $form->field($model, 'updated_at') ?>

            <div class="form-group">
                <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
                <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
