<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2017 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Signature\Algorithm;

/**
 * This class handles signatures using HMAC.
 * It supports HS384;.
 */
/**
 * Class HS384.
 */
final class HS384 extends HMAC
{
    /**
     * @return string
     */
    protected function getHashAlgorithm(): string
    {
        return 'sha384';
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return 'HS384';
    }
}