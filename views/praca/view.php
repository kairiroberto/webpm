<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Praca */

$this->title = $model->idpraca;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pracas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="praca-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpraca], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpraca], [
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
            'idpraca',
            'idpolicial',
            'idpolicial0.nome',
            'idgraduacao',
            'idgraduacao0.nome_graduacao',
            'numero_praca',
        ],
    ]) ?>

</div>
