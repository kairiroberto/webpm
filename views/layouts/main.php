<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <?php
        $items = [
            //['label' => 'About', 'url' => ['/site/about']],
            //['label' => 'Contact', 'url' => ['/site/contact']],

            \Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'url' => ['/site/login']]
                    ) : (
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post')
                    . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->login . ')', ['class' => 'btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
                    )
        ];

        $items2 = [
            ['label' => 'Home', 'url' => ['/site/index']],
            [
                'label' => 'Policial',
                'items' => [
                    ['label' => 'Policial', 'url' => ['/policial/index']],
                    ['label' => 'Unidade', 'url' => ['/unidade/index']],
                    ['label' => 'Curso', 'url' => ['/curso/index']],
                    ['label' => 'Cargo', 'url' => ['/cargo/index']],
                    ['label' => 'Posto', 'url' => ['/posto/index']],
                    //['label' => 'Policial (Oficiais)', 'url' => ['/oficial/index']],
                    ['label' => 'Graduação', 'url' => ['/graduacao/index']],
                    //['label' => 'Polícial (Praças)', 'url' => ['/praca/index']],
                    //['label' => 'Policial (Unidades)', 'url' => ['/policial-unidade/index']],
                    //['label' => 'Policial (Cursos)', 'url' => ['/policial-curso/index']],
                    //['label' => 'Policial (Cargos)', 'url' => ['/policial-cargo/index']],
                ],
            ],
            [
                'label' => 'Ocorrências',
                'items' => [
                    ['label' => 'Crime', 'url' => ['/crime/index']],
                    ['label' => 'Pessoa', 'url' => ['/pessoa/index']],
                    ['label' => 'Ocorrências', 'url' => ['/bo/index']],
                    ['label' => 'Ocorrência (Crime)', 'url' => ['/bo-crime/index']],
                    ['label' => 'Ocorrência (Pessoa)', 'url' => ['/bo-pessoa/index']],
                    ['label' => 'Ocorrência (Policial)', 'url' => ['/bo-policial/index']],
                ],
            ],
            [
                'label' => 'Escalas',
                'items' => [
                    ['label' => 'Cadastrar Escala', 'url' => ['/diaria/index']],
                    //['label' => 'Alterar Escala', 'url' => ['/policial-diaria/index']],
                ],
                ['label' => 'Usuario', 'url' => ['/usuario/index']],
            ],
        ];

        if (\Yii::$app->user->can('crudSecretario') || \Yii::$app->user->can('crudComandante')) {
            $items = array_merge($items, $items2);
        }
        ?>

        <div class="wrap">
            <?php
            NavBar::begin([
                //'brandLabel' => 'My Company',
                'brandLabel' => 'PM',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $items,
            ]);

            NavBar::end();
            ?>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
