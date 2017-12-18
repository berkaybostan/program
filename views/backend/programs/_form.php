<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\program\models\Program */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="program-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'dersadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'derssaati')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sinif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ogretimgorevlisi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
