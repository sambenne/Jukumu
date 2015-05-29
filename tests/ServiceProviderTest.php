<?php

/*
* This file is part of Jukumu.
*
* (c) Sam Bennett <sam@cachethq.io>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SamBenne\Tests\Jukumu;

use GrahamCampbell\TestBench\Traits\ServiceProviderTestCaseTrait;

/**
 * This is the service provider test class.
 *
 * @author Graham Campbell <graham@cachethq.io>
 */
class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTestCaseTrait;

    public function testJukumuIsInjectable()
    {
        $this->assertIsInjectable('SamBenne\Jukumu\Jukumu');
    }
}
