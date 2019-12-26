<?php

/* @var $this yii\web\View */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\jui\DatePicker;

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
        <div class="row">
            <h4 class="text-center"><B><?= Html::encode($this->title) ?></B></h4>
        </div>
        <div class="row">
            <div class="col-md-8"> </div>
            <div class="col-md-4" style="padding-bottom: 4px;">
                <div class="col-md-3"></div>
                <a href="<?= Url::toRoute(['/site/consulta-confirmaciones']) ?>"><img src=" ../web/img/RAP_BUSQUEDA.png" class="img-thumbnail" alt="" style="width: 60px;"></a>
                <a href="<?= Url::toRoute(['/site/confirmaciones']) ?>"><img src="../web/img/RAP_CONFIRM.png" class="img-thumbnail" alt="" style="width: 60px;"></a>
                <a href="#"><img src="../web/img/RAP_PDF.png" class="img-thumbnail" alt="" style="width: 54px;"></a>
                <a href="#"><img src="../web/img/RAP_ACTUALIZAR.png" class="img-thumbnail" alt="" style="width: 61px;"></a>
            </div>
        </div>
    </header>


    <div class="panel panel-default" style="margin-bottom: 10px;">


        <div class="panel-body" style="padding: 10px 10PX 0px 10px;">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary" style="margin-bottom: 10px; ">

                        <div class="panel-heading">
                            Seleccione el Tipo de Busqueda
                        </div>
                        <div class="panel-body" style="padding: 3px 9px 61px 14px; ">
                            <?= $form->field($model, 'chkListBusqueda')->label('')->checkboxList([
                                            1 => 'Número de Confirmación',
                                            2 => 'Número de Identificación',
                                            3 => 'Estatus de Confirmación',
                                            4 => 'Fecha Confirmación',
                                        ]); ?>


                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="panel panel-primary" style="margin-bottom: 10px; ">

                        <div class="panel-heading">
                            Seleccione Parametros de Busqueda
                        </div>
                        <div class="panel-body" style="padding: 5px 6px;">
                            <div class="row">
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'numero_confirmacion') ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'numero_identificacion')->widget(\yii\widgets\MaskedInput::className(), [
                                            'mask' => '9999-9999-99999',
                                        ]) ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'estatus_confirmacion')->dropdownList(
                                            [
                                                1 => 'item 1',
                                                2 => 'item 2'
                                            ],
                                            ['prompt' => 'Seleccione Estatus']
                                        ); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <?= $form->field($model, 'fecha_confirmacion_inicio')->widget(DatePicker::classname(), [

                                            'language' => 'es',
                                            'dateFormat' => 'dd-MM-yyyy',
                                            'clientOptions' => [
                                                'changeMonth' => true,
                                                'changeYear' => true,
                                                'showButtonPanel' => true,
                                            ],
                                            'options' => ['class' => 'form-control', 'autocomplete' => 'off',]
                                        ]); ?>
                                </div>

                                <div class="col-lg-4">
                                    <?= $form->field($model, 'fecha_confirmacion_final')->widget(DatePicker::classname(), [

                                            'language' => 'es',
                                            'dateFormat' => 'dd-MM-yyyy',
                                            'clientOptions' => [
                                                'changeMonth' => true,
                                                'changeYear' => true,
                                                'showButtonPanel' => true,
                                            ],
                                            'options' => ['class' => 'form-control', 'autocomplete' => 'off',]
                                        ]); ?>
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
        <div class="panel-body" style="padding: 10px 10PX 0px 10px;">

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
                                        <th scope="col">Fecha Confirmación</th>
                                        <th scope="col">Analista de Credito RAP</th>
                                        <th scope="col">Estatus Confirmación</th>
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