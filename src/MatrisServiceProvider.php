<?php

namespace Matris1337\Components;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class MatrisServiceProvider extends ServiceProvider
{
	/** @var string */
	const PATH_VIEWS = __DIR__.'/../resources/views';

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->loadViewsFrom(self::PATH_VIEWS, 'easy-component');

		$this
			->registerComponents()
			->registerComponentsPublishers();
	}

	/**
	 * Register the Blade form matris.
	 *
	 * @return $this
	 */
	private function registerComponents()
	{
		Blade::componentNamespace('Matris1337\\Components\\View\\Components\\Matris', 'matris');

		return $this;
	}

	/**
	 * Register the publishers of the component resources.
	 *
	 * @return $this
	 */
	public function registerComponentsPublishers()
	{
		$this->publishes([
			self::PATH_VIEWS => resource_path('views/vendor/easy-component'),
		], 'components');

		$this->publishes([
			self::PATH_VIEWS . '/matris' => resource_path('views/vendor/easy-component/matris'),
		], 'matris-components');


		return $this;
	}
}
