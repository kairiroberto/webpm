<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PolicialDiariaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Policial Diarias');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-diaria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Ordem crescente'), ['index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Ordem decrescente'), ['index2'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Voltar'), ['diaria/view', 'id' => $iddiaria], ['class' => 'btn btn-success']) ?>    
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpolicial_diaria',
            'idpolicial',
            'idpolicial0.nome',
            'iddiaria',
            'iddiaria0.data_ini',
            'executada:boolean',
            'justificada:boolean',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{delete} {update}'],
        ],
    ]); ?>
</div>
