<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'CONSULTA DE CONFIRMACIONES';

$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [

        'horizontalCssClasses' => [
            'label' => 'col-sm-10',
            'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-12',
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


        <div class="panel-body">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary" style="margin-bottom: 10px;">

                        <div class="panel-heading">
                            Seleccione el Tipo de Busqueda
                        </div>
                        <div class="panel-body" style="padding: 3px 9px 61px 14px;">
                            <?= $form->field($model, 'chkListBusqueda')->label('')->checkboxList([
                                1 => 'Número de Solicitud',
                                2 => 'Número de Identificación',
                                3 => 'Estatus de Solicitud',
                                4 => 'Fecha Solicitud',
                            ]); ?>


                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary" style="margin-bottom: 10px;">

                        <div class="panel-heading">
                            Seleccione Parametros de Busqueda
                        </div>
                        <div class="panel-body" style="padding: 2px 6px;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'numeroSolicitud')->label('Numero Solicitud') ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'numeroIdentificacion')->label('Numero Identificacion') ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'estatusSolicitud')->label('Estatus Solicitud') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'fechaSolicitudInicio')->textInput()->label('Fecha Inicio') ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'fechaSolicitudFinal')->label('Fecha Final') ?>
                                </div>

                            </div>

                        </div>
                        <div class="panel-footer text-center" style="padding: 4px 15px;">
                            <div class="form-group" style="margin:auto;">
                                <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="panel panel-default" style="margin-bottom: 10px;">
        <div class="panel-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary" style="margin-bottom: 10px;">

                        <div class="panel-heading">
                            Consulta de Confirmaciones de Acceso a Crédito a Largo Plazo
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Número de Confirmación</th>
                                        <th scope="col">Tipo de Financiamiento</th>
                                        <th scope="col">Tipo de Crédito</th>
                                        <th scope="col">Fecha Solicitud</th>
                                        <th scope="col">Analista de Credito RAP</th>
                                        <th scope="col">Estatus Solicitud</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><i class="glyphicon glyphicon-eye-open">
                                                <i class="glyphicon glyphicon-comment">
                                                    <i class="glyphicon glyphicon-copy"></i></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><i class="glyphicon glyphicon-eye-open">
                                                <i class="glyphicon glyphicon-comment">
                                                    <i class="glyphicon glyphicon-copy"></i></td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>