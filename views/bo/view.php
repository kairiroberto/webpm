<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Bo */

$this->title = $model->idbo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idbo], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idbo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
        <?= Html::a(Yii::t('app', 'Crime'), ['bo-crime/bocrime', 'id' => $model->idbo], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Pessoa'), ['bo-pessoa/bopessoa', 'id' => $model->idbo], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Nova Pessoa'), ['bopessoa', 'id' => $model->idbo], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Policial'), ['bo-policial/bopolicia', 'id' => $model->idbo], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idbo',
            'data',
            'hora',
            'local',
            /*[
                'attribute' => 'descricao',
                'value' => function() {
                    return Html::textarea('descricao', $model->descricao);
                },
                'format' => 'raw',
            ],*/
            'descricao',
            'viatura',
            'pb',
            'hora_trans',
            'bairro',
            'material',
        ],
    ])
    ?>

    <h1>Crimes</h1>

    <?=
    GridView::widget([
        'dataProvider' => $provider1,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nome',
            'artigo',
            'lei',
        ],
    ]);
    ?>

    <h1>Partes</h1>

    <?=
    GridView::widget([
        'dataProvider' => $provider2,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nome',
            'nascimento',
            'rg',
            'cpf',
            'telefone',
            'endereco',
            'tipo',
        ],
    ]);
    ?>

    <h1>Policiais</h1>

    <?=
    GridView::widget([
        'dataProvider' => $provider3,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'nome',
            'matricula',
            'cmt:boolean',
        ],
    ]);
    ?>

</div>
