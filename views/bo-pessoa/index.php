<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BoPessoaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bo Pessoas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-pessoa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Bo Pessoa'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbo_pessoa',
            'idbo',
            'idbo0.data',
            'idpessoa',
            'idpessoa0.nome',
            'idpessoa_tipo',
            'idpessoaTipo.nome',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
