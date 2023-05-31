<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PARTICIPANTES */

$this->title = 'Update Participantes: ' . $model->PARTICIPANTES_PK;
$this->params['breadcrumbs'][] = ['label' => 'Participantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PARTICIPANTES_PK, 'url' => ['view', 'id' => $model->PARTICIPANTES_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="participantes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
