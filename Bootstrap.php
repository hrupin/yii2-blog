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
        'AuthorBlog'          => 'hrupin\blog\models\AuthorBlog',
    ];
}
