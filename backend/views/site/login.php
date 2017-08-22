<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-4 col-lg-offset-4">
        <!--<h3 class="text-center">Braio</h3>-->
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <p class="text-center">Sign in to get in touch</p>
        <hr class="clean">
        <?php
        $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'options' => ['role' => 'form'],
        ]);
        ?>
        <?=
        $form->field($model, 'username', [
            'template' => '
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                {input}
            </div>
            {error}',
            'inputOptions' => [
                'placeholder' => 'Username',
                'class' => 'form-control',
            ]
        ])
        ?>

        <?=
        $form->field($model, 'password', [
            'template' => '
            <div class="form-group input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                {input}
            </div>
            {error}',
            'inputOptions' => [
                'placeholder' => 'Password',
                'class' => 'form-control',
            ]
        ])->passwordInput();
        ?>

        <?=
        $form->field($model, 'rememberMe')->checkbox([
            'template' => '
            <div class="form-group">
                <label class="cr-styled">
                {input}
                <i class="fa"></i> 
                </label>
                {label}
            </div>
            {error}',
        ])
        ?>

        <?= Html::submitButton('Login', ['class' => 'btn btn-purple btn-block', 'name' => 'login-button']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>