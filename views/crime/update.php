<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Crime */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Crime',
]) . $model->idcrime;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Crimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcrime, 'url' => ['view', 'id' => $model->idcrime]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="crime-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
