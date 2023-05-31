<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ATA */

$this->title = 'Create Ata';
$this->params['breadcrumbs'][] = ['label' => 'Atas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ata-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
