<?php

namespace SellingPartnerApi\Auth;

class Credential
{
    const EXPIRE_SOON_SECONDS = 60;

    /**
     * The AWS access key id
     * @var string
     */
    private $accessKeyId;

    /**
     * The AWS secret access key
     * @var string
     */
    private $secretAccessKey;

    /**
     * @var string
     */
    private $token;

    /**
     * A UNIX timestamp for when credential expire
     * @var int
     */
    private $expireAt;

    /**
     * @param $accessKeyId
     * @param $secretAccessKey
     * @param $token
     * @param $expireAt
     */
    public function __construct($accessKeyId, $secretAccessKey, $token = null, $expireAt = null)
    {
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
        $this->token = $token;
        $this->expireAt = $expireAt;
    }

    /**
     * @return string
     */
    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    /**
     * @return string
     */
    public function getSecretAccessKey()
    {
        return $this->secretAccessKey;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @return int
     */
    public function getExpireAt()
    {
        return $this->expireAt;
    }

    /**
     * @return bool
     */
    public function isExpired()
    {
        if ($this->expireAt === null) {
            return false;
        }

        return (time() >= $this->expireAt);
    }

    /**
     * @return bool
     */
    public function isExpireSoon()
    {
        if ($this->expireAt === null) {
            return false;
        }

        return (time() >= ($this->expireAt - static::EXPIRE_SOON_SECONDS));
    }
}