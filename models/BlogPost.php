<?php

namespace hrupin\blog\models;

use Yii;

/**
 * This is the model class for table "blogPost".
 *
 * @property int $id
 * @property int $id_post
 * @property int $id_category
 * @property int $id_author
 * @property string $id_tag
 * @property int $id_seo
 * @property string $lang
 * @property string $title
 * @property string $description
 * @property string $content
 * @property string $thumbnail
 * @property string $img
 * @property int $permissionToComment
 * @property int $dateCreated
 * @property int $dateUpdated
 */
class BlogPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogPost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_post', 'id_category', 'id_author', 'lang', 'title', 'dateCreated', 'dateUpdated'], 'required'],
            [['id_post', 'id_category', 'id_author', 'id_seo', 'permissionToComment', 'dateCreated', 'dateUpdated'], 'integer'],
            [['content'], 'string'],
            [['id_tag'], 'string', 'max' => 100],
            [['lang'], 'string', 'max' => 6],
            [['title', 'thumbnail', 'img'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('blog', 'ID'),
            'id_post' => Yii::t('blog', 'Id Post'),
            'id_category' => Yii::t('blog', 'Id Category'),
            'id_author' => Yii::t('blog', 'Id Author'),
            'id_tag' => Yii::t('blog', 'Id Tag'),
            'id_seo' => Yii::t('blog', 'Id Seo'),
            'lang' => Yii::t('blog', 'Lang'),
            'title' => Yii::t('blog', 'Title'),
            'description' => Yii::t('blog', 'Description'),
            'content' => Yii::t('blog', 'Content'),
            'thumbnail' => Yii::t('blog', 'Thumbnail'),
            'img' => Yii::t('blog', 'Img'),
            'permissionToComment' => Yii::t('blog', 'Permission To Comment'),
            'dateCreated' => Yii::t('blog', 'Date Created'),
            'dateUpdated' => Yii::t('blog', 'Date Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\models\BlogPostQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\BlogPostQuery(get_called_class());
    }
}
