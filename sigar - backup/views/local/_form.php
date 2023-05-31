<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LOCAL */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="local-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'LOCAL_PK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HIERARQUIA_FK')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'USUARIO_FK')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
