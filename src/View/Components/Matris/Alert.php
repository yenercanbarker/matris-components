<?php

namespace Matris\View\Components;

use Matris1337\Components\View\Components\Component;

class Alert extends Component
{
	public $message;

	public function __construct($message)
	{
		$this->message = $message;
	}

	public function render()
	{
		return view('easy-component::matris.alert');
	}
}