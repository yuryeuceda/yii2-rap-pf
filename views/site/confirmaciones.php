<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\jui\DatePicker;

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



$this->title = 'SOLICITUD DE CONFIRMACIÓN';
?>
<style>
    div.required label:after {
        content: " *";
        color: red;
    }
</style>


<!-- Comentario de prueba -->
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


    <div class="panel panel-primary" style="margin-bottom: 10px;">

        <div class="panel-heading">
            <h3 class="panel-title">Ficha de solicitud de Creditos</h3>
        </div>
        <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'confirmaciones']); ?>
            <div class="row">
                <div class="col-lg-4">


                    <?= $form->field($model, 'fecha_solicitud_confirmacion')->widget(DatePicker::classname(), [

                        'language' => 'es',
                        'dateFormat' => 'dd-MM-yyyy',
                        'clientOptions' => [
                            'changeMonth' => true,
                            'changeYear' => true,
                            'showButtonPanel' => true,
                            'disabled' => true,
                        ],

                        'options' => ['class' => 'form-control', 'autocomplete' => 'off',]
                    ]); ?>

                </div>
                <div class="col-lg-4">
                    <?= $form->field($model, 'numero_confirmacion')->textInput(['readonly' => true]) ?>

                </div>
                <div class="col-lg-4">

                    <?= $form->field($model, 'tipo_prestamo')->dropdownList(
                        [
                            1 => 'item 1',
                            2 => 'item 2'
                        ],
                        ['prompt' => 'Seleccione Tipo de Prestamo']
                    ) ?>
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
                                <div class="panel-body" style="background-color: ghostwhite;">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">

                                                <?= $form->field($model, 'tipo_identificacion')->dropdownList(
                                                    [
                                                        1 => 'item 1',
                                                        2 => 'item 2'
                                                    ],
                                                    ['prompt' => 'Seleccione Tipo de Identificacion']
                                                ); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'numero_identificacion')->widget(\yii\widgets\MaskedInput::className(), [
                                                    'mask' => '9999-9999-99999',
                                                ]) ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'email_afiliado') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'apellido_afiliado') ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'telefono_celular')->widget(\yii\widgets\MaskedInput::className(), [
                                                    'mask' => '9999-9999',
                                                ]) ?>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'nombre_afiliado') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'telefono_fijo')->widget(\yii\widgets\MaskedInput::className(), [
                                                    'mask' => '9999-9999',
                                                ]) ?>
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
                                                <?= $form->field($model, 'tipo_identificacion2')->dropdownList(
                                                    [
                                                        1 => 'item 1',
                                                        2 => 'item 2'
                                                    ],
                                                    ['prompt' => 'Seleccione Tipo de Identificación']
                                                ); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'numero_identificacion2') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'email_afiliado2') ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'apellido_afiliado2') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'telefono_celular2')->widget(\yii\widgets\MaskedInput::className(), [
                                                    'mask' => '9999-9999',
                                                ]) ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'nombre_afiliado2') ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="">
                                                <?= $form->field($model, 'telefono_fijo2')->widget(\yii\widgets\MaskedInput::className(), [
                                                    'mask' => '9999-9999',
                                                ]) ?>
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
                                            <?= $form->field($model, 'nombre_empresa') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">

                                    <?= $form->field($model, 'fecha_ingreso')->widget(DatePicker::classname(), [

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
                                    <div class="form-group">

                                        <div class="">
                                            <?= $form->field($model, 'antieguedad_laboral') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="">
                                        <?= $form->field($model, 'salario_nominal')->widget(\yii\widgets\MaskedInput::className(), [
                                            'clientOptions' => [
                                                'alias' => 'decimal',
                                                'groupSeparator' => ',',
                                                'autoGroup' => true
                                            ]
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="">
                                        <?= $form->field($model, 'salario_neto')->widget(\yii\widgets\MaskedInput::className(), [
                                            'clientOptions' => [
                                                'alias' => 'decimal',
                                                'groupSeparator' => ',',
                                                'autoGroup' => true
                                            ]
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="">
                                        <?= $form->field($model, 'otros_ingresos')->widget(\yii\widgets\MaskedInput::className(), [
                                            'clientOptions' => [
                                                'alias' => 'decimal',
                                                'groupSeparator' => ',',
                                                'autoGroup' => true
                                            ]
                                        ]) ?>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-10"></div>
                        <div class="col-md-2">
                            <div class="col-md-1"></div>
                            <a class="btn btn-success" style="width: 60px;"><i class="glyphicon glyphicon-plus"></i></a>
                            <a class="btn btn-danger" style="width: 60px;"><i class="glyphicon glyphicon-minus"></i></a>
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
                                        <?= $form->field($model, 'destino_credito')->dropdownList(
                                            [
                                                1 => 'item 1',
                                                2 => 'item 2'
                                            ],
                                            ['prompt' => 'Seleccione Destino del Crédito']
                                        ); ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">

                                        <?= $form->field($model, 'programa_financiamiento')->dropdownList(
                                            [
                                                1 => 'item 1',
                                                2 => 'item 2'
                                            ],
                                            ['prompt' => 'Seleccione Programa de Financiamiento']
                                        ); ?>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'monto_solicitado')->widget(\yii\widgets\MaskedInput::className(), [
                                            'clientOptions' => [
                                                'alias' => 'decimal',
                                                'groupSeparator' => ',',
                                                'autoGroup' => true
                                            ]
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">

                                        <?= $form->field($model, 'tipo_garantia')->dropdownList(
                                            [
                                                1 => 'item 1',
                                                2 => 'item 2'
                                            ],
                                            ['prompt' => 'Seleccione Tipo de Garantia/Dirección']
                                        ); ?>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'plazo_solicitado') ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'grado_hipoteca')->dropdownList(
                                            [
                                                1 => 'item 1',
                                                2 => 'item 2'
                                            ],
                                            ['prompt' => 'Seleccione Grado de Hipoteca']
                                        ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <?= $form->field($model, 'otros_ingresos_condiciones')->widget(\yii\widgets\MaskedInput::className(), [
                                            'clientOptions' => [
                                                'alias' => 'decimal',
                                                'groupSeparator' => ',',
                                                'autoGroup' => true
                                            ]
                                        ]) ?>
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
        <?php /** Yii::$app->session->setFlash('warning', 'Atención Existen Campos Vacíos'); */ ?>
        <?php /** echo \yii2mod\notify\BootstrapNotify::widget(); */ ?>

    </div>

</div>



<?php ActiveForm::end(); ?>