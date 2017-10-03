<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BoPolicial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
            'modelClass' => 'Bo Policial',
        ]) . $model->idbo_policial;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Policials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbo_policial, 'url' => ['view', 'id' => $model->idbo_policial]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bo-policial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?=
    $this->render('_form', [
        'model' => $model,
        'listPolicia' => $listPolicia,
        'listBo' => $listBo,
        'novo' => false,
    ])
    ?>

</div>
