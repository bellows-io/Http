<?php

namespace Http;

class Request {

	protected $remoteIp;
	protected $acceptedMethods;
	protected $contentType;
	protected $userAgent;
	protected $requestMethod;
	protected $uri;
	protected $input;
	protected $queryString;
	protected $query;

	protected $inputStream;

	public function __construct($remoteIp, array $acceptedMethods, $contentType, $userAgent, $requestMethod, $uri, $queryString, $inputStream) {

		$this->remoteIp        = $remoteIp;
		$this->contentType     = $contentType;
		$this->acceptedMethods = $acceptedMethods;
		$this->userAgent       = $userAgent;
		$this->requestMethod   = $requestMethod;
		$this->uri             = $uri;
		$this->queryString     = $queryString;

		$this->inputStream = $inputStream;
	}

	public static function fromServerAndStream($serverData, $inputStream) {
		$contentType = 'text/plain';
		if (isset($serverData['CONTENT_TYPE'])) {
			list($contentType) = explode(';', $serverData['CONTENT_TYPE']);
		}
		return new Request(
			$serverData['REMOTE_ADDR'],
			explode(',', $serverData['HTTP_ACCEPT']),
			$contentType,
			$serverData['HTTP_USER_AGENT'],
			strtolower($serverData['REQUEST_METHOD']),
			$serverData['REQUEST_URI'],
			$serverData['QUERY_STRING'],
			$inputStream
		);
	}

	public function getRemoteIp() {
		return $this->remoteIp;
	}

	public function getAcceptedMethods() {
		return $this->acceptedMethods;
	}

	public function getContentType() {
		return $this->contentType;
	}

	public function getUserAgent() {
		return $this->userAgent;
	}

	public function getRequestMethod() {
		return $this->requestMethod;
	}

	public function getUri() {
		return $this->uri;
	}

	public function getQueryString() {
		return $this->queryString;
	}

	public function getQuery() {
		parse_str($this->getQueryString(), $data);
		return $data;
	}

	public function getInput() {
		return file_get_contents($this->inputStream);
	}
}