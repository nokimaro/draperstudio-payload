<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Tests\Payload\Writers;

use DraperStudio\Payload\Writers\Writer;

/**
 * This is the abstract test case class.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
abstract class AbstractTestCase extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function should_return_writer()
    {
        $writer = $this->getWriter();

        $this->assertInstanceOf(Writer::class, $writer);
    }

    /** @test */
    public function should_write_file()
    {
        $writer = $this->getWriter();

        $tempFile = tempnam(sys_get_temp_dir(), 'prefix');

        $result = $writer->write($tempFile, ['hello' => 'world']);

        $this->assertTrue($result);
    }

    abstract protected function getWriter();
}
