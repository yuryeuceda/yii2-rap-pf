<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Confirmaciones extends Model
{
    //Ficha de solicitud de Creditos
    public $fecha_solicitud_confirmacion;
    public $numero_confirmacion;
    public $tipo_prestamo;
    // Persona 1
    public $tipo_identificacion;
    public $numero_identificacion;
    public $email_afiliado;
    public $apellido_afiliado;
    public $telefono_celular;
    public $nombre_afiliado;
    public $telefono_fijo;
    //  Persona 2
    public $tipo_identificacion2;
    public $numero_identificacion2;
    public $email_afiliado2;
    public $apellido_afiliado2;
    public $telefono_celular2;
    public $nombre_afiliado2;
    public $telefono_fijo2;
    //Detalle de Empleo
    public $nombre_empresa;
    public $fecha_ingreso;
    public $antieguedad_laboral;
    //Detalle de ingresos del afiliado
    public $salario_nominal;
    public $salario_neto;
    public $otros_ingresos;

    // Condiciones de Credito
    public $destino_credito;
    public $programa_financiamiento;
    public $monto_solicitado;
    public $plazo_solicitado;
    public $tipo_garantia;
    public $grado_hipoteca;
    public $otros_ingresos_condiciones;





    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [
                [
                    'tipo_prestamo', 'tipo_identificacion', 'numero_identificacion', 'email_afiliado', 'apellido_afiliado', 'telefono_celular',
                    'nombre_afiliado', 'tipo_identificacion2', 'numero_identificacion2', 'email_afiliado2', 'apellido_afiliado2',
                    'telefono_celular2', 'nombre_afiliado2', 'salario_nominal', 'nombre_empresa', 'fecha_ingreso', 'salario_neto',
                    'antieguedad_laboral', 'destino_credito', 'programa_financiamiento', 'monto_solicitado', 'plazo_solicitado',
                    'tipo_garantia', 'grado_hipoteca'
                ], 'required'
            ],
            //['email_afiliado', 'email'],
            // ['telefono_celular', 'integer', 'max' => 8],


        ];
    }


    public function attributeLabels()
    {
        return [
            'fecha_solicitud_confirmacion' => 'Fecha de Confirmación:',
            'numero_confirmacion' => 'Numero de Confirmación:',
            'tipo_prestamo' => 'Tipo de Prestamo:',
            'tipo_identificacion' => 'Tipo de Identificación:',
            'numero_identificacion' => 'Numero de Identificación:',
            'email_afiliado' => 'Email:',
            'apellido_afiliado' => 'Apellido de Afiliado:',
            'telefono_celular' => 'Teléfono Celular:',
            'nombre_afiliado' => 'Nombre de Afiliado:',
            'telefono_fijo' => 'Teléfono Fijo:',
            'tipo_identificacion2' => 'Tipo de Identificación:',
            'numero_identificacion2' => 'Numero de Identificación:',
            'email_afiliado2' => 'Email:',
            'apellido_afiliado2' => 'Apellido de Afiliado:',
            'telefono_celular2' => 'Teléfono Celular:',
            'nombre_afiliado2' => 'Nombre de Afiliado:',
            'telefono_fijo2' => 'Teléfono Fijo:',
            'nombre_empresa' => 'Nombre de Empresa:',
            'fecha_ingreso' => 'Fecha de Ingreso:',
            'antieguedad_laboral' => 'Antiguedad Laboral:',
            'salario_nominal' => 'Salario Nominal:',
            'salario_neto' => 'Salario Neto:',
            'otros_ingresos' => 'Otros Ingresos:',
            'destino_credito' => 'Destino del Crédito:',
            'programa_financiamiento' => 'Programa de Financiamiento:',
            'monto_solicitado' => 'Monto Solicitado:',
            'tipo_garantia' => 'Tipo de Garantia/Dirección:',
            'plazo_solicitado' => 'Plazo Solicitado:',
            'grado_hipoteca' => 'Grado de Hipoteca:',
            'otros_ingresos_condiciones' => 'Otros Ingresos:',
        ];
    }
}
