<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PolicialDiaria */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Policial Diaria',
]) . $model->idpolicial_diaria;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Policial Diarias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpolicial_diaria, 'url' => ['view', 'id' => $model->idpolicial_diaria]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="policial-diaria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listDiaria' => $listDiaria,
    ]) ?>

</div>
