<?php
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body data-ng-app>
        <?php $this->beginBody() ?>

        <!-- Preloader -->
        <?php $this->beginContent('@app/views/layouts/_preloader.php'); ?>
        <?php $this->endContent(); ?>
        <!-- Preloader -->

        <?php $this->beginContent('@app/views/layouts/_aside.php'); ?>
        <?php $this->endContent(); ?>        
        <!-- Aside Ends-->

        <section class="content">
            
            <?php $this->beginContent('@app/views/layouts/_header.php'); ?>
            <?php $this->endContent(); ?>
            <!-- Header Ends -->

            <div class="warper container-fluid">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
            <!-- Warper Ends Here (working area) -->

            <?php $this->beginContent('@app/views/layouts/_footer.php'); ?>
            <?php $this->endContent(); ?>
            <!-- Footer Ends -->
        </section>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

<!-- Below Core coding are hidden by Nad-->
       <?php
//            NavBar::begin([
//                'brandLabel' => 'My Company',
//                'brandUrl' => Yii::$app->homeUrl,
//                'options' => [
//                    'class' => 'navbar-inverse navbar-fixed-top',
//                ],
//            ]);
//            $menuItems = [
//                    ['label' => 'Home', 'url' => ['/site/index']],
//            ];
//            if (Yii::$app->user->isGuest) {
//                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//            } else {
//                $menuItems[] = '<li>'
//                        . Html::beginForm(['/site/logout'], 'post')
//                        . Html::submitButton(
//                                'Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link logout']
//                        )
//                        . Html::endForm()
//                        . '</li>';
//            }
//            echo Nav::widget([
//                'options' => ['class' => 'navbar-nav navbar-right'],
//                'items' => $menuItems,
//            ]);
//            NavBar::end();
        ?>
