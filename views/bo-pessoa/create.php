<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BoPessoa */

$this->title = Yii::t('app', 'Create Bo Pessoa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bo Pessoas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bo-pessoa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'listPessoa' => $listPessoa,
        'listPessoaTipo' => $listPessoaTipo,
        'listBo' => $listBo,
        'novo' => true,
    ]) ?>

</div>
