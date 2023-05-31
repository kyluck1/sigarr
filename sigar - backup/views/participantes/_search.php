<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ParticipantesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="participantes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PARTICIPANTES_PK') ?>

    <?= $form->field($model, 'ATA_FK') ?>

    <?= $form->field($model, 'NOME') ?>

    <?= $form->field($model, 'SETOR') ?>

    <?= $form->field($model, 'EMAIL') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
