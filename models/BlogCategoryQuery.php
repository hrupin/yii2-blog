<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[\app\models\BlogCategory]].
 *
 * @see \app\models\BlogCategory
 */
class BlogCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\BlogCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\BlogCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
