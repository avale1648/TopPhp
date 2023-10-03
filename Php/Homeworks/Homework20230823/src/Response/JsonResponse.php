<?php

namespace FirstProject\App\JsonResponse;

class JsonResponse implements Response
{
	private $array;

	public function __construct(array $array)
	{
		$this->array=$array;
	}

	public function getResponse()
	{
		return json_encode($this->array);
	}
}
