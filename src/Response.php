<?php

namespace Http;

class Response {

	protected $headers = array();
	protected $body = '';
	protected $code = null;

	public function setCode($code) {
		$this->code = $code;
	}

	public function echoBody() {
		if (is_callable($this->body)) {
			return call_user_func($this->body);
		}
		echo $this->body;
	}

	public function getBody() {
		if (is_callable($this->body)) {
			ob_start();
			call_user_func($this->body);
			return ob_get_clean();
		}
		return $this->body;
	}

	public function getCode() {
		return $this->code;
	}

	public function appendHeader($name, $value) {
		if (isset($this->headers[$name]) && $append) {
			$this->headers[$name] .= ','.$value;
		} else {
			$this->setHeader($name, $value);
		}
	}

	public function setHeader($name, $value) {
		$this->headers[$name] = $value;
	}

	public function setBody($string) {
		if (! is_string($string)) {
			throw new \Exception("Response body must be a string");
		}
		$this->body = $string;
	}

	public function lazySetBody(callable $callback) {
		$this->body = $callback;
	}

	public function appendBody($string) {
		$this->body .= $string;
	}

	public function eachHeader(callable $callback) {
		$callback("HTTP/1.1 ".$this->getCode());
		foreach ($this->headers as $name => $value) {
			$callback(sprintf("%s: %s", $name, $value));
		}
	}
}