<?php
namespace hrupin\blog;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    const VERSION = '0.0.1';
    public $mailer = [];
    public $modelMap = [];
    public $urlPrefix = 'blog';
    public $debug = false;
    public $strategyComments = 1;
}
