<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Praca */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Praca',
]) . $model->idpraca;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pracas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idpraca, 'url' => ['view', 'id' => $model->idpraca]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="praca-update">

    <h1><?= Html::encode($this->title) ?></h1>
    
    <?php $criar = false; ?>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicial' => $listPolicial,
        'listGraduacao' => $listGraduacao,
        'criar' => $criar,
    ]) ?>

</div>
