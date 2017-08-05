<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogAuthor".
 *
 * @property int $id
 * @property int $id_author
 * @property int $id_user
 * @property string $lang
 * @property string $name
 * @property string $avatar
 * @property string $description
 * @property string $about
 * @property string $contact
 * @property int $dateCreated
 * @property int $dateUpdated
 */
class BlogAuthor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogAuthor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_author', 'lang', 'name', 'avatar', 'dateCreated', 'dateUpdated'], 'required'],
            [['id_author', 'id_user', 'dateCreated', 'dateUpdated'], 'integer'],
            [['about', 'contact'], 'string'],
            [['lang'], 'string', 'max' => 6],
            [['name', 'avatar'], 'string', 'max' => 255],
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
            'id_author' => Yii::t('blog', 'Id Author'),
            'id_user' => Yii::t('blog', 'Id User'),
            'lang' => Yii::t('blog', 'Lang'),
            'name' => Yii::t('blog', 'Name'),
            'avatar' => Yii::t('blog', 'Avatar'),
            'description' => Yii::t('blog', 'Description'),
            'about' => Yii::t('blog', 'About'),
            'contact' => Yii::t('blog', 'Contact'),
            'dateCreated' => Yii::t('blog', 'Date Created'),
            'dateUpdated' => Yii::t('blog', 'Date Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\models\BlogAuthorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\BlogAuthorQuery(get_called_class());
    }
}
