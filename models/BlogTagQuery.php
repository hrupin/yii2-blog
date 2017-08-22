<?php

namespace hrupin\blog\models;

/**
 * This is the ActiveQuery class for [[\app\models\BlogTag]].
 *
 * @see \app\models\BlogTag
 */
class BlogTagQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\BlogTag[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogTag|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
