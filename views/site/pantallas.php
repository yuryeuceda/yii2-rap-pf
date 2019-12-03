<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;



$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
            'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
        ],
    ],
]);




$this->title = 'Solicitud de Confirmacion';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <header style="margin:auto;">
        <h2><?= Html::encode($this->title) ?></h2>
    </header>


    <div class="panel panel-primary">

        <div class="panel-heading">
            <h3 class="panel-title">Ficha de solicitud de Creditos</h3>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row">
                <div class="col-lg-4">
                    <div class="input-group">
                        <?= $form->field($model, 'fechaSol')->textInput() ?>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <?= $form->field($model, 'numConf') ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="input-group">
                        <?= $form->field($model, 'Tpres') ?>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>

    </div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Datos Generales del Afiliado</a></li>
                <li><a data-toggle="tab" href="#menu1">Informacion del empleo del afiliado</a></li>
                <li><a data-toggle="tab" href="#menu2">Condiciones del credito solicitadas</a></li>
            </ul>
        </div>

        <div class="panel-body">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'Tid')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'Nid') ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'Naf') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'emailA') ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'Aaf') ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'Tcelular') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'Tfijo') ?>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer" style="margin:auto;">
                        <div class="form-group">
                            <a href="#menu1" data-toggle="tab" class="btn btn-success">siguiente</a>
                        </div>
                    </div>

                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'fechaSol')->textInput() ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="">
                                <?= $form->field($model, 'numConf') ?>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer" style="margin:auto;">
                        <div class="form-group">
                            <a href="#home" data-toggle="tab" class="btn btn-danger">anterior</a>
                            <a href="#menu2" data-toggle="tab" class="btn btn-success">siguiente</a>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="row">
                        <h3>Menu 2</h3>
                        <p>Some content in menu 2.</p>
                    </div>

                    <div class="card-footer" style="margin:auto;">
                        <div class="form-group">
                            <a href="#menu1" data-toggle="tab" class="btn btn-danger">anterior</a>
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>



    <?php ActiveForm::end(); ?>