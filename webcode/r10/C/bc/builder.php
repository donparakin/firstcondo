<?php

$mime_types = array(  // (isPHP, mimeType)
	'css' => array(true,'text/css'),
	'js'  => array(true,'application/x-javascript'),
	'xml' => array(true,'application/xml'),
	'xsl' => array(true,'application/xml'),
	'gif' => array(false,'image/gif'),
	'jpg' => array(false,'image/jpeg'),
	'png' => array(false,'image/png'),
);

// Request URLs:  /bc/r123/lang/type/file.ext
$req = explode('/',trim(strtolower($_REQUEST['urlpath']),' /'));
$req = array_slice($req, min(2,count($req)));  // ignore bc/r123

$file = sprintf('%s/V/bc/%s', PHP_ROOT, implode('/',$req));
$ext = substr($file, 1+strrpos($file, '.'));

if ( !array_key_exists($ext, $mime_types) ) {
	echo('HTTP/1.0 400 Unsupported file extension "' . $ext . '"');
} else {
	$isPHP = $mime_types[$ext][0];
	$mime_type = $mime_types[$ext][1];

	if ( !file_exists($file) ) {
		header('HTTP/1.0 404 Not Found');
	} else {
		if ( G::$cache ) {
			// See: http://public.yahoo.com/~radwin/talks/http-caching-apachecon2005.htm
			// See: http://www.mnot.net/cache_docs/
			$ttl = 2592000;  // 30 days
			$ttl = 31536000;  // 1 year
			$dtl = gmdate("D, d M Y H:i:s", time() + $ttl);
			header("Cache-Control: max-age=$ttl, s-maxage=$ttl, public");
			header("Expires: $dtl GMT");
			// header('Last-Modified: Mon, 29 Jun 1998 02:28:12 GMT');
			// header('ETag: "3e86-410-3596fbbc"'); // unique to each revision
			// TODO: many proxies won't cache if cookies: use different hostname.
		}
		header('Content-type: ' . $mime_type);
		if ( $isPHP ) {
			require $file;
		} else {
			header('Content-length: ' . filesize($file));
			readfile($file);
		}
	}
}
