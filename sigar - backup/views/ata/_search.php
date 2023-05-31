<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ata-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ATA_PK') ?>

    <?= $form->field($model, 'TITULO') ?>

    <?= $form->field($model, 'DATA') ?>

    <?= $form->field($model, 'HR_INI') ?>

    <?= $form->field($model, 'HR_FIM') ?>

    <?php // echo $form->field($model, 'ASSUNTOS') ?>

    <?php // echo $form->field($model, 'PROXIMOS_PASSOS') ?>

    <?php // echo $form->field($model, 'LOCAL_FK') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
