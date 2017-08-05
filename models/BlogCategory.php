<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogCategory".
 *
 * @property int $id
 * @property int $id_category
 * @property int $id_seo
 * @property int $id_parent
 * @property string $lang
 * @property string $name
 * @property string $description
 * @property string $img
 * @property int $sort
 * @property int $dateCreated
 * @property int $dateUpdated
 */
class BlogCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogCategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_category', 'lang', 'name', 'sort', 'dateCreated', 'dateUpdated'], 'required'],
            [['id_category', 'id_seo', 'id_parent', 'sort', 'dateCreated', 'dateUpdated'], 'integer'],
            [['description'], 'string'],
            [['lang'], 'string', 'max' => 6],
            [['name', 'img'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('blog', 'ID'),
            'id_category' => Yii::t('blog', 'Id Category'),
            'id_seo' => Yii::t('blog', 'Id Seo'),
            'id_parent' => Yii::t('blog', 'Id Parent'),
            'lang' => Yii::t('blog', 'Lang'),
            'name' => Yii::t('blog', 'Name'),
            'description' => Yii::t('blog', 'Description'),
            'img' => Yii::t('blog', 'Img'),
            'sort' => Yii::t('blog', 'Sort'),
            'dateCreated' => Yii::t('blog', 'Date Created'),
            'dateUpdated' => Yii::t('blog', 'Date Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\models\BlogCategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\BlogCategoryQuery(get_called_class());
    }
}
