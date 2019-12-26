<?php

/*
 * Helper creado para manejo servicios web
 *
 */

namespace common\components;

use Yii;
use yii\base\Component;

class XmlHelper extends Component {

    //constantes para valores de los servicios web
    const APP = 'PORTALRAP';
    const SERV = 'wsPortal';
    const UID = 'PORTAL';

    /*
     * Función para crear el request del servicio web.
     *
     * La función crea una estructura XML, la estructura se divide en las siguientes "etiquetas"
     *
     * <request>
     *         <Header>
     *                  Estructura fija que sólo cambia valores.
     *                  Los campos "serv" y "app" son campos que se mantienen sin importar el SW.
     *         </Header>
     *
     *         <Body>
     *                  Estructura dinámica que se crea de acuerdo a la cantidad de valores que
     *                  se reciban en el parámetro "$paramsBody".
     *         </Body>
     * </request>
     *
     * Para realizar un request se utiliza el formato DOMDocument y para procesar la respuesta se hace mediante
     * SimpleXML.
     *      */

    public static function createBaseXML($oper, $serv = null) {

        $dom = new \DOMDocument();
		
		if(empty($serv)) $serv = self::SERV;

        //arreglo de parámetros para el header del servicio web
        $paramsHeader = [
            'getid' => WebServicesHelper::getGetId(),
            'oper' => $oper,
            'serv' => $serv,
            'date' => FormatHelper::getCurrentDate(),
            'time' => time(),
            'uid' => self::UID,
            'app' => self::APP
        ];

        //creación de los elementos base para el objeto XML
        $request = $dom->createElement(Yii::$app->params['listNodes']['request']);
        $dom->appendChild($request);

        $header = $dom->createElement(Yii::$app->params['listNodes']['header']);
        $request->appendChild($header);

        $body = $dom->createElement(Yii::$app->params['listNodes']['body']);
        $request->appendChild($body);

        $dom->saveXML();

        self::setParams($dom, $paramsHeader, Yii::$app->params['listNodes']['header']);
        return $dom;
    }

    public static function setParams($dom, $params, $parentElement) {

        //obtiene el nodo al que se desean agregar los parámetros enviados.
        $element = $dom->getElementsByTagName($parentElement)->item(0);

        //Se crean los parámetros del body dependiendo de lo que se envíe por parámetro
        foreach ($params as $key => $value) {
            $key = $dom->createElement($key, $value);
            $element->appendChild($key);
        }
        $dom->saveXML();

        return $dom;
    }

    public static function callService($request) {
        /*
          Carga de solicitud para el servicio web
         *
         * El documento XML se pasa en forma de string mediante un ->saveXML()
         */
        $params = [
            'payload' => $request->saveXML()
        ];

        $wsdl = Yii::$app->params['urlWebServices'];

        $client = new \SoapClient($wsdl, [
            //Activa el seguimiento de la petición para que los fallos puedan ser trazados
            'trace' => TRUE,
            //es un valor boleano que define si se lanzan excepciones,
            //se define en false para evitar que interrumpa el flujo del proceso
            'exceptions' => FALSE
        ]);

        //se obtiene la respuesta del servicio web de acuerdo a los parámetros seteados
        $result = $client->process($params);

        //devuelve la respuesta en formato SimpleXML para su manipulación.
        return simplexml_load_string($result->return);
    }

}
