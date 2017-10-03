<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiariaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Escalas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diaria-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Ordem crescente'), ['index'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Ordem decrescente'), ['index2'], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Create Diaria'), ['varias'], ['class' => 'btn btn-success']) ?>
    </p>
        
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'iddiaria',
            'data_ini',
            'hora_ini',
            //'data_fin',
            //'hora_fin',
            'servico',
            'local',
            // 'qtd_policiais',
            // 'valor',
            'extra:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
