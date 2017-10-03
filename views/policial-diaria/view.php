<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialDiaria */

$this->title = $model->idpolicial_diaria;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Diarias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-diaria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpolicial_diaria], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpolicial_diaria], [
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
            'idpolicial_diaria',
            'idpolicial',
            'idpolicial0.nome',
            'iddiaria',
            'iddiaria0.data_ini',
            'iddiaria0.local',
            'iddiaria0.servico',
            'executada:boolean',
            'justificada:boolean',
        ],
    ]) ?>

</div>
