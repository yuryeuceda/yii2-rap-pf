<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class EmpleadoIngresos extends Model
{
    public $nombre_empresa;
    public $fecha_ingreso;
    public $antieguedad_laboral;
    public $salario_nominal;
    public $salario_neto;
    public $otros_ingresos;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['salario_nominal', 'nombre_empresa', 'fecha_ingreso', 'salario_neto', 'antieguedad_laboral'], 'required'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'nombre_empresa' => 'Nombre de Empresa:',
            'fecha_ingreso' => 'Fecha de Ingreso:',
            'antieguedad_laboral' => 'Antiguedad Laboral:',
            'salario_nominal' => 'Salario Nominal:',
            'salario_neto' => 'Salario Neto:',
            'otros_ingresos' => 'Otros Ingresos:'
        ];
    }
}
