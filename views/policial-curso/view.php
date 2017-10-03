<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialCurso */

$this->title = $model->idpolicial_curso;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Cursos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-curso-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpolicial_curso], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpolicial_curso], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idpolicial_curso',
            'idpolicial',
            'idpolicial0.nome',
            'idcurso',
            'idcurso0.nome',
            'instituicao',
            'inicio',
            'fim',
            'horas',
        ],
    ]) ?>

</div>
