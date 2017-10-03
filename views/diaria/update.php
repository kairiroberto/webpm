<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Diaria */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Escala',
]) . $model->iddiaria;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Diarias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddiaria, 'url' => ['view', 'id' => $model->iddiaria]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="diaria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
