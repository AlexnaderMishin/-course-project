<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'WITCHER',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [];
    
    // $menuItems[] = ['label' => 'Главная', 'url' => ['/site/index']];
        if( Yii::$app->user->isGuest){
            
            $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/reg']];
            $menuItems[] = ['label' => 'Авторизация', 'url' => ['/site/login']];
        }else {
            
            if(Yii::$app->user->identity->admin == 1){
                $menuItems[] = ['label' => 'Сериал', 'url' => ['/seria']];
                $menuItems[] = ['label' => 'Добавить категорию', 'url' => ['/category']];

            }else {
                $menuItems[] = ['label' => 'Сериал', 'url' => ['/site/watch']];
                $menuItems[] = ['label' => 'Новости', 'url' => ['/site/newspaper']];
                $menuItems[] = ['label' => 'Анимации', 'url' => ['/site/animation']];
            }
            
            
            // $menuItems[] = ['label' => 'Выход', 'url' => ['/admin/index']];
            $menuItems[] = (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
                );
        }

    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
