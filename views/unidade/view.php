<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Unidade */

$this->title = $model->idunidade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Unidades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idunidade], ['class' => 'btn btn-primary']) ?>
        <?=
        Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idunidade], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ])
        ?>
    <?= Html::a(Yii::t('app', 'Adicionar Policiais'), ['policial-unidade/punidade', 'id' => $model->idunidade], ['class' => 'btn btn-success']) ?>
    <?= Html::a(Yii::t('app', 'Remover Policiais'), ['policial-unidade/index2', 'id' => $model->idunidade], ['class' => 'btn btn-success']) ?>
    </p>

    <?=
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idunidade',
            'nome',
            'cidade',
        ],
    ])
    ?>

    <?=
    GridView::widget([
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
        ],
    ]);
    ?>

</div>
