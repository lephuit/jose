<?php

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2017 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Encryption;

use Jose\Component\Core\JWK;

/**
 * Class EncryptionInstruction.
 */
final class Recipient
{
    /**
     * @var array
     */
    private $headers = [];

    /**
     * @var null|string
     */
    private $encrypted_key = null;

    /**
     * @var JWK
     */
    private $recipient_key = null;

    /**
     * @param array       $headers
     * @param string|null $encrypted_key
     *
     * @return Recipient
     */
    public static function createRecipientFromLoadedJWE(array $headers, $encrypted_key)
    {
        $recipient = new self();
        $recipient->headers = $headers;
        $recipient->encrypted_key = $encrypted_key;

        return $recipient;
    }

    /**
     * @param JWK   $recipient_key
     * @param array $headers
     *
     * @return Recipient
     */
    public static function createRecipient(JWK $recipient_key, array $headers = [])
    {
        $recipient = new self();
        $recipient->headers = $headers;
        $recipient->recipient_key = $recipient_key;

        return $recipient;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Returns the value of the unprotected header of the specified key.
     *
     * @param string $key The key
     *
     * @return mixed|null Header value
     */
    public function getHeader($key)
    {
        if ($this->hasHeader($key)) {
            return $this->headers[$key];
        }
        throw new \InvalidArgumentException(sprintf('The header "%s" does not exist.', $key));
    }

    /**
     * @param string $key The key
     *
     * @return bool
     */
    public function hasHeader($key)
    {
        return array_key_exists($key, $this->headers);
    }

    /**
     * @return string
     */
    public function getEncryptedKey()
    {
        return $this->encrypted_key;
    }

    /**
     * @return JWK
     */
    public function getRecipientKey()
    {
        return $this->recipient_key;
    }
}
