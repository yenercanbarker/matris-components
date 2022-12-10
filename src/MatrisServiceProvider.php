<?php

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class MatrisServiceProvider extends ServiceProvider
{
	/** @var string */
	private const PATH_VIEWS = __DIR__.'/../resources/views';

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot(): void
	{
		$this->loadViewsFrom(self::PATH_VIEWS, 'easy-component');

		$this
			->registerComponents()
			->registerComponentsPublishers();
	}

	/**
	 * Register the Blade form components.
	 *
	 * @return $this
	 */
	private function registerComponents(): self
	{
		Blade::componentNamespace('TomSix\\Components\\View\\Components\\Matris', 'matris');

		return $this;
	}

	/**
	 * Register the publishers of the component resources.
	 *
	 * @return $this
	 */
	public function registerComponentsPublishers(): self
	{
		$this->publishes([
			self::PATH_VIEWS => resource_path('views/vendor/easy-component'),
		], 'components');

		$this->publishes([
			self::PATH_VIEWS . '/form' => resource_path('views/vendor/laravel-components-library/form'),
		], 'form-components');


		return $this;
	}
}
