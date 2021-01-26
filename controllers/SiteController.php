<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
use yii\db\ActiveRecord;
use app\models\SignUp;

class SiteController extends Controller
{
     public $layout = 'main';
    /**
     * {@inheritdoc}
     */
            function behaviors()
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
    public function actionAnim()
    {
        return $this->render('anim');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionSeria()
    {
        return $this->render('seria');
    }

###Registration###
public function actionReg(){
    $model = new SignUp();
    
        if(isset($_POST['SignUp'])){
            $model->attributes =  Yii::$app->request->post('SignUp');
            if($model->validate() && $model->signup()){
               
                // $model->signup();
                return $this->redirect(['/site/login']);
            }
        }
    
    
    return $this->render('reg', ['model' => $model]);
}
###Страница с сериалом###
public function actionWatch()
    {
        return $this->render('watch');
    }
###Страница новостей###
public function actionNewspaper()
    {
        return $this->render('newspaper');
    }
###Страница анимаций###
public function actionAnimation()
    {
        return $this->render('animation');
    }



}

