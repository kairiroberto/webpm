<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BoPessoa */

$this->title = $model->idbo_pessoa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Pessoas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-pessoa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idbo_pessoa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idbo_pessoa], [
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
            'idbo_pessoa',
            'idbo',
            'idbo0.data',
            'idpessoa',
            'idpessoa0.nome',
            'idpessoa_tipo',
            'idpessoaTipo.nome',

        ],
    ]) ?>

</div>
