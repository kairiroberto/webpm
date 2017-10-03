<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Graduacao */

$this->title = Yii::t('app', 'Create Graduacao');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Graduacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="graduacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
