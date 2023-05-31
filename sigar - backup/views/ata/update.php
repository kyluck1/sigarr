<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ATA */

$this->title = 'Update Ata: ' . $model->ATA_PK;
$this->params['breadcrumbs'][] = ['label' => 'Atas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ATA_PK, 'url' => ['view', 'id' => $model->ATA_PK]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ata-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
