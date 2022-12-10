<?php

namespace Matris\View\Components;

class Alert extends Component
{
	public $message;

	public function __construct($message)
	{
		$this->message = $message;
	}
}