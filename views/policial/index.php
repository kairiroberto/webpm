<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PolicialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Policials');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Policial'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'idpolicial',
            'nome',
            'cpf',
            'matricula',
            //'foto',
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
