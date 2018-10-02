<?php

namespace app\controllers;

use app\common\BaseController;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Response;

class SiteController extends BaseController
{
	/**
	 * {@inheritdoc}
	 */
	public function behaviors(){
		return [
			'access' => [
				'class' => AccessControl::class,
				'only'  => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow'   => true,
						'roles'   => ['@'],
					],
				],
			],
			'verbs'  => [
				'class'   => VerbFilter::class,
				'actions' => [
					'logout' => ['post', 'get'],
				],
			],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function actions(){
		return [
			'error'   => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class'           => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex(){
		$this->setMeta('moy magazin');

		return $this->render('index');
	}

	/**
	 * Login action.
	 *
	 * @return Response|string
	 */
	public function actionLogin(){
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
	public function actionLogout(){
		Yii::$app->user->logout();

		return $this->goHome();
	}

	public function actionRegister(){
		$reg             = new User();
		$reg->scenario   = 'register';
		$login           = new User();
		$login->scenario = 'login';
		$pass            = '';
		if ($login->load(Yii::$app->request->post()) && $login->login()) {
			return $this->goHome();
		}
		Yii::$app->session->setFlash('success', 'Вам отправленна ссылка на подтверждение email');
		if ($reg->load(Yii::$app->request->post()) && $reg->validate()) {

			$user = User::findByEmail($reg->email);
			if (!$user) {
				$pass          = $reg->password;
				$reg->password = Yii::$app->security->generatePasswordHash($reg->password);
				$reg->auth_key = Yii::$app->security->generateRandomString(10);
				$reg->code     = Yii::$app->security->generateRandomString(10);
				if ($reg->save()) {
					$reg->sendConfirmLink();
					Yii::$app->session->setFlash('success', 'Вам отправленна ссылка на подтверждение email');
					$this->goHome();
				} else {
					$reg->password = $pass;
				}

				return $this->render('register', ['reg' => $reg, 'login' => $login]);
			} else {
				Yii::$app->session->setFlash('danger', 'Пользователь с таким  email уже существует');
				$this->goHome();
			}

		}

		return $this->render('register', ['reg' => $reg, 'login' => $login]);
	}

	/**
	 * Displays contact page.
	 *
	 * @return Response|string
	 */
	public function actionContact(){
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
	public function actionAbout(){
		Yii::$app->session->setFlash('success', 'Вам отправленна ссылка на подтверждение email');

		return $this->render('about');
	}

	public function actionConfirmEmail($email, $code){
		$user = User::findByEmail($email);
		if ($user->code === $code) {
			$user->status = User::ACTIVE;
			Yii::$app->user->login($user);
			$this->goHome();
		}
		throw new BadRequestHttpException('Не верный код подтверждения');
	}
}
