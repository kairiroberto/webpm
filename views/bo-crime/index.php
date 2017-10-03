<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BoCrimeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bo Crimes');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-crime-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Bo Crime'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbo_crime',
            'idbo',
            'idbo0.data',
            'idcrime',
            'idcrime0.artigo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
