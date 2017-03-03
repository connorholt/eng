<?php

namespace app\controllers;

use yii\rest\ActiveController;

class TestingController extends ActiveController
{
    public $modelClass = 'app\models\User';

    /**
     * user post - добавление человека в тест
     *
     * testing get 1 - получение первого вопроса
     * testing question get 1 ? other
     * testing variants get 1 ? other
     * statistic get test user_id
     * statistic get mistakes user_id
     */
}