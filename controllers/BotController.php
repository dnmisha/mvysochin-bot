<?php

namespace app\controllers;

use bot\Bot;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class BotController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $bot = new Bot([
            'token' => Yii::$app->params['bot_token']
        ]);
        $response = Bot::$api->sendMessage('');
        var_dump($response);die;
    }
}
