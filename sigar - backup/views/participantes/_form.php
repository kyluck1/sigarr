<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PARTICIPANTES */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participantes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PARTICIPANTES_PK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ATA_FK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SETOR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EMAIL')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
