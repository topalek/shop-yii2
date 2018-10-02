<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{

    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        //deleting old roles
        $auth->removeAll();

        $user = $auth->createRole('user');
        $courier = $auth->createRole('courier');
        $manager = $auth->createRole('manager');
        $admin = $auth->createRole('admin');

        $auth->add($user);
        $auth->add($courier);
        $auth->add($manager);
        $auth->add($admin);

//        $registration = $auth->createPermission('registration');
//        $registration->description = 'Регистрация';

        $AdminPage = $auth->createPermission('AdminPage');
        $AdminPage->description = 'Просмотр админки';

        $viewPanelCourier = $auth->createPermission('viewPanelCourier');
        $viewPanelCourier->description = 'Панель курьера';

        $viewPanelManager = $auth->createPermission('viewPanelManager');
        $viewPanelManager->description = 'панель Менеджера';

        //записываем разрешения в БД
        $auth->add($AdminPage);
        $auth->add($viewPanelCourier);
        $auth->add($viewPanelManager);

        //присваиваем разрешения ролям
        $auth->addChild($courier, $viewPanelCourier);
        $auth->addChild($manager, $viewPanelManager);
        $auth->addChild($admin, $AdminPage);

        //наследуем роли
        $auth->addChild($manager, $courier);
        $auth->addChild($admin, $manager);

        // назначаем админа и менеджера
        $auth->assign($admin, 1);
        $auth->assign($manager, 2);

	    print_r("Rbac initialization complete \n");
    }

}
