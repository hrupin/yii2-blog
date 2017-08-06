<?php
namespace hrupin\blog;

use Yii;
use yii\i18n\PhpMessageSource;
use yii\base\BootstrapInterface;

/**
 * Blogs module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /** @var array Model's map */
    private $_modelMap = [
        'BlogCategory'       => 'hrupin\blog\models\CategoryBlog',
        'BlogPost'           => 'hrupin\blog\models\PostBlog',
        'BlogComment'        => 'hrupin\blog\models\CommentBlog',
        'BlogTag'            => 'hrupin\blog\models\TagBlog',
        'BlogSeo'            => 'hrupin\blog\models\SeoBlog',
        'BlogAuthor'         => 'hrupin\blog\models\AuthorBlog',
        'BlogCategoryQuery'  => 'hrupin\blog\models\CategoryBlogQuery',
        'BlogPostQuery'      => 'hrupin\blog\models\PostBlogQuery',
        'BlogCommentQuery'   => 'hrupin\blog\models\CommentBlogQuery',
        'BlogTagQuery'       => 'hrupin\blog\models\TagBlogQuery',
        'BlogSeoQuery'       => 'hrupin\blog\models\SeoBlogQuery',
        'BlogAuthorQuery'    => 'hrupin\blog\models\AuthorBlogQuery',
    ];
    
    public function bootstrap($app)
    {
        /** @var Module $module */
        /** @var \yii\db\ActiveRecord $modelName */
        if ($app->hasModule('blog') && ($module = $app->getModule('blog')) instanceof Module) {
            $this->_modelMap = array_merge($this->_modelMap, $module->modelMap);
            foreach ($this->_modelMap as $name => $definition) {
                $class = "hrupin\\blog\\models\\" . $name;
                Yii::$container->set($class, $definition);
                $modelName = is_array($definition) ? $definition['class'] : $definition;
                $module->modelMap[$name] = $modelName;
            }
            if (!isset($app->get('i18n')->translations['blog*'])) {
                $app->get('i18n')->translations['blog*'] = [
                    'class' => PhpMessageSource::className(),
                    'basePath' => __DIR__ . '/messages',
                    'sourceLanguage' => 'en-US'
                ];
            }
            Yii::$container->set('hrupin\blog\Mailer', $module->mailer);
            $module->debug = $this->ensureCorrectDebugSetting();
        }
    }
    
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
