#!/usr/bin/env php
<?php
array_shift($argv);
foreach ($argv as $idx => $arg) {
	if (preg_match('/NetBeansSuite.php$/', $arg)) {
		$argv[$idx] = __DIR__ . DIRECTORY_SEPARATOR . 'NetBeansSuite.php' ;
	}
}
$command = '/usr/bin/phpunit';
$args = join(' ', $argv);
 
passthru($command . ' ' . $args);