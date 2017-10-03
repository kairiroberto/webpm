<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cargo */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Cargo',
]) . $model->idcargo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cargos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcargo, 'url' => ['view', 'id' => $model->idcargo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cargo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
