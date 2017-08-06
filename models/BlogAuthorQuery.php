<?php

namespace hrupin\blog\models;

/**
 * This is the ActiveQuery class for [[\app\models\BlogAuthor]].
 *
 * @see \app\models\BlogAuthor
 */
class BlogAuthorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\BlogAuthor[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogAuthor|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
