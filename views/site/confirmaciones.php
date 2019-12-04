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


?>

<div class="container">
    <header style="margin:auto;">
        <h2><?= Html::encode($this->title) ?></h2>
    </header>


    <div class="panel panel-primary" style="margin-bottom: 10px;">

        <div class="panel-heading">
            <h3 class="panel-title">Ficha de solicitud de Creditos</h3>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <div class="row">
                <div class="col-lg-4">
                    <?= $form->field($model, 'fechaSol')->textInput()->label('Fecha de Solicitud') ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'numConf')->label('Numero de Confirmacion') ?>
                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'Tpres')->label('Tipo de Prestamo *') ?>
                </div>
            </div><!-- /.row -->
        </div>

    </div>

    <div class="panel panel-info">
        <div class="panel-heading" style="margin-bottom: 0px;padding: 0px 15px;">
            <ul class="nav nav-tabs" style="border-bottom: 0px solid #ddd;">
                <li class="active"><a data-toggle="tab" href="#home"><b>Datos Generales del Afiliado</b></a></li>
                <li><a data-toggle="tab" href="#menu1"><b>Informacion del Empleo del Afiliado</b></a></li>
                <li><a data-toggle="tab" href="#menu2"><b>Condiciones del Credito Solicitadas</b></a></li>
            </ul>
        </div>

        <div class="panel-body">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-6" style="padding-right: 8px;">
                            <div class="panel panel-primary" style="margin-bottom: 0px;">
                                <div class="panel-heading">Persona 1</div>
                                <div class="panel-body" style="    background-color: ghostwhite;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Tid')->textInput()->label('Tipo de Identificacion *') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Nid')->label('Numero de Identificacion *') ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'emailA')->label('Email *') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Aaf')->label('Apellido de Afiliado *') ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Tcelular')->label('Telefono Celular *') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Naf')->label('Nombre de Afiliado *') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Tfijo')->label('Telefono Fijo') ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6" style="padding-left: 8px;">
                            <div class="panel panel-primary" style="margin-bottom: 0px;">
                                <div class="panel-heading">Persona 2</div>
                                <div class="panel-body" style="    background-color: ghostwhite;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Tid')->textInput()->label('Tipo de Identificacion *') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Nid')->label('Numero de Identificacion *') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'emailA')->label('Email *') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Aaf')->label('Apellido de Afiliado *') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Tcelular')->label('Telefono Celular *') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Naf')->label('Nombre de Afiliado *') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'Tfijo')->label('Telefono Fijo') ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="panel panel-primary" style="margin-bottom: 8px;">
                        <div class="panel-heading">Detalle de Empleo</div>
                        <div class="panel-body" style="    background-color: ghostwhite;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="">
                                            <?= $form->field($model, 'Naf')->label('Nombre de
                                    Empresa') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">

                                        <div class="">
                                            <?= $form->field($model, 'Naf')->label('Fecha de
                                    Ingreso') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">

                                        <div class="">
                                            <?= $form->field($model, 'Naf')->label('Antiguedad
                                    Laboral') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary" style="margin-bottom: 0px;">
                        <div class="panel-heading">Detalle de ingresos del
                            afiliado</div>
                        <div class="panel-body" style="    background-color: ghostwhite;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Tid')->label('Salario
                                    Nominal') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Nid')->label('Salario
                                    Neto') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'emailA')->label('Otros
                                    Ingresos') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="panel panel-primary" style="margin-bottom: 0px;">
                        <div class="panel-heading">Condiciones de Credito</div>
                        <div class="panel-body" style=" background-color: ghostwhite;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Tid')->textInput()->label('Destino del Crédito *') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Nid')->label('Programa de Financiamiento *') ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'emailA')->label('Monto Solicitado *') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Aaf')->label('Tipo de Garantia/Dirección *') ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Tfijo')->label('Plazo Solicitado *') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Naf')->label('Grado de Hipoteca *') ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'Tcelular')->label('Otros Ingresos') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer clearfix text-right">

            <div class="form-group" style="margin:auto;">
                <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
            </div>
        </div>


    </div>

</div>



<?php ActiveForm::end(); ?>