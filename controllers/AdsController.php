<?php

namespace app\controllers;

use yii\rest\ActiveController;
//use yii\filters\Cors;
use yii\filters\VerbFilter;
use yii\web\Response;

class AdsController extends ActiveController
{

    public $modelClass = 'app\models\Ad';

    public function behaviors()
    {
        return
            \yii\helpers\ArrayHelper::merge(
                parent::behaviors(),
                [
                   //для конкретного контроллера прописываем вариант ответа
                    //можно также добавить на уровне components
                    [
                        'class' => 'yii\filters\ContentNegotiator',
                        'formats' => [
                            'application/json' => Response::FORMAT_JSON,
                        ],
                    ],
                    //cross-origin
                    'corsFilter' => [
                        'class' => \yii\filters\Cors::className(),
                    ],
                    //actions по REST
//                    'verbs' => [
//                        'class' => VerbFilter::className(),
//                        'actions' => [
//                            'index'  => ['get'],
//                            'view'   => ['get'],
//                            'create' => ['post'],
//                            'update' => ['put', 'patch'],
//                            'delete' => ['post'],
////                            'options' => ['post', 'head', 'put']
//                        ],
//                    ],
                ]
            );
    }

//    protected function verbs()
//    {
//        return [
//            'index' => ['GET', 'HEAD', 'POST'],
//            'view' => ['GET', 'HEAD', 'PUT'],
//            'create' => ['POST'],
//            'update' => ['PUT', 'PATCH'],
//            'delete' => ['DELETE'],
//            'options' => ['POST', 'head', 'put']
//        ];
//    }

}
