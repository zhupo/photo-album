<?php

namespace frontend\modules\api\controllers;

use Yii;

class NewController extends BaseController
{
    public function actionIndex()
    {
        return [
            'items' => [
                [
                    'id' => 1,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2020-08-08 10:22:22',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://a1.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5tG1yOqnqwodaHYWwyQg3yWkEvuZSuy7WfmOWMpwSpTP81vRrCDXDwV3tzBaNTAs3DYL2OzpSiSSjq48u62tUNs!/b&ek=1&kp=1&pt=0&bo=9AEgAQAAAAABF.Q!&tl=3&vuin=1738405457&tm=1600174800&sce=60-4-3&rf=viewer_4'
                ],
                [
                    'id' => 2,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5tG1yOqnqwodaHYWwyQg3yWYcPp0nztXTzNBMQXeOHFKuNf56FN*IovP4vw31u4mdSmetlbHtuPoE718Jz6vsZY!/mnull&bo=AAQABgAAAAABByI!&rf=photolist&t=5'
                ],
                [
                    'id' => 3,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVn7IUrbj.9IiguFqAmohFPGM6G*1H8xyn3ezpsXGY4E43lduJUKqYbmZRzPpUmSaQ!/mnull&bo=OASABwAAAAABB5s!&rf=photolist&t=5'
                ],
                [
                    'id' => 4,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKUV5B9AC8FKDDeJLEjdHyfNEbrQw0h5lY6jJYdNPZXAq.TZi4AeYfQQn*d.Fb0AcB0!/mnull&bo=vALsAwAAAAABB3E!&rf=photolist&t=5'
                ],
                [
                    'id' => 5,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVcIooV34I9PtLymS8.eVbeE3Kbx2SX0Y5jRawUJ8G24ltVHhJHCxBjJOUvqgYbbNY!/mnull&bo=FQIsAQAAAAABBxo!&rf=photolist&t=5'
                ],
                [
                    'id' => 6,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5iryu2UqRZ4RZQv7Q2NXTKVh8pkmTv1dkEbbdBTK9Ig0pAgidvzgXnmwQQnlIzUadQRQB3OY91akrIKyMb0Rb5A!/mnull&bo=OgJzAQAAAAABB2o!&rf=photolist&t=5'
                ],
                [
                    'id' => 7,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5s0v5gMdxzWwJnpWzDAgpjkNY8GTa1dTkrZ5ASrId.uER7.w.VWfwmKXpO0Wo4mX34in0l59JRkLKzXUZQ0repE!/mnull&bo=uAFYAgAAAAABB8M!&rf=photolist&t=5'
                ],
                [
                    'id' => 8,
                    'title' => '季度多家房企利润跌幅超50%，去库存促销战打响。',
                    'createdAt' => '2015-08-08',
                    'zhaiyao' => '房企一季度销售业绩已经陆续公布，研究中心统计。',
                    'click' => 22,
                    'url' => 'http://m.qpic.cn/psc?/V50AYnUV3WqjyS2vXqPa0J2GSy2XfUEO/ruAMsa53pVQWN7FLK88i5s0v5gMdxzWwJnpWzDAgpjkF1713LJOFp12bc5f*nl1FY.h7LpPEuGYV7jJum5YTY8BxktsMoSsjCI2Ju1sEM34!/mnull&bo=0gEsAQAAAAABB94!&rf=photolist&t=5'
                ],
            ]
        ];
    }

    public function actionView($id)
    {
        return [
            'id' => 1,
            'title' => '长城汽车不走高端很快就会死，哈弗H8卷土重来',
            'click' => 0,
            'createdAt' => '2020-09-20 10:30:22',
            'content' => '时间戳是使用数字签名技术产生的数据，签名的对象包括了原始文件信息、签名参数、签名时间等信息。时间戳系统用来产生和管理
                        时间戳，对签名对象进行数字签名产生时间戳，以证明原始文件在签名时间之前已经存在。 [1] 
                        可信时间戳是由联合信任时间戳服务中心签发的一个电子凭证，用于证明电子数据文件自申请可信时间戳后内容保持完整、未被更改。可信时间戳接入核准书的颁发，标
                        志着可信时间戳在档案领域规范化应用已经开始，并将起到电子档案和档案数字化副本内容防篡改、保障档案的法律凭证的作用。根据《电子签名法》有关数据电文原件
                        形式的要求，申请了可信时间戳认证的电子文件、电子档案或纸质档案的数字化副本等可视为法规规定的原件形式。'
        ];
    }
}