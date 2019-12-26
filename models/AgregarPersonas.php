<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class AgregarPersonas extends Model
{
    public $tipo_identificacion;
    public $numero_identificacion;
    public $email_afiliado;
    public $apellido_afiliado;
    public $telefono_celular;
    public $nombre_afiliado;
    public $telefono_fijo;
    public $index;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [[
                'tipo_identificacion', 'numero_identificacion', 'email_afiliado', 'apellido_afiliado', 'telefono_celular',
                'nombre_afiliado',
            ], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'tipo_identificacion' => 'Tipo de Identificación:',
            'numero_identificacion' => 'No. de Identificación:',
            'email_afiliado' => 'Email:',
            'apellido_afiliado' => 'Apellidos de Afiliado:',
            'telefono_celular' => 'Teléfono Celular:',
            'nombre_afiliado' => 'Nombres de Afiliado:',
            'telefono_fijo' => 'Teléfono Fijo:',
        ];
    }
}
