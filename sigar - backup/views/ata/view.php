<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ATA */

$this->title = $model->ATA_PK;
$this->params['breadcrumbs'][] = ['label' => 'Atas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ata-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ATA_PK], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ATA_PK], [
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
            'ATA_PK',
            'TITULO',
            'DATA',
            'HR_INI',
            'HR_FIM',
            'ASSUNTOS:ntext',
            'PROXIMOS_PASSOS:ntext',
            'LOCAL_FK',
        ],
    ]) ?>

</div>
