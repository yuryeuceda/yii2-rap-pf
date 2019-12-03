<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class pantallas extends Model
{
    public $fechaSol;
    public $numConf;
    public $Tpres;

    public $Tid;
    public $Nid;
    public $Naf;
    public $Aaf;
    public $Tcelular;
    public $Tfijo;
    public $emailA;



    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['fechaSol', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['fechaSol', 'email'],

        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'fechaSol' => 'Fecha de Solicitud',
            'numConf' => 'Numero de Confirmacion',
            'Tpres' => 'Tipo de Prestamo *',

            'Tid' => 'Tipo de Identificacion *',
            'Nid' => 'Numero de Identificacion *',
            'Naf' => 'Nombre de Afiliado *',
            'Aaf' => 'Apellido de Afiliado *',
            'Tcelular' => 'Telefono Celular *',
            'Tfijo' => 'Telefono fijo',
            'emailA' => 'Email *',
        ];
    }
}
