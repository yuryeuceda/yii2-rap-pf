<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ConsultaConfirmaciones extends Model
{
    public $chkListBusqueda;
    /* public $CHKnumeroIdentificacion;
    public $CHKestatusSolicitud;
    public $CHKfechaSolicitud; */

    public $numero_solicitud;
    public $numero_identificacion;
    public $estatus_solicitud;
    public $fecha_solicitud_inicio;
    public $fecha_solicitud_final;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            //[['fechaSol', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            //['fechaSol', 'email'],

        ];
    }
}
