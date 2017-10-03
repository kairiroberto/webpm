<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */

$this->title = $model->idcurso;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcurso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcurso], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'Adicionar Policiais'), ['policial-curso/pcurso', 'id' => $model->idcurso], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Remover Policiais'), ['policial-curso/index2', 'id' => $model->idcurso], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idcurso',
            'nome',
        ],
    ]) ?>
    
    <?= GridView::widget([
        'dataProvider' => $provider1,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            'idpolicial',
            'nome',
            'cpf',
            'matricula',
            'inicio',
            'fim',
            'horas',
        ],
    ]); ?>

</div>
