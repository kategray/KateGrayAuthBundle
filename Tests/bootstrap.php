<?php
/*
 * This file is part of the AuthBundle package.
 *
 * Copyright 2016, Kate Gray <opensource@codebykate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
$file = __DIR__.'/../vendor/autoload.php';
if (!file_exists($file)) {
    throw new \RuntimeException('Please run "composer install" before phpunit.');
}
$autoload = require_once $file;
