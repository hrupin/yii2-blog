<?php

namespace hrupin\blog\models;

use Yii;

/**
 * This is the model class for table "blogTag".
 *
 * @property int $id
 * @property int $id_tag
 * @property string $lang
 * @property string $type
 * @property string $description
 * @property string $img
 * @property int $sort
 * @property int $dateCreated
 * @property int $dateUpdated
 */
class BlogTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogTag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tag', 'lang', 'type', 'sort', 'dateCreated', 'dateUpdated'], 'required'],
            [['id_tag', 'sort', 'dateCreated', 'dateUpdated'], 'integer'],
            [['description'], 'string'],
            [['lang'], 'string', 'max' => 6],
            [['type', 'img'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('blog', 'ID'),
            'id_tag' => Yii::t('blog', 'Id Tag'),
            'lang' => Yii::t('blog', 'Lang'),
            'type' => Yii::t('blog', 'Type'),
            'description' => Yii::t('blog', 'Description'),
            'img' => Yii::t('blog', 'Img'),
            'sort' => Yii::t('blog', 'Sort'),
            'dateCreated' => Yii::t('blog', 'Date Created'),
            'dateUpdated' => Yii::t('blog', 'Date Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\models\BlogTagQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\BlogTagQuery(get_called_class());
    }
}
