<?php

namespace app\controllers;

use yii\rest\ActiveController;
//use yii\filters\Cors;
use yii\web\Response;

class CategoriesController extends ActiveController
{

    public $modelClass = 'app\models\Category';

    public function behaviors()
    {
        return
            \yii\helpers\ArrayHelper::merge(
                parent::behaviors(), [

                [
                    'class' => 'yii\filters\ContentNegotiator',
                    'formats' => [
                        'application/json' => Response::FORMAT_JSON,
                    ],
                ],
                //если используем localhost  и в фронте и в бэке, то не нужно
                //если отдельный домен по АПИ в бэке - то раскомментируем
                'corsFilter' => [
                    'class' => \yii\filters\Cors::className(),
                ],
            ]);
    }
}
