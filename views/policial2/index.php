<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Policial2Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Policial2s');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Policial2'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpolicial',
            'nome',
            'cpf',
            'matricula',
            'email:email',
            // 'admissao',
            // 'nascimento',
            // 'pai',
            // 'mae',
            // 'naturalidade',
            // 'rg',
            // 'estado_civil',
            // 'altura',
            // 'cor',
            // 'olhos',
            // 'boca',
            // 'nariz',
            // 'rosto',
            // 'instrucao',
            // 'profissao',
            // 'procedencia',
            // 'exclusao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
