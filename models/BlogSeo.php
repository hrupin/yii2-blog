<?php

namespace hrupin\blog\models;

use Yii;

/**
 * This is the model class for table "blogSeo".
 *
 * @property int $id
 * @property int $id_seo
 * @property string $lang
 * @property string $tag
 * @property string $value
 * @property int $dateCreated
 * @property int $dateUpdated
 */
class BlogSeo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blogSeo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_seo', 'lang', 'tag', 'dateCreated', 'dateUpdated'], 'required'],
            [['id_seo', 'dateCreated', 'dateUpdated'], 'integer'],
            [['value'], 'string'],
            [['lang'], 'string', 'max' => 6],
            [['tag'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('blog', 'ID'),
            'id_seo' => Yii::t('blog', 'Id Seo'),
            'lang' => Yii::t('blog', 'Lang'),
            'tag' => Yii::t('blog', 'Tag'),
            'value' => Yii::t('blog', 'Value'),
            'dateCreated' => Yii::t('blog', 'Date Created'),
            'dateUpdated' => Yii::t('blog', 'Date Updated'),
        ];
    }

    /**
     * @inheritdoc
     * @return \frontend\models\BlogSeoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \frontend\models\BlogSeoQuery(get_called_class());
    }
}
