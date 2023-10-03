<?php

namespace FirstProject\App\HtmlResponse;

class HtmlResponse implements Response
{
	private $html;

	public function __construct(srting $html)
	{
		$this->html = $html;
	}
	public function getResponse()
	{
		return $this->html;
	}
}
