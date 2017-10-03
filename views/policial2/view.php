<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Policial2 */

$this->title = $model->idpolicial;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial2s'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpolicial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpolicial], [
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
            'idpolicial',
            'nome',
            'cpf',
            'matricula',
            'email:email',
            'admissao',
            'nascimento',
            'pai',
            'mae',
            'naturalidade',
            'rg',
            'estado_civil',
            'altura',
            'cor',
            'olhos',
            'boca',
            'nariz',
            'rosto',
            'instrucao',
            'profissao',
            'procedencia',
            'exclusao',
        ],
    ]) ?>

</div>
