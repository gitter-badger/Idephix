<?php
namespace Idephix;

class ContextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_allow_to_retrieve_value_as_path()
    {
        $context = Context::fromArray(array('foo' => '/var/www', 'bar' => '/var/www/'));

        $this->assertEquals('/var/www/', $context->getAsPath('foo'));
        $this->assertEquals('/var/www/', $context->getAsPath('bar'));
    }
}
