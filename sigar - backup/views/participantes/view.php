<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PARTICIPANTES */

$this->title = $model->PARTICIPANTES_PK;
$this->params['breadcrumbs'][] = ['label' => 'Participantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="participantes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PARTICIPANTES_PK], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PARTICIPANTES_PK], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PARTICIPANTES_PK',
            'ATA_FK',
            'NOME',
            'SETOR',
            'EMAIL:email',
        ],
    ]) ?>

</div>
