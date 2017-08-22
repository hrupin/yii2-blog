<?php

namespace hrupin\blog\models;

/**
 * This is the ActiveQuery class for [[\app\models\BlogPost]].
 *
 * @see \app\models\BlogPost
 */
class BlogPostQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\BlogPost[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogPost|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
