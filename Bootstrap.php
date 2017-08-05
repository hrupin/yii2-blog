<?php
namespace hrupin\blog;

use Yii;
use yii\base\BootstrapInterface;
use yii\i18n\PhpMessageSource;

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
            Yii::$container->set('dektrium\user\Mailer', $module->mailer);
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
