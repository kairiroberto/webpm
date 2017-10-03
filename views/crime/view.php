<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Crime */

$this->title = $model->idcrime;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Crimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="crime-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcrime], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcrime], [
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
            'idcrime',
            'nome',
            'artigo',
            'lei',
        ],
    ]) ?>
    
    <?= GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nome',
            'atendimentos',
        ],
    ]) ?>

</div>