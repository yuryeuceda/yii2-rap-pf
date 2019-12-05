<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'CONSULTA DE CONFIRMACIONES';

$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [

        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
            'offset' => 'col-md-12',
            'error' => '',
            'hint' => '',
        ],
    ],
]);


?>

<div class="container">
    <header style="margin:auto;">
        <h4 class="text-center"><B><?= Html::encode($this->title) ?></B></h4>
        <img src="" alt="">
    </header>


    <div class="panel panel-default" style="margin-bottom: 10px;">

        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary" style="margin-bottom: 10px;">

                        <div class="panel-heading">
                            Seleccione el Tipo de Busqueda
                        </div>
                        <div class="panel-body">

                            <?= $form->field($model, 'CHKnumeroSolicitud')->checkbox()->label('Número de Solicitud') ?>
                            <?= $form->field($model, 'CHKnumeroIdentificacion')->checkbox()->label('Número de Identificacion') ?>
                            <?= $form->field($model, 'CHKestatusSolicitud')->checkbox()->label('Estatus de Solicitud') ?>
                            <?= $form->field($model, 'CHKfechaSolicitud')->checkbox()->label('Fecha Solicitud') ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary" style="margin-bottom: 10px;">

                        <div class="panel-heading">
                            Seleccione Parametros de Busqueda
                        </div>
                        <div class="panel-body">
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'numeroSolicitud')->label('Numero Solicitud') ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'numeroIdentificacion')->label('Numero Identificacion') ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'estatusSolicitud')->label('Estatus Solicitud') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <?= $form->field($model, 'fechaSolicitudInicio')->textInput()->label('Fecha Inicio') ?>
                                </div>
                                <div class="col-md-6">
                                    <?= $form->field($model, 'fechaSolicitudFinal')->label('Fecha Final') ?>
                                </div>

                            </div>

                        </div>
                        <div class="panel-footer text-center">
                            <div class="form-group" style="margin:auto;">
                                <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>
</div>