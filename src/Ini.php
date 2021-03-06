<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload;

use DraperStudio\Payload\Normalisers\IniNormaliser;

/**
 * Class Ini.
 */
class Ini
{
    /**
     * @var IniNormaliser
     */
    protected $normaliser;

    /**
     * Ini constructor.
     */
    public function __construct()
    {
        $this->normaliser = new IniNormaliser();
    }

    /**
     * @param $input
     *
     * @return string
     */
    public function serialise($input)
    {
        return $this->normaliser->serialiser()->serialise($input);
    }

    /**
     * @param $input
     * @param null $class
     *
     * @return mixed
     */
    public function unserialise($input, $class = null)
    {
        return $this->normaliser->unserialiser()->unserialise($input, $class);
    }

    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    public function write($path, $input)
    {
        return $this->normaliser->writer()->write($path, $input);
    }

    /**
     * @param $path
     * @param null $class
     *
     * @return mixed
     */
    public function read($path, $class = null)
    {
        return $this->normaliser->reader()->read($path, $class);
    }
}
