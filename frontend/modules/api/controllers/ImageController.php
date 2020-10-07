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
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5nPeL9cJvqHL.yH12uIlHBAbgyhSBHtn9WGBg8MUNZEF1AUvUXMDn4nzkrnKEdkU*MnxXZkgEfbShDTSGmiZK4w!/mnull&bo=gAL6AAAAAAABB1g!&rf=photolist&t=5'
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5nPeL9cJvqHL.yH12uIlHBAklTMp6akyCboqWcl9U28DnQ6xr61Jkpx0AFTA9MfgcTpcxY4aaN9Ryr5cKfMYkBo!/mnull&bo=1QHcAAAAAAABByg!&rf=photolist&t=5'
                ],
            ]
        ];
    }

    public function actionShowOff()
    {
        return [
            'items' => [
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5n.Vlk09CSB.TRUmtvULrj3BFDd9U6OFL9yM.j2R8jb8bzbTfouvYKuxk9jq9pqePooME1y3eFg2LeSAnI9wOpE!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '联系我们',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5n.Vlk09CSB.TRUmtvULrj0kgIPfWMA7zMV62NaG*VXWkwQpJrHrxn7uVX5b6m73t5pJlxNFvcX5zviFTnz5f7w!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '商品展示',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5pmTwzj413gs83p6lzrD68p8NLbRYiEmh9qD6KiGMpedvSmA4H.WJhs78aXFtcQzj8rNgGAwjgVJomeGcRIPAPA!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '图文分享',
                    'router' => ['name' => 'photo.list', 'params' => ['categoryId' => 0]]
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5n.Vlk09CSB.TRUmtvULrj1VvsECDwA.4I0JSAJ1u1lRZci6LBeQHShnUcdO9S7ACtXKByU0PhPONqMGLiyL3fA!/mnull&bo=3gDIAAAAAAADBzQ!&rf=photolist&t=5',
                    'title' => '留言反馈',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5rDFdO3n*H25AEslA6p0dthkg8Y5kbZEA9EUB3XuZDo0zkB*Kmv60ilQ0jg7dwkPqIkFGafOQ3R*tOqjt8iU5Ro!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '新闻资讯',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5k79DSH.VQxtVkmfqYBx*qJ6wcTMn40cp2ZUQiUtrv07pOTlc9YULcgPzjM7GxTO1PVM7C3GOZMS9b1zuQ0BeBc!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '关于我们',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5rDFdO3n*H25AEslA6p0dthBOzm.xIiNH8m*P*92Bi2vy4uIiyGTCktQF8Kv8V7kcoFN1M7PTQhyNYN3ykEsMzk!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '优惠区域',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5n.Vlk09CSB.TRUmtvULrj1F5GdDDgQOQtQQV0edQds7pm8Q0*wBVnqUL4euftfofrKrSo7yIr1SBihCWbDWheY!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '新人专享',
                    'router' => ['name' => 'news.list']
                ],
                [
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5rDFdO3n*H25AEslA6p0dtitGPn5FoxfNw8Lb5iO*8*NpIIuREhnEWr3fyzg3GaEq0r955EFxEukZTPKGU9vtSU!/mnull&bo=yADIAAAAAAADByI!&rf=photolist&t=5',
                    'title' => '百亿补贴',
                    'router' => ['name' => 'news.list']
                ]
            ]
        ];
    }
}