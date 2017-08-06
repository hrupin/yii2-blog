<?php

namespace hrupin\blog\models;

/**
 * This is the ActiveQuery class for [[\app\models\BlogSeo]].
 *
 * @see \app\models\BlogSeo
 */
class BlogSeoQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\BlogSeo[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogSeo|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
