<?php

/*
 * This file is part of the AuthBundle package.
 *
 * Copyright 2016, Kate Gray <opensource@codebykate.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KateGray\AuthBundle\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CAS1LoginTest extends WebTestCase
{
    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cas/login');
    }
}
