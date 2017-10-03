<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PracaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Pracas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="praca-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Praca'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpraca',
            'idpolicial',
            'idpolicial0.nome',
            'idgraduacao',
            'idgraduacao0.nome_graduacao',
            'numero_praca',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
