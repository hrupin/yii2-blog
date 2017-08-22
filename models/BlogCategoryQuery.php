<?php

namespace hrupin\blog\models;


class BlogCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    public function getIdParentAndLang($id, $lang)
    {
        return $this->select(['id_parent', 'title', 'lang'])->where(['id_category' => $id, 'lang' => $lang]);
    }

    public function getIdDist()
    {
        return $this->select(['id_parent', 'lang'])->distinct();
    }

    public function all($db = null)
    {
        return parent::all($db);
    }

    public function one($db = null)
    {
        return parent::one($db);
    }

    public function lastId($db = null)
    {
        return parent::max('id_category');
    }
}
