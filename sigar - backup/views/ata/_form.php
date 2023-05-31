<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ATA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ata-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ATA_PK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TITULO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HR_INI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HR_FIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ASSUNTOS')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'PROXIMOS_PASSOS')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'LOCAL_FK')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
