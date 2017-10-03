<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PolicialCursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Policial Cursos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-curso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Policial Curso'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpolicial_curso',
            'idpolicial',
            'idpolicial0.nome',
            'idcurso',
            'idcurso0.nome',
            'instituicao',
            'inicio',
            'fim',
            'horas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
