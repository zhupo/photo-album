<?php

namespace frontend\modules\api\controllers;

use Yii;

class PhotoCategoryController extends BaseController
{
    public function actionIndex()
    {
        return [
            [
                'id' => 1,
                'name' => '空间设计'
            ],
            [
                'id' => 2,
                'name' => '户型装饰',
            ],
            [
                'id' => 3,
                'name' => '广告摄影'
            ],
            [
                'id' => 4,
                'name' => '明星美女'
            ],
            [
                'id' => 5,
                'name' => '家居生活'
            ],
            [
                'id' => 6,
                'name' => '摄影设计'
            ],
            [
                'id' => 7,
                'name' => '摄影器材'
            ],
            [
                'id' => 8,
                'name' => '明星写真'
            ],
        ];
    }
}
