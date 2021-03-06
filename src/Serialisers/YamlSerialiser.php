<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Serialisers;

use DraperStudio\Payload\Contracts\Serialiser;
use Symfony\Component\Yaml\Dumper;

/**
 * Class YamlSerialiser.
 */
class YamlSerialiser implements Serialiser
{
    /**
     * @param $input
     *
     * @return string
     */
    public function serialise($input)
    {
        return (new Dumper())->dump($input);
    }
}
