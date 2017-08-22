<?php

namespace hrupin\blog\models;

class BlogAuthorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    public function all($db = null)
    {
        return parent::all($db);
    }

    public function one($db = null)
    {
        return parent::one($db);
    }

    public function oneId($id)
    {
        return parent::andWhere('[[id_category]]='.$id);
    }
}
