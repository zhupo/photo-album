<?php

namespace common\domain\repository;

use common\domain\entity\Comment;
use yii\base\BaseObject;

/**
 * Class CommentRepository
 *
 * @package common\domain\repository
 */
class CommentRepository extends BaseObject
{
    /**
     * @param $entityId
     * @return array|\yii\db\ActiveRecord[]
     */
    public function findPhotoCommentByEntityId($entityId)
    {
        $qb = Comment::find()->select('comment.*')
            ->andWhere(['entityType' => Comment::ENTITY_TYPE_PHOTO])
            ->where('entityId = :entityId', [':entityId' => $entityId])
            ->orderBy('createdAt DESC');
        return $qb->all();
    }
}
