<?php

namespace Matris1337\Components\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component as BaseComponent;

abstract class Component extends BaseComponent
{
	protected $namespace;

	public function __construct(string $namespace)
	{
		$this->namespace = $namespace;
	}

    public function render()
    {
		dd(1);
		exit();
        $alias = Str::kebab(class_basename($this));

        return view("easy-component::$this->namespace.$alias");
    }

	protected function convertBracketsToDots(string $name): string
	{
		return rtrim(str_replace(['[', ']'], ['.', ''], $name), '.');
	}
}