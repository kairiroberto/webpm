<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BoPolicial */

$this->title = Yii::t('app', 'Create Bo Policial');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Policials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-policial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listPolicia' => $listPolicia,
        'listBo' => $listBo,
        'novo' => true,
    ]) ?>

</div>
