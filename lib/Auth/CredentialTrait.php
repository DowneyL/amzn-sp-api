<?php

namespace SellingPartnerApi\Auth;

trait CredentialTrait
{
    /**
     * @var Credential
     */
    private $credential;

    /**
     * @param $token
     * @param $expire
     * @return Credential
     */
    protected function createCredential($token = null, $expire = null)
    {
        if (is_numeric($expire) && ($expire < strtotime('now'))) {
            $expire = time() + $expire;
        }

        return new Credential($this->accessKeyId, $this->secretAccessKey, $token, $expire);
    }

    /**
     * @param Credential $credential
     * @return void
     */
    protected function setCredential(Credential $credential)
    {
        $this->credential = $credential;
    }

    /**
     * @return Credential|null
     */
    protected function getCredential()
    {
        return $this->credential;
    }

    /**
     * @return bool
     */
    protected function isCredentialExpired()
    {
        if ($this->credential === null) {
            return true;
        }

        return $this->credential->isExpired();
    }

    /**
     * @return bool
     */
    protected function isCredentialExpireSoon()
    {
        if ($this->credential === null) {
            return true;
        }

        return $this->credential->isExpireSoon();
    }
}