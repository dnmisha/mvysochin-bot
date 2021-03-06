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
        $this->log();
        $bot = new Bot([
            'token' => Yii::$app->params['bot_token']
        ]);
        $response = Bot::$api->getWebhookInfo()->send();
        var_dump($response);die;
    }

    public function log(){
        $data = print_r($_SERVER,1).PHP_EOL;
        $data.= print_r($_POST,1).PHP_EOL;
        file_put_contents('files/log.txt',$data);
    }
}
