<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Administración RAP';

?>

<body>
    <div class="login-form">
        <div class="modal-dialog text-center">
            <div class="col-sm-10">
                <div class="modal-content">
                    <div class="col-md-12" style="padding-top: 15px; padding-bottom: 10px;">
                        <img src="../web/img/logo.png" style="width: 50%;" alt="">
                    </div>
                    <div class="col-12">

                        <div class="row" style="padding: 50px 50px 30px 50px;">
                            <h3><?= Html::encode($this->title) ?></h3>

                            <p>Por favor llena los campos para iniciar sesión:</p>
                            <?php $form = ActiveForm::begin([
                                'id' => 'login-form',
                                'layout' => 'horizontal',
                                'fieldConfig' => [
                                    'template' => "{label}\n<div class=\"col-lg-8\">{input}</div>\n<div class=\"col-lg-12\">{error}</div>",
                                    'labelOptions' => ['class' => 'col-lg-3 control-label'],
                                ],
                            ]); ?>

                            <div class="col-md-12">
                                <div class="input-group mb-3" style="display: block;">
                                    <?= $form->field($model, 'username')->label('Usuario:')->textInput(['autofocus' => true, 'placeholder' => "Ingrese aqui su usuario"]) ?>
                                    <div class="input-group-append">
                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group mb-3" style="display: block;">
                                    <?= $form->field($model, 'password')->label('Contraseña:')->textInput(['placeholder' => "Ingrese aqui su contraseña"]) ?>
                                    <div class="input-group-append">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-8">
                                    <?= $form->field($model, 'rememberMe')->checkbox([
                                        'template' => "<div class=\" col-lg-8\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                                    ]) ?>
                                </div>
                                <div class="col-xs-4">
                                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>
                            </div>
                            <div class="row">
                                <a href="<?= Url::toRoute(['/site/c']) ?>">¿Olvidó su contraseña?</a>
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>