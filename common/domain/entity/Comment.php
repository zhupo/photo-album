<?php

namespace common\domain\entity;

/**
 * Class Comment
 *
 * @property
 * @property string $content
 * @property int $createBY
 * @package common\domain\entity
 */
class Comment extends Entity
{
    public const ENTITY_TYPE_PHOTO = 1;

    public static function tableName()
    {
        return 'comment';
    }
}