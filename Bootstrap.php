<?php
namespace hrupin\blog;

use yii\base\BootstrapInterface;

/**
 * Blogs module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /** @var array Model's map */
    private $_modelMap = [
        'CategoryBlog'     => 'hrupin\blog\models\CategoryBlog',
        'PostBlog'         => 'hrupin\blog\models\PostBlog',
        'CommentBlog'      => 'hrupin\blog\models\CommentBlog',
        'TagBlog'          => 'hrupin\blog\models\TagBlog',
        'SeoBlog'          => 'hrupin\blog\models\SeoBlog',
        'AuthorBlog'       => 'hrupin\blog\models\AuthorBlog',
    ];
    
    public function ensureCorrectDebugSetting()
    {
        if (!defined('YII_DEBUG')) {
            return false;
        }
        if (!defined('YII_ENV')) {
            return false;
        }
        if (defined('YII_ENV') && YII_ENV !== 'dev') {
            return false;
        }
        if (defined('YII_DEBUG') && YII_DEBUG !== true) {
            return false;
        }
        return Yii::$app->getModule('blog')->debug;
    }
}
