<?php

namespace app\modules\admin\modules\main\controllers;

use Yii;
use app\modules\main\models\Pages;
use yii\filters\VerbFilter;
use common\actions\crud;
use common\controllers\Admin;


/**
 * Class PagesController
 * Контроллер CRUD действий для моделей пользователей системы
 * @package app\modules\admin\modules\main\controllers
 * @author Churkin Anton <webadmin87@gmail.com>
 */
class PagesController extends Admin
{

    /**
     * Поведения
     * @return array
     */

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'groupdelete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Действия
     * @return array
     */
    public function actions() {

        $class = Pages::className();

        return [

            'index'=>[
                'class'=>crud\TAdmin::className(),
                'modelClass'=>$class,
            ],
            'create'=>[
                'class'=>crud\Create::className(),
                'modelClass'=>$class,
            ],
            'update'=>[
                'class'=>crud\Update::className(),
                'modelClass'=>$class,
            ],

            'view'=>[
                'class'=>crud\View::className(),
                'modelClass'=>$class,
            ],

            'delete'=>[
                'class'=>crud\Delete::className(),
                'modelClass'=>$class,
            ],

            'groupdelete'=>[
                'class'=>crud\GroupDelete::className(),
                'modelClass'=>$class,
            ],

        ];

    }

}
