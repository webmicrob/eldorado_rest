<?php

namespace app\modules\api\controllers;

use yii\data\ActiveDataProvider;
use app\models\Album;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;


class AlbumController extends \yii\rest\ActiveController
{
    public $modelClass = 'app\models\Album';

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        //Авторизация по токену (header: Authorization: Bearer 100-token
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];
        return $behaviors;
    }

    public function actionIndex()
    {
        return new ActiveDataProvider([
            'query' => Album::find(),
        ]);
    }

}
