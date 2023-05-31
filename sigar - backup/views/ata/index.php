<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AtaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ata-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ata', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ATA_PK',
            'TITULO',
            'DATA',
            'HR_INI',
            'HR_FIM',
            //'ASSUNTOS:ntext',
            //'PROXIMOS_PASSOS:ntext',
            //'LOCAL_FK',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
