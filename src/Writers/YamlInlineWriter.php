<?php

/*
 * This file is part of Payload.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Payload\Writers;

use DraperStudio\Payload\Serialisers\YamlInlineSerialiser;

/**
 * Class YamlInlineWriter.
 */
class YamlInlineWriter extends Writer
{
    /**
     * @param $path
     * @param $input
     *
     * @return bool
     */
    public function write($path, $input)
    {
        return $this->put($path, (new YamlInlineSerialiser())->serialise($input));
    }
}
