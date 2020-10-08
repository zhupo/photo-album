<?php

namespace frontend\modules\api\controllers;

use Yii;

class PhotoController extends BaseController
{
    public function actionIndex($categoryId)
    {
        $photos = [
            [
                'id' => 1,
                'categoryId' => $categoryId,
                'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。',
                'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5tG1yOqnqwodaHYWwyQg3yWkEvuZSuy7WfmOWMpwSpTP81vRrCDXDwV3tzBaNTAs3DYL2OzpSiSSjq48u62tUNs!/b&ek=1&kp=1&pt=0&bo=9AEgAQAAAAABF.Q!&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=viewer_4',
                'tags' => '卧室',
                'click' => 0,
                'summary' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 
                明亮的外表卧室背景墙，吊顶黄色。现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 '
            ],
            [
                'id' => 2,
                'categoryId' => $categoryId,
                'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。',
                'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVn7IUrbj.9IiguFqAmohFPGM6G*1H8xyn3ezpsXGY4E43lduJUKqYbmZRzPpUmSaQ!/m&ek=1&kp=1&pt=0&bo=OASABwAAAAABJ7s!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'tags' => '卧室',
                'click' => 0,
                'summary' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 
                明亮的外表卧室背景墙，吊顶黄色。现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 '
            ],
            [
                'id' => 3,
                'categoryId' => $categoryId,
                'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。',
                'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKUV5B9AC8FKDDeJLEjdHyfNEbrQw0h5lY6jJYdNPZXAq.TZi4AeYfQQn*d.Fb0AcB0!/m&ek=1&kp=1&pt=0&bo=vALsAwAAAAABF2E!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'tags' => '卧室',
                'click' => 0,
                'summary' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 
                明亮的外表卧室背景墙，吊顶黄色。现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 '
            ],
            [
                'id' => 4,
                'categoryId' => $categoryId,
                'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。',
                'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5s0v5gMdxzWwJnpWzDAgpjkF1713LJOFp12bc5f*nl1FY.h7LpPEuGYV7jJum5YTY8BxktsMoSsjCI2Ju1sEM34!/m&ek=1&kp=1&pt=0&bo=0gEsAQAAAAABF84!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'tags' => '卧室',
                'click' => 0,
                'summary' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 
                明亮的外表卧室背景墙，吊顶黄色。现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 '
            ],
            [
                'id' => 5,
                'categoryId' => $categoryId,
                'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。',
                'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVcIooV34I9PtLymS8.eVbeE3Kbx2SX0Y5jRawUJ8G24ltVHhJHCxBjJOUvqgYbbNY!/m&ek=1&kp=1&pt=0&bo=FQIsAQAAAAABFwo!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'tags' => '卧室',
                'click' => 0,
                'summary' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 
                明亮的外表卧室背景墙，吊顶黄色。现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 '
            ],
            [
                'id' => 6,
                'categoryId' => $categoryId,
                'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。',
                'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5s0v5gMdxzWwJnpWzDAgpjkNY8GTa1dTkrZ5ASrId.uER7.w.VWfwmKXpO0Wo4mX34in0l59JRkLKzXUZQ0repE!/m&ek=1&kp=1&pt=0&bo=uAFYAgAAAAABF9M!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'tags' => '卧室',
                'click' => 0,
                'summary' => '现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 
                明亮的外表卧室背景墙，吊顶黄色。现代简约 明亮的外表卧室背景墙，吊顶黄色。现代简约 '
            ],
        ];

        $arr = [];
        if (isset($photos[$categoryId])) {
            $arr[] = $photos[$categoryId];
        }

        return $arr;
    }

    public function actionInfo($id)
    {
        return [
            'id' => $id,
            'click' => 1,
            'content' => '不要简朴不要素雅洋气我是我做主，高低床榻榻米式靓丽卧室装扮，现代优化壁画。',
            'createdAt' => '2020-10-06',
            'title' => '现代简约 明亮的外表卧室背景墙，吊顶黄色'
        ];
    }

    public function actionThum()
    {
        return [
            [
                'src' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5tG1yOqnqwodaHYWwyQg3yWkEvuZSuy7WfmOWMpwSpTP81vRrCDXDwV3tzBaNTAs3DYL2OzpSiSSjq48u62tUNs!/b&ek=1&kp=1&pt=0&bo=9AEgAQAAAAABF.Q!&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=viewer_4',
                'msrc' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5tG1yOqnqwodaHYWwyQg3yWkEvuZSuy7WfmOWMpwSpTP81vRrCDXDwV3tzBaNTAs3DYL2OzpSiSSjq48u62tUNs!/b&ek=1&kp=1&pt=0&bo=9AEgAQAAAAABF.Q!&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=viewer_4',
                'alt' => 'picture1',
                'title' => 'Image caption 1',
                'w' => 600,
                'h' => 400
            ],
            [
                'src' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVcIooV34I9PtLymS8.eVbeE3Kbx2SX0Y5jRawUJ8G24ltVHhJHCxBjJOUvqgYbbNY!/m&ek=1&kp=1&pt=0&bo=FQIsAQAAAAABFwo!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'msrc' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVcIooV34I9PtLymS8.eVbeE3Kbx2SX0Y5jRawUJ8G24ltVHhJHCxBjJOUvqgYbbNY!/m&ek=1&kp=1&pt=0&bo=FQIsAQAAAAABFwo!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'alt' => 'picture2',
                'title' => 'Image caption 2',
                'w' => 600,
                'h' => 400
            ],
            [
                'src' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5s0v5gMdxzWwJnpWzDAgpjkF1713LJOFp12bc5f*nl1FY.h7LpPEuGYV7jJum5YTY8BxktsMoSsjCI2Ju1sEM34!/m&ek=1&kp=1&pt=0&bo=0gEsAQAAAAABF84!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'msrc' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5s0v5gMdxzWwJnpWzDAgpjkF1713LJOFp12bc5f*nl1FY.h7LpPEuGYV7jJum5YTY8BxktsMoSsjCI2Ju1sEM34!/m&ek=1&kp=1&pt=0&bo=0gEsAQAAAAABF84!&t=5&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=0-0',
                'alt' => 'picture3',
                'title' => 'Image caption 3',
                'w' => 600,
                'h' => 400
            ],
        ];
    }
}
