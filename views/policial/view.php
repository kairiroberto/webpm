<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Policial */

$this->title = $model->idpolicial;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="policial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpolicial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Alterar Foto'), ['foto', 'id' => $model->idpolicial], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpolicial], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        
        <?= Html::a(Yii::t('app', 'E-mail'), ['email', 'id' => $model->idpolicial], ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Ficha'), ['ficha', 'id' => $model->idpolicial], ['class' => 'btn btn-info']) ?>
        <?= Html::a(Yii::t('app', 'Escala'), ['escala', 'id' => $model->idpolicial], ['class' => 'btn btn-info']) ?>
        
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'fotoLink',
            [
                'attribute' => 'fotoLink',
                'format' => 'image',
                'value' => $model->getFotoPath(),
            ],
            'idpolicial',
            'nome',
            'cpf',
            'rg',
            'matricula',
            'email:email',
            'nascimento',
            'naturalidade',
            'pai',
            'mae',
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
            'admissao',
            'exclusao',
        ],
    ]) ?>

</div>
