<?php

namespace FirstProject\App\Route;

class Route
{
	public function __construct(){
		$this ->url =substr(
			$_SERVER['REQUEST_URI'],
			0,
			strpos($_SERVER['REQUEST_URI'], '?')===false
			? strlen($_SERVER['REQUEST_URI'])
			:strpos($_SERVER['REQUEST_URI'],'?')
		);
	}
	/**
	*@return string
	*/
	public function getUrl(): string
	{
		return $this->url;
	}

	public function getFolder(){
		//$list = explode(('/'), $this->url);
		//$list = array_values(array_filter($list));
		$list= $this->getUrlParts();
		return $list[0]??'';
		//die(); //можно использовать exit()
	}
	public function getClass(){
		//$list = explode(('/'), $this->url);
		//$list = array_values(array_filter($list));
		$list= $this->getUrlParts();
		return $list[1]??'';
		//die(); //можно использовать exit()
	}
	public function getFunction(){
		//$list = explode(('/'), $this->url);
		//$list = array_values(array_filter($list));
		$list= $this->getUrlParts();
		return $list[2] ?? 'index';
		//die(); //можно использовать exit()
	}

	private function getUrlParts(): array
	{
		$list = explode(('/'), $this->url);

		return array_values(array_filter($list));
	}
}
