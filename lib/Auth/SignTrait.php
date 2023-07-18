<?php

namespace SellingPartnerApi\Auth;

use Psr\Http\Message\RequestInterface;
use SellingPartnerApi\Helpers\Date;

trait SignTrait
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * Create a canonical request
     * @return string
     */
    private function createCanonicalRequest()
    {
        $method = $this->request->getMethod();
        $canonicalPath = $this->createCanonicalPath();
        $canonicalQuery = $this->createCanonicalQuery();
        $headers = $this->createCanonicalHeaders();
        $canonicalHeaders = $headers[0];
        $canonicalHeaderKeys = $headers[1];
        $hashedBody = hash('sha256', $this->request->getBody());

        return sprintf(
            "%s\n%s\n%s\n%s\n%s\n%s",
            $method, $canonicalPath, $canonicalQuery, $canonicalHeaders,
            $canonicalHeaderKeys, $hashedBody
        );
    }

    /**
     * @return string
     */
    private function createCanonicalPath()
    {
        $path = $this->request->getUri()->getPath();
        $path = rawurlencode(ltrim($path, '/'));

        return '/' . str_replace('%2F', '/', $path);
    }

    /**
     * @return string
     */
    private function createCanonicalQuery()
    {
        $query = $this->request->getUri()->getQuery();
        if (!$query) {
            return '';
        }

        $params = [];
        parse_str($query, $params);
        ksort($params, SORT_STRING);
        array_walk($params, function (&$param) {
           if (is_array($param)) {
               sort($param, SORT_STRING);
           }
        });

        return http_build_query($params);
    }

    /**
     * @return array
     */
    private function createCanonicalHeaders()
    {
        $headers = $this->request->getHeaders();
        $headers = array_change_key_case($headers, CASE_LOWER);
        ksort($headers, SORT_STRING);

        $canonicalHeaders = [];
        $canonicalHeaderKeys = [];
        foreach ($headers as $key => $values) {
            $canonicalHeaderValues = [];
            foreach ($values as $value) {
                $canonicalHeaderValues[] = preg_replace('/(\s+)/', ' ', trim($value));
            }
            $canonicalHeaderValue = implode(',', $canonicalHeaderValues);
            $canonicalHeaders[] = "$key:$canonicalHeaderValue";
            $canonicalHeaderKeys[] = $key;
        }

        return [
            implode("\n", $canonicalHeaders),
            implode(";", $canonicalHeaderKeys),
        ];
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function createSignString()
    {
        $credentialScope = $this->createCredentialScope();
        $hashedCanonicalRequest = hash('sha256', $this->createCanonicalRequest());

        return sprintf(
            "%s\n%s\n%s\n%s",
            Auth::ALGORITHM_DESIGNATION,
            Date::utcDatetime(),
            $credentialScope,
            $hashedCanonicalRequest
        );
    }

    /**
     * @return string
     * @throws \Exception
     */
    private function createCredentialScope()
    {
        return sprintf(
            "%s/%s/%s/%s",
            Date::utcDate(),
            $this->endpoint->getRegion(),
            $this->getServiceName(),
            Auth::TERMINATION_STRING
        );
    }

    /**
     * @return string
     */
    private function getServiceName()
    {
        $host = $this->request->getUri()->getHost();

        return  (stripos($host, 'sts.') !== false) ? 'sts' : Auth::SERVICE_NAME;
    }

    /**
     * @return false|string
     * @throws \Exception
     */
    private function createSignature()
    {
        $signString = $this->createSignString();

        $date = hash_hmac('sha256', Date::utcDate(), "AWS4{$this->secretAccessKey}", true);
        $region = hash_hmac('sha256', $this->endpoint->getRegion(), $date, true);
        $service = hash_hmac('sha256', $this->getServiceName(), $region, true);
        $signing = hash_hmac('sha256', Auth::TERMINATION_STRING, $service, true);

        return hash_hmac('sha256', $signString, $signing);
    }

    /**
     * @return string
     * @throws \Exception
     */
    protected function createAuthorization()
    {
        $signature = $this->createSignature();
        $headers = $this->createCanonicalHeaders();
        $canonicalHeaderKeys = $headers[1];
        $credentialScope = $this->createCredentialScope();

        return sprintf(
            "%s Credential=%s/%s, SignedHeaders=%s, Signature=%s",
            Auth::ALGORITHM_DESIGNATION,
            $this->accessKeyId, $credentialScope,
            $canonicalHeaderKeys,
            $signature
        );
    }
}