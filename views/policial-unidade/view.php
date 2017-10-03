<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialUnidade */

$this->title = $model->idpolicial_unidade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Unidades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-unidade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpolicial_unidade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpolicial_unidade], [
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
            'idpolicial_unidade',
            'idpolicial',
            'idpolicial0.nome',
            'idunidade',
            'idunidade0.nome',
            'inicio',
            'fim',
        ],
    ]) ?>

</div>
