<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Bo Crime',
]) . $model->idbo_crime;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Crimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbo_crime, 'url' => ['view', 'id' => $model->idbo_crime]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bo-crime-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listBo' => $listBo,
        'listCrime' => $listCrime,
        'novo' => false,
    ]) ?>

</div>
