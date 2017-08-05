<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogComment".
 *
 * @property int $id
 * @property int $id_comment
 * @property int $id_parent
 * @property int $id_user
 * @property int $id_post
 * @property string $lang
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $contact
 * @property string $avatar
 * @property string $content
 * @property int $dateCreated
 * @property int $dateUpdated
 */
class BlogComment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogComment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_comment', 'id_post', 'lang', 'name', 'email', 'phone', 'avatar', 'content', 'dateCreated', 'dateUpdated'], 'required'],
            [['id_comment', 'id_parent', 'id_user', 'id_post', 'dateCreated', 'dateUpdated'], 'integer'],
            [['content'], 'string'],
            [['lang'], 'string', 'max' => 6],
            [['name', 'contact', 'avatar'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('blog', 'ID'),
            'id_comment' => Yii::t('blog', 'Id Comment'),
            'id_parent' => Yii::t('blog', 'Id Parent'),
            'id_user' => Yii::t('blog', 'Id User'),
            'id_post' => Yii::t('blog', 'Id Post'),
            'lang' => Yii::t('blog', 'Lang'),
            'name' => Yii::t('blog', 'Name'),
            'email' => Yii::t('blog', 'Email'),
            'phone' => Yii::t('blog', 'Phone'),
            'contact' => Yii::t('blog', 'Contact'),
            'avatar' => Yii::t('blog', 'Avatar'),
            'content' => Yii::t('blog', 'Content'),
            'dateCreated' => Yii::t('blog', 'Date Created'),
            'dateUpdated' => Yii::t('blog', 'Date Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\models\BlogCommentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\BlogCommentQuery(get_called_class());
    }
}
