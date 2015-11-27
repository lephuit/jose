<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2015 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Behaviour;

use Jose\JWKManagerInterface;

trait HasJWKManager
{
    /**
     * @var \Jose\JWKManagerInterface
     */
    private $jwk_manager;

    /**
     * @param \Jose\JWKManagerInterface $jwk_manager
     */
    private function setJWKManager(JWKManagerInterface $jwk_manager)
    {
        $this->jwk_manager = $jwk_manager;
    }

    /**
     * @return \Jose\JWKManagerInterface
     */
    private function getJWKManager()
    {
        return $this->jwk_manager;
    }
}
