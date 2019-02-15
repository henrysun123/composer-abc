<?php

class FirstClass {
	public function hello()
	{
		return $this->world();
	}
	public function world()
	{
		return "Hello world!";
	}
}
