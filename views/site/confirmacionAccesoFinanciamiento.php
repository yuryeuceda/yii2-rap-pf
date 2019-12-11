<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'CONFIRMACIÓN DE ACCESO A FINANCIAMIENTO DE LARGO PLAZO';

?>



<div class="container">
    <header style="margin:auto;">
        <div class="row">
            <h4 class="text-center"><B><?= Html::encode($this->title) ?></B></h4>
        </div>
        <div class="row">
            <div class="col-md-8"> </div>
            <div class="col-md-4" style="padding-bottom: 4px;">
                <div class="col-md-5"></div>
                <a href="<?= Url::toRoute(['/site/consulta-confirmaciones']) ?>"><img src=" ../web/img/RAP_CONFIRM.png" class="img-thumbnail" alt="" style="width: 60px;"></a>
                <a href="#"><img src="../web/img/RAP_PDF.png" class="img-thumbnail" alt="" style="width: 54px;"></a>
                <a href="<?= Url::toRoute(['/site/ingreso-mensajes']) ?>"><img src="../web/img/RAP_MENSAJES.png" class="img-thumbnail" alt="" style="width: 61px;"></a>

            </div>
        </div>
    </header>


    <div class="panel panel-info" style="margin-bottom: 10px;">

        <div class="panel-heading">
            <h4 class="panel-title text-center" style="margin-top: 0px;">RÉGIMEN DE APORTACIONES PRIVADAS</h4>
            <h6 class="text-right" style="margin-top: 0px; margin-bottom: 0px;"><b>JZAVALA</b></h6>
            <h5 class="text-center" style="margin-bottom: 0px; margin-top: 0px;">CONFIRMACIÓN DE ACCESO A FINANCIAMIENTO DE LARGO PLAZO</h5>
        </div>
        <div class="panel-body">
            <div class="panel-heading" style="background-color:#fd642b; padding: 2px 40px;">

                <h5 class="text-right" style="color:white;"><b>Válida por:</b> </h5>
                <h4 class="panel-title" style="color:white;"><b>NÚMERO DE CONFIRMACIÓN:</b> </h4>
                <h5 class="text-right" style="color:white;"><b>Moneda:</b> </h5>

            </div>
            <div class="panel panel-primary" style="margin-bottom: 0px; border-radius: 0px; border-color:#ddd;">

                <div class="panel-heading" style="border-radius: 0px;">
                    <h3 class="panel-title text-center" style="color:white;"><b>Tipo de Solicitud de Crédito</b></h3>
                </div>
                <div class="panel-body" style="padding-bottom: 0px; border-radius: 0px;">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Tipo de plan:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Plan de financiamiento:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Moneda:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Tipo de crédito:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Fecha de Ingreso de la Solicitud:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="panel panel-default" style="margin-bottom: 0px; border-radius: 0px;">
                <div class=" panel-heading" style="background-color:#fd642b; border-radius: 0px;">
                    <h3 class="panel-title text-center" style="color:white;"><b>Datos del Afiliado</b></h3>
                </div>
                <div class="panel-body" style="padding-bottom: 0px; border-radius: 0px;">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Número de identificación:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Nombre:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Empleador:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">
                                        Ingreso según el Intermediario Financiero:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary" style="margin-bottom: 0px; border-radius: 0px; border-color:#ddd;">
                <div class=" panel-heading" style="margin-bottom: 0px; border-radius: 0px;">
                    <h3 class="panel-title text-center" style="color:white;"><b>Acceso a Financiamiento</b></h3>

                </div>
                <div class="panel-body" style="padding-bottom: 0px; border-radius: 0px;">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Aplica a Préstamo:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Destino:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Monto al que aplica:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Plazo:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Cuota Préstamos:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Tasa interés:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Cuota:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">RCI:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">RCI Despues de Cuotas Préstamos Vigentes:</td>
                                    <td style="padding: 3px;">$100</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <div class="panel panel-default" style="margin-bottom: 0px; border-radius: 0px;">
                <div class=" panel-heading" style="background-color:#fd642b; border-radius: 0px;">
                    <h3 class="panel-title text-center" style="color:white;"><b>Información Para el Intermediario Financiero</b></h3>

                </div>
                <div class="panel-body" style="border-radius: 0px;">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Fecha:</td>
                                    <td style="padding: 3px;">Savings</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Intermediario financiero:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Oficial Intermediario financiero:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-bordered">
                                <tr>
                                    <td style="padding: 3px;">Valida Desde:</td>
                                    <td style="padding: 3px;">Hasta: </td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Analisata RAP:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                                <tr>
                                    <td style="padding: 3px;">Correo Electrónico:</td>
                                    <td style="padding: 3px;">RAP BONO 100</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-primary" style="margin-bottom: 0px; border-radius: 0px; border-color:#ddd;">
                <div class="panel-heading" style="border-radius: 0px;">
                    <h3 class="panel-title text-center" style="color:white;"><b>Observaciones</b></h3>

                </div>
                <div class="panel-body" style="border-radius: 0px;">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam quo id
                    quasi ducimus, officia quas veritatis distinctio error voluptate
                    culpa explicabo dolores quia ut, nesciunt vero quis alias eos corrupti?
                </div>
            </div>

        </div>
    </div>
</div>