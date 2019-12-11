<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'INGRESO DE MENSAJES';

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

        <div class="row">
            <h4 class="text-center"><B><?= Html::encode($this->title) ?></B></h4>
        </div>
        <div class="row">
            <div class="col-md-10"> </div>
            <div class="col-md-2" style="padding-bottom: 4px;">
                <a href="<?= Url::toRoute(['/site/consulta-confirmaciones']) ?>"><img src=" ../web/img/RAP_BUSQUEDA.png" class="img-thumbnail" alt="Consulta de Confirmaciones" style="width: 60px;"></a>
                <a href="<?= Url::toRoute(['/site/confirmaciones']) ?>"><img src="../web/img/RAP_CONFIRM.png" class="img-thumbnail" alt="" style="width: 60px;"></a>
            </div>
        </div>
    </header>
    <div class="row">


        <div class=" panel panel-primary" style="margin-bottom: 10px;">

            <div class="panel-heading">
                <b>Detalle de Mensajes Intercambiados por Confirmación</b>
            </div>
            <div class="panel-body" style="padding: 2px 6px;">
                <div class="card-heading">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Número de Confirmación:</th>
                                    <th>CFR00013</th>
                                </tr>
                                <tr>
                                    <th>Tipo de Financiamiento:</th>
                                    <th>BONO CONVIVIENDA</th>
                                </tr>
                                <tr>
                                    <th>Estatus:</th>
                                    <th>EN ANÁLISIS</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Número de Mensaje:</th>
                                    <th>00000013</th>
                                </tr>
                                <tr>
                                    <th>Usuario:</th>
                                    <th>Yury</th>
                                </tr>
                                <tr>
                                    <th>Fecha Consulta:</th>
                                    <th>05/10/2019 13:10:45</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <style>
                    textarea {
                        resize: none;
                    }
                </style>
                <div class="card-body">
                    <?= $form->field($model, 'mensajeDescripcion')->textarea(['rows' => '6', 'type' => 'text', 'maxlength' => 4000])->label('Detalle del Mensaje:') ?>
                </div>


            </div>
            <div class="panel-footer text-right" style="padding: 4px 15px;">
                <div class="form-group" style="margin:auto;">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
                    <?= Html::submitButton('Cancelar', ['class' => 'btn btn-warning', 'name' => 'btnEnviarConfirmacion']) ?>
                </div>
            </div>

        </div>

    </div>
</div>