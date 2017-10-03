<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Posto */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Posto',
]) . $model->idposto;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Postos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idposto, 'url' => ['view', 'id' => $model->idposto]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="posto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
