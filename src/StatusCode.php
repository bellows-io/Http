<?php

namespace Http;

abstract class StatusCode {

	// Informational 1xx
	/**
	 * 100 Continue
	 */
	const STATUS_100 = "100 Continue";
	/**
	 * 101 Switching Protocols
	 */
	const STATUS_101 = "101 Switching Protocols";

	// Successful 2xx
	/**
	 * 200 OK
	 */
	const STATUS_200 = "200 OK";
	/**
	 * 201 Created
	 */
	const STATUS_201 = "201 Created";
	/**
	 * 202 Accepted
	 */
	const STATUS_202 = "202 Accepted";
	/**
	 * 203 Non-Authoritative Information
	 */
	const STATUS_203 = "203 Non-Authoritative Information";
	/**
	 * 204 No Content
	 */
	const STATUS_204 = "204 No Content";
	/**
	 * 205 Reset Content
	 */
	const STATUS_205 = "205 Reset Content";
	/**
	 * 206 Partial Content
	 */
	const STATUS_206 = "206 Partial Content";

	// Redirection 3xx
	/**
	 * 300 Multiple Choices
	 */
	const STATUS_300 = "300 Multiple Choices";
	/**
	 * 301 Moved Permanently
	 */
	const STATUS_301 = "301 Moved Permanently";
	/**
	 * 302 Found
	 */
	const STATUS_302 = "302 Found";
	/**
	 * 303 See Other
	 */
	const STATUS_303 = "303 See Other";
	/**
	 * 304 Not Modified
	 */
	const STATUS_304 = "304 Not Modified";
	/**
	 * 305 Use Proxy
	 */
	const STATUS_305 = "305 Use Proxy";
	/**
	 * 306 (Unused)
	 */
	const STATUS_306 = "306 (Unused)";
	/**
	 * 307 Temporary Redirect
	 */
	const STATUS_307 = "307 Temporary Redirect";

	// Client Error 4xx
	/**
	 * 400 Bad Request
	 */
	const STATUS_400 = "400 Bad Request";
	/**
	 * 401 Unauthorized
	 */
	const STATUS_401 = "401 Unauthorized";
	/**
	 * 402 Payment Required
	 */
	const STATUS_402 = "402 Payment Required";
	/**
	 * 403 Forbidden
	 */
	const STATUS_403 = "403 Forbidden";
	/**
	 * 404 Not Found
	 */
	const STATUS_404 = "404 Not Found";
	/**
	 * 405 Method Not Allowed
	 */
	const STATUS_405 = "405 Method Not Allowed";
	/**
	 * 406 Not Acceptable
	 */
	const STATUS_406 = "406 Not Acceptable";
	/**
	 * 407 Proxy Authentication Required
	 */
	const STATUS_407 = "407 Proxy Authentication Required";
	/**
	 * 408 Request Timeout
	 */
	const STATUS_408 = "408 Request Timeout";
	/**
	 * 409 Conflict
	 */
	const STATUS_409 = "409 Conflict";
	/**
	 * 410 Gone
	 */
	const STATUS_410 = "410 Gone";
	/**
	 * 411 Length Required
	 */
	const STATUS_411 = "411 Length Required";
	/**
	 * 412 Precondition Failed
	 */
	const STATUS_412 = "412 Precondition Failed";
	/**
	 * 413 Request Entity Too Large
	 */
	const STATUS_413 = "413 Request Entity Too Large";
	/**
	 * 414 Request-URI Too Long
	 */
	const STATUS_414 = "414 Request-URI Too Long";
	/**
	 * 415 Unsupported Media Type
	 */
	const STATUS_415 = "415 Unsupported Media Type";
	/**
	 * 416 Requested Range Not Satisfiable
	 */
	const STATUS_416 = "416 Requested Range Not Satisfiable";
	/**
	 * 417 Expectation Failed
	 */
	const STATUS_417 = "417 Expectation Failed";

	// Server Error 5xx
	/**
	 * 500 Internal Server Error
	 */
	const STATUS_500 = "500 Internal Server Error";
	/**
	 * 501 Not Implemented
	 */
	const STATUS_501 = "501 Not Implemented";
	/**
	 * 502 Bad Gateway
	 */
	const STATUS_502 = "502 Bad Gateway";
	/**
	 * 503 Service Unavailable
	 */
	const STATUS_503 = "503 Service Unavailable";
	/**
	 * 504 Gateway Timeout
	 */
	const STATUS_504 = "504 Gateway Timeout";
	/**
	 * 505 HTTP Version Not Supported
	 */
	const STATUS_505 = "505 HTTP Version Not Supported";
}