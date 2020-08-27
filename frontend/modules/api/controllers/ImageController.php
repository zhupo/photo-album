<?php

namespace frontend\modules\api\controllers;

use Yii;

class ImageController extends BaseController
{
    public function actionIndex()
    {
        return [
            'items' => [
                [
                    'url' => '../assets/carousel-01.jpg'
                ],
                [
                    'url' => '../assets/carousel-02.jpg'
                ],
            ]
        ];
    }
}