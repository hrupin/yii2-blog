<?php
namespace hrupin\blog;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    const VERSION = '0.0.1';
    const STRATEGY_COMMENTS
    const STRATEGY_COMMENTS_DEFAULT = 1;    
    public $admins = [];
    public $adminPermission;
    public $mailer = [];
    public $modelMap = [];
    public $urlPrefix = 'blog';
    public $debug = false;

    public $urlRules = [
        
    ];
}
