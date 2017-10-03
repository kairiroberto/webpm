<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BoCrime */

$this->title = Yii::t('app', 'Create Bo Crime');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Crimes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-crime-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listBo' => $listBo,
        'listCrime' => $listCrime,
        'novo' => true,
    ]) ?>

</div>
