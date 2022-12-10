<?php

use Illuminate\Support\ServiceProvider;
use Matris\View\Components\Alert;

class MatrisServiceProvider extends ServiceProvider
{
	public function boot()
	{
		// ... other things
		$this->loadViewComponentsAs('matris', [
			Alert::class
		]);
	}
}
