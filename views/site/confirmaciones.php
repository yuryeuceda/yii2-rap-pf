<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ListView;
use kartik\select2\Select2;

use yii\helpers\Url;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\jui\DatePicker;
use app\models\Confirmaciones;




$this->title = 'SOLICITUD DE CONFIRMACIÓN';

$js = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .address").each(function(indexPersona) {
        jQuery(this).html("Persona: " + (indexPersona + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .address").each(function(indexPersona) {
        jQuery(this).html("Persona: " + (indexPersona + 1))
    });
});



';


$this->registerJs($js);

?>
<style>
    div.required label:after {
        content: " *";
        color: red;
    }
</style>


<!-- Comentario de prueba -->
<div class="container" style="width: 100%">

    <?php $form = ActiveForm::begin(['id' => 'Confirmaciones']); ?>
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
        <div class="panel-body" style="padding-bottom: 0px;">

            <div class="row">
                <div class="col-lg-4">

                    <?= $form->field($model, 'fecha_solicitud_confirmacion')->textInput(['value' => date("d/m/Y"), 'readonly' => true]); ?>

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

    <style>
        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:hover,
        .nav-tabs>li.active>a:focus {
            background-color: #ff9a20;
            border: 0px;
            border-radius: 0px;
        }

        .nav-tabs>li>a {
            margin-right: 0px;
            line-height: 1.42857143;
            border: 1px solid transparent;
            border-radius: 0px 0px 0 0;
        }
    </style>

    <div class="panel panel-primary">
        <div class="panel-heading" style=" background-color:white; color:black; height:50px; border-bottom-color: transparent;">
            <ul class="nav nav-tabs" style="border-bottom: 0px solid #ddd;">
                <li class="active"><a data-toggle="tab" href="#DatosGenerales"><b>Datos Generales del Afiliado</b></a></li>
                <li><a data-toggle="tab" href="#condicionesCredito"><b>Condiciones del Credito Solicitadas</b></a></li>
            </ul>

        </div>

        <div class="panel-body" style="padding-top: 0px;">
            <div class="tab-content">

                <div id="DatosGenerales" class="tab-pane fade in active">
                    <?php DynamicFormWidget::begin([
                        'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                        'widgetBody' => '.container-items-Personas', // required: css class selector
                        'widgetItem' => '.itemPersonas', // required: css class
                        'limit' => 3, // the maximum times, an element can be cloned (default 999)
                        'min' => 1, // 0 or 1 (default 1)
                        'insertButton' => '.agregar-persona', // css class
                        'deleteButton' => '.remove-persona', // css class
                        'model' => $AgregarPersonas[0],
                        'formId' => 'Confirmaciones',
                        'formFields' => [
                            'tipo_identificacion',
                            'numero_identificacion',
                            'nombre_afiliado',
                            'apellido_afiliado',
                            'email_afiliado',
                            'telefono_fijo',
                            'telefono_celular',
                        ],
                    ]);
                    ?>
                    <div class="panel-heading" style="background: #ff9a20; border-radius:0px;padding-bottom: 0px; padding-top: 1px;">
                        <div class="row">
                            <div class="col-md-4" style="padding: 8px 15px 4px 15px;">
                                Ingrese información fidedigna de la persona solicitante
                            </div>
                        </div>

                    </div>

                    <div class="container-items-Personas">

                        <!-- widgetContainer -->
                        <?php foreach ($AgregarPersonas as $indexPersona => $Persona) : ?>

                            <?php $js = '$("#agregarpersonas-' . $indexPersona . '-tipo_identificacion").change(
                            function() {
                            if( $(this).find(":selected").val() == 1 ) {
                            $("#agregarpersonas-' . $indexPersona . '-numero_identificacion").inputmask({"mask": "9999-9999-99999"});
                            console.log("' . $indexPersona . ' ");
                            } else if( $(this).find(":selected").val() == 2 ) {
                                console.log("' . $indexPersona . ' ");
                            $("#agregarpersonas-' . $indexPersona . '-numero_identificacion").inputmask({"mask": "A999999"});
                            }
                            }
                            );';
                            $this->registerJs($js);
                            ?>

                            <div class="itemPersonas">
                                <div class="panel panel-info" style="border-width: medium; border-color: #aaaaaa; border-radius:0px;">
                                    <div class="panel-heading" style="padding: 0px 0px;">
                                        <div class="panel-title">
                                            <div class="col-md-10">
                                                <h4 class="address">Persona: <?= ($indexPersona + 1) ?> </h4>
                                            </div>
                                            <div class="col-md-2 ">
                                                <div class="text-right">

                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="panel-body" style="padding-bottom: 0px;">
                                        <!--<div class="tab-content">-->

                                        <div class="row">
                                            <div class="col-md-12">

                                                <div class="panel panel-info">
                                                    <div class="panel-body" style="background-color: ghostwhite; padding-bottom: 1px;">
                                                        <div class="col-md-8" style="padding-right: 0px; padding-left: 0px;">
                                                            <div class="col-lg-6">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]tipo_identificacion")->dropdownList(
                                                                        [
                                                                            1 => 'Cedula',
                                                                            2 => 'Pasaporte'
                                                                        ],
                                                                        ['prompt' => 'Seleccione Tipo de Identificación']
                                                                    ) ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]numero_identificacion") ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]nombre_afiliado") ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]apellido_afiliado") ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4" style="padding-right: 0px; padding-left: 0px;">

                                                            <div class="col-lg-12">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]email_afiliado") ?>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]telefono_celular")->widget(\yii\widgets\MaskedInput::className(), [
                                                                        'mask' => '9999-9999',
                                                                    ]) ?>

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="">
                                                                    <?= $form->field($Persona, "[{$indexPersona}]telefono_fijo")->widget(\yii\widgets\MaskedInput::className(), [
                                                                        'mask' => '9999-9999',
                                                                    ]) ?>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <?= $this->render('empleosConfirmaciones', [
                                            'form' => $form,
                                            'indexPersona' => $indexPersona,
                                            'EmpleadoIngresos' => $EmpleadoIngresos[$indexPersona],
                                        ]) ?>

                                    </div>

                                </div>


                                <button type="button" class="agregar-persona btn btn-success btn-md"><i class="glyphicon glyphicon-plus"></i></button>
                                <button type="button" class="remove-persona btn btn-danger btn-md"><i class="glyphicon glyphicon-minus"></i></button>


                            </div>
                        <?php endforeach; ?>

                    </div>


                    <!-- </div>-->
                    <?php DynamicFormWidget::end(); ?>
                </div>

                <div id="condicionesCredito" class="tab-pane fade">
                    <div class="panel-heading" style="background: #ff9a20; border-radius:0px;padding-bottom: 0px; padding-top: 1px;">
                        <div class="row">
                            <div class="col-md-4" style="padding: 8px 15px 4px 15px;">
                                Ingrese información fidedigna de la persona solicitante
                            </div>
                        </div>

                    </div>
                    <div class="panel panel-primary" style="margin-bottom: 0px; border-width: medium;border-color: #aaaaaa;border-radius: 0px;">
                        <div class="panel-heading" style="border-radius: 0px;">Condiciones de Credito</div>
                        <div class="panel-body" style=" background-color: ghostwhite; ">
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
    </div>
    <div class="panel-footer clearfix text-right">

        <div class="form-group" style="margin:auto;">
            <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'btnEnviarConfirmacion']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>