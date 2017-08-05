<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[\app\models\BlogComment]].
 *
 * @see \app\models\BlogComment
 */
class BlogCommentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\BlogComment[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogComment|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
