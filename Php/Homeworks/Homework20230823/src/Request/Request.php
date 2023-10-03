<?php

namespace FirstProject\App\Request;

class Request
{
	private $data;
	public function __construct(array $data)
	{
		$this->data = $data;
	}
}
