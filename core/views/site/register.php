<?php
/**
 * Created by topalek
 * Date: 13.09.2018
 * Time: 12:38
 *
 * @var $reg   User
 * @var $login User
 */

use app\models\User;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="main">
    <div class="page-header">
        <div class="wrap-page-title">
            <div class="bottom">
                <div>
                    <div class="container">
                        <div class="page-title">
                            <h4>REQUIRED</h4>
                            <h2>AUTHENTICATION</h2>
                        </div>
                    </div>
                    <!-- /.page-title -->
                </div>
            </div>
        </div>
        <!-- /.wrap-page-title -->
        <div class="wrap-breadcrumb">
            <div class="middle">
                <div>
                    <div class="container">
                        <nav class="breadcrumb">
                            <a href="#">Home</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="#">My Account</a>&nbsp;&nbsp;/&nbsp;&nbsp;<span>My Cart</span>
                        </nav>
                        <!-- /.breadcrumb -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.wrap-breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- /.wrap-page-header -->
    <div class="main-content">
        <div class="container">
            <div class="payment-steps">
                <div class="wrap-progress">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                             aria-valuemax="100" style="width: 40%;">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                </div>
                <ul>
                    <li class="active"><a href="#">01. Summary</a></li>
                    <li class="active">02. Login</li>
                    <li>03. address</li>
                    <li>04. shipping</li>
                    <li>05. payment</li>
                </ul>
            </div>
            <!-- /.payment-steps -->
            <div class="row">
                <div class="col-md-6">
                    <h3 class="caption">ЗАРЕГИСТРИРОВАЬТСЯ</h3>
                    <h5 class="gray-caption">Введите свой email и пароль, чтобы зарегистрироваться</h5>
                    <div class="row">
                        <div class="col-md-7">
                            <?php $form = ActiveForm::begin([]) ?>
                            <?= $form->field($reg, 'username')->textInput() ?>
                            <?= $form->field($reg, 'email')->textInput() ?>
                            <?= $form->field($reg, 'password')->passwordInput() ?>
                            <div class="form-group">
                                <?= Html::submitButton('Зарегистрироваться', ['class' => 'orange-btn']) ?>
                            </div>
                            <?php ActiveForm::end() ?>
                            <!--<form action="#" class="register-form">
                                <div class="form-group">
                                    <label for="email-address">Email Address</label>
                                    <input type="email" id="email-address" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="orange-btn">Create an Account</button>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="caption">УЖЕ ЕСТЬ АККАУНТ</h3>
                    <h5 class="gray-caption">Заполните информацию чтобы войти</h5>
                    <div class="row">
                        <div class="col-md-7">
                            <?php $form = ActiveForm::begin([]) ?>
                            <?= $form->field($login, 'email')->textInput() ?>
                            <?= $form->field($login, 'password')->passwordInput() ?>
                            <div class="form-group">
                                <?= Html::submitButton('Войти', ['class' => 'pink-btn']) ?>
                            </div>
                            <?php ActiveForm::end() ?>
                            <!--<form action="#" class="login-form">
                                <div class="form-group">
                                    <label for="email-address">Email Address</label>
                                    <input type="email" id="email-address" />
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" />
                                </div>
                                <div class="form-group">
                                    <a href="#">Forgot Password?</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="pink-btn">Sign In</button>
                                </div>
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-content -->
</div>
