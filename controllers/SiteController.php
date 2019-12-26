<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\helpers\Html;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Confirmaciones;
use app\models\EmpleadoIngresos;
use app\models\Model;
use app\models\ConfirmacionAccesoFinanciamiento;
use app\models\ConsultaConfirmaciones;
use app\models\MensajeriaConfirmaciones;
use app\models\IngresoMensajes;
use app\models\AgregarPersonas;




class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionConfirmaciones()
    {
        $model = new Confirmaciones();
        $AgregarPersona = [new AgregarPersonas];
        $EmpleadoIngresos = [[new EmpleadoIngresos]];



        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $EmpleadoIngresos = Model::createMultiple(EmpleadoIngresos::classname());
            Model::loadMultiple($EmpleadoIngresos, Yii::$app->request->post());

            // validate all models
            $valid = $model->validate();
            $valid = Model::validateMultiple($EmpleadoIngresos) && $valid;
        }
        $client = new \mongosoft\soapclient\Client([
            'url' => 'http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL',
        ]);



        return $this->render(
            'confirmaciones',
            [

                'model' =>  $model, 'client' =>  $client, 'EmpleadoIngresos' => (empty($EmpleadoIngresos)) ? [[new EmpleadoIngresos]] : $EmpleadoIngresos,
                'AgregarPersonas' => (empty($AgregarPersona)) ? [new AgregarPersonas] : $AgregarPersona
            ]
        );
    }


    public function actionConfirmacionAccesoFinanciamiento()
    {
        $model = new ConfirmacionAccesoFinanciamiento();
        return $this->render('confirmacionAccesoFinanciamiento', ['model' =>  $model]);
    }

    public function actionConsultaConfirmaciones()
    {
        $model = new ConsultaConfirmaciones();
        return $this->render('consultaConfirmaciones', ['model' =>  $model]);
    }

    public function actionMensajeriaConfirmaciones()
    {
        $model = new MensajeriaConfirmaciones();
        return $this->render('mensajeriaConfirmaciones', ['model' =>  $model]);
    }

    public function actionIngresoMensajes()
    {
        $model = new IngresoMensajes();
        return $this->render('ingresoMensajes', ['model' =>  $model]);
    }

    public function actionLogon()
    {
        $model = new LoginForm();
        return $this->render('loginn', [
            'model' => $model,
        ]);
    }


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
