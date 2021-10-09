<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class OAuth2TokenGenerateTokenRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $userId;

    /**
     * Gets userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Sets userId
     *
     * @param string $userId
     * @return OAuth2TokenGenerateTokenRequest
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    public static function getOperationId()
    {
        return 'oAuth2TokenGenerateToken';
    }


}
