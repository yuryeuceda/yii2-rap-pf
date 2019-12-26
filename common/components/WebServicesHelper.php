<?php

/*
 * Helper para llamados de servicios web
 *
 * Se tienen todos los llamados y funciones para procesamiento de los mismos
 * como cargas de modelos, sesiones, etc.
 * Cada función lleva el nombre del servicio web asociado.
 * IMPORTANTE: los nombres de los índices de los párametros deben coincidir con los nombres de los parámetros del
  servicio web
 */

namespace common\components;

use Yii;
use yii\base\Component;
use common\models\UserData;
use frontend\models\EncryptionData;

class WebServicesHelper extends Component
{
    /*
     * Función para cargar variables globales de un usuario
     *
     * Se carga un objeto de profile para mostrar datos en el perfil y evitar
     * tener que hacer un llamado a futuro.
     * Además se almacena el rol del usuario facilitado por el WS.
     * A está función sólo se llega cuando el WS válida que las credenciales sean correctas
     * y sólo en ese caso se hace el login.
     *
     * Se genera un token único para cada sesión, unicamente acá se genera.
     * el resto de acciones deben consultar el token por tema de validaciones de tiempo.
     *
     */

    public static function obtenerNummeroConfirmacion()
    {
        $params = [
            'num-id' => $identidad
        ];

        $dom = XmlHelper::createBaseXML(
            'WSGetInfoGral',
            'WSActualizacionDatos'
        );

        $request = XmlHelper::setParams($dom, $params, Yii::$app->params['listNodes']['body']);

        $xmlDoc = XmlHelper::callService($request);

        if ($xmlDoc->header->code != Yii::$app->params['listWsMessageCode']['success']) {
            return $xmlDoc->header->msg;
        } else { //Valida si viene cargado el tag de error, sino viene cargado carga la sesión.
            $ele = $xmlDoc->body->children();

            $json = json_encode($ele->{'cons-dtos-grales'}->children());
            $array = json_decode($json, TRUE);

            return $array;
        }
    }
}
