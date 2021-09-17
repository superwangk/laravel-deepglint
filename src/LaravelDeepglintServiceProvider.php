<?php

namespace TTLMM\Deepglint;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class LaravelDeepglintServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('ttlmm/deepglint.php'),
            ]);
        }
        // 注册路由
        $this->loadRoutesFrom(__DIR__ . '/Http/routes.php');
        $this->loadRoutesFrom(__DIR__ . '/Http/routes-api.php');

	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
