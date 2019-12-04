<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ConfirmacionAccesoFinancieroLP extends Model
{

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
}
