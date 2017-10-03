<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use kartik\widgets\ActiveForm;
use kartik\builder\TabularForm;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Diaria */

$this->title = $model->iddiaria;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diarias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diaria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->iddiaria], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->iddiaria], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
        <?= Html::a(Yii::t('app', 'Adicionar Policiais'), ['policial-diaria/pdiaria', 'id' => $model->iddiaria], ['class' => 'btn btn-success']) ?>
    <?= Html::a(Yii::t('app', 'Alterar/Remover Policiais'), ['policial-diaria/index', 'id' => $model->iddiaria], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'iddiaria',
            'data_ini',
            'hora_ini',
            'data_fin',
            'hora_fin',
            'servico',
            'local',
            'qtd_policiais',
            'valor',
            'extra:boolean',
        ],
    ])
    ?>

    <h1>POLICIAIS</h1>
    <?=
    yii\grid\GridView::widget([
        'dataProvider' => $provider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'matricula',
            'nome',
        //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>

</div>
