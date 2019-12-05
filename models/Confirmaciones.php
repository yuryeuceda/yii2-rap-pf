<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class Confirmaciones extends Model
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
            //[['fechaSol', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            //['fechaSol', 'email'],

        ];
    }
}
