<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
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