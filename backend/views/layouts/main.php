<?php
use dezmont765\yii2bundle\components\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \dezmont765\yii2bundle\views\MainView */
$this->beginContent('@app/views/layouts/base-layout.php'); ?>
<div class="wrap">
    <?php
    NavBar::begin([
                      'brandLabel' => 'Beacon-CMS',
                      'brandUrl' => Yii::$app->homeUrl,
                      'options' => [
                          'class' => 'navbar-default navbar-fixed-top',
                      ],
                  ]);
    echo Nav::widget([
                         'options' => ['class' => 'navbar-nav navbar-left'],
                         'items' => $this->getLayoutData(\backend\filters\AdminLayout::place_left_nav)]);
    echo Nav::widget([
                         'options' => ['class' => 'navbar-nav navbar-right'],
                         'items' => $this->getLayoutData(\backend\filters\AdminLayout::place_right_nav)]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Alert::printAlert(); ?>
        <?= $content ?>
    </div>
</div>
<?php $this->endContent() ?>

