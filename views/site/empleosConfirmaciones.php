<?php

use wbraganca\dynamicform\DynamicFormWidget;
use yii\jui\DatePicker;




$this->title = 'SOLICITUD DE CONFIRMACIÓN';

$js2 = '
jQuery(".dynamicform_wrapper").on("afterInsert", function(e, item) {
    jQuery(".dynamicform_wrapper .panel-title-address2").each(function(indexEmpleo) {
        jQuery(this).html("Información de Empleo del Afiliado: " + (indexEmpleo + 1))
    });
});

jQuery(".dynamicform_wrapper").on("afterDelete", function(e) {
    jQuery(".dynamicform_wrapper .panel-title-address2").each(function(indexEmpleo) {
        jQuery(this).html("Información de Empleo del Afiliado: " + (indexEmpleo + 1))
    });
});

';


$this->registerJs($js2);


?>
<style>
    div.required label:after {
        content: " *";
        color: red;
    }
</style>

<?php DynamicFormWidget::begin([
    'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
    'widgetBody' => '.container-items-DE', // required: css class selector
    'widgetItem' => '.item-empleos', // required: css class
    'limit' => 3, // the maximum times, an element can be cloned (default 999)
    'min' => 1, // 0 or 1 (default 1)
    'insertButton' => '.add-item', // css class
    'deleteButton' => '.remove-item', // css class
    'model' => $EmpleadoIngresos[0],
    'formId' => 'Confirmaciones',
    'formFields' => [
        'nombre_empresa',
        'fecha_ingreso',
        'antieguedad_laboral',
        'salario_nominal',
        'salario_neto',
        'otros_ingresos',
    ],
]);
?>

<div class="row">

    <div class="container-items-DE">
        <div class="item-empleos col-md-12">

            <!-- widgetContainer -->
            <?php foreach ($EmpleadoIngresos as $indexEmpleo  => $EmpleadoIngreso) : ?>

                <div class="panel panel-default">
                    <!-- widgetBody -->
                    <div class="panel-heading" style="padding: 0px 0px;">
                        <div class="col-md-10">
                            <h4 style="margin-top: 5px; margin-bottom: 5px;" class="panel-title-address2">Información de Empleo del Afiliado: <?= ($indexEmpleo + 1) ?> </h4>
                        </div>
                        <div class="col-md-2 ">
                            <div class="text-right">
                                <h4 style="margin-top: 5px; margin-bottom: 5px;">
                                    <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                                    <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button></h4>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body" style="padding-bottom: 2px; background-color: ghostwhite;">
                        <div class="">
                            <div class="col-lg-4">
                                <?= $form->field($EmpleadoIngreso, "[{$indexEmpleo}][{$indexPersona}]nombre_empresa")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($EmpleadoIngreso, "[{$indexEmpleo}][{$indexPersona}]fecha_ingreso")->widget(DatePicker::classname(), [

                                    'language' => 'es',
                                    'dateFormat' => 'dd-MM-yyyy',
                                    'clientOptions' => [
                                        'changeMonth' => true,
                                        'changeYear' => true,
                                        'showButtonPanel' => true,

                                    ],

                                    'options' => ['class' => 'form-control', 'autocomplete' => 'off',]
                                ])->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($EmpleadoIngreso, "[{$indexEmpleo}][{$indexPersona}]antieguedad_laboral")->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="col-12">
                                <div class="panel-heading">
                                    <div class="text-center">
                                        Detalle de Ingresos del Afiliado
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($EmpleadoIngreso, "[{$indexEmpleo}][{$indexPersona}]salario_nominal")->widget(\yii\widgets\MaskedInput::className(), [
                                        'clientOptions' => [
                                            'alias' => 'decimal',
                                            'groupSeparator' => ',',
                                            'autoGroup' => true
                                        ]
                                    ])->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($EmpleadoIngreso, "[{$indexEmpleo}][{$indexPersona}]salario_neto")->widget(\yii\widgets\MaskedInput::className(), [
                                        'clientOptions' => [
                                            'alias' => 'decimal',
                                            'groupSeparator' => ',',
                                            'autoGroup' => true
                                        ]
                                    ])->textInput(['maxlength' => true]) ?>
                                </div>
                                <div class="col-lg-4">
                                    <?= $form->field($EmpleadoIngreso, "[{$indexEmpleo}][{$indexPersona}]otros_ingresos")->widget(\yii\widgets\MaskedInput::className(), [
                                        'clientOptions' => [
                                            'alias' => 'decimal',
                                            'groupSeparator' => ',',
                                            'autoGroup' => true
                                        ]
                                    ])->textInput(['maxlength' => true]) ?>
                                </div>
                            </div>

                        </div><!-- .row -->
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

    </div>
</div>
<?php DynamicFormWidget::end(); ?>