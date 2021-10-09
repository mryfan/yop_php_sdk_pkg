<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxyFaceLogonRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $orderToken;
    /**
     * @var string
     */
    private $faceImage;
    /**
     * @var string
     */
    private $collectType;
    /**
     * @var string
     */
    private $collectDevice;
    /**
     * @var string
     */
    private $bizSystem;
    /**
     * @var string
     */
    private $mtToken;
    /**
     * @var string
     */
    private $memberNo;

    /**
     * Gets orderToken
     *
     * @return string
     */
    public function getOrderToken()
    {
        return $this->orderToken;
    }

    /**
     * Sets orderToken
     *
     * @param string $orderToken
     * @return FacepayProxyFaceLogonRequest
     */
    public function setOrderToken($orderToken)
    {
        $this->orderToken = $orderToken;
        return $this;
    }
    /**
     * Gets faceImage
     *
     * @return string
     */
    public function getFaceImage()
    {
        return $this->faceImage;
    }

    /**
     * Sets faceImage
     *
     * @param string $faceImage
     * @return FacepayProxyFaceLogonRequest
     */
    public function setFaceImage($faceImage)
    {
        $this->faceImage = $faceImage;
        return $this;
    }
    /**
     * Gets collectType
     *
     * @return string
     */
    public function getCollectType()
    {
        return $this->collectType;
    }

    /**
     * Sets collectType
     *
     * @param string $collectType
     * @return FacepayProxyFaceLogonRequest
     */
    public function setCollectType($collectType)
    {
        $this->collectType = $collectType;
        return $this;
    }
    /**
     * Gets collectDevice
     *
     * @return string
     */
    public function getCollectDevice()
    {
        return $this->collectDevice;
    }

    /**
     * Sets collectDevice
     *
     * @param string $collectDevice
     * @return FacepayProxyFaceLogonRequest
     */
    public function setCollectDevice($collectDevice)
    {
        $this->collectDevice = $collectDevice;
        return $this;
    }
    /**
     * Gets bizSystem
     *
     * @return string
     */
    public function getBizSystem()
    {
        return $this->bizSystem;
    }

    /**
     * Sets bizSystem
     *
     * @param string $bizSystem
     * @return FacepayProxyFaceLogonRequest
     */
    public function setBizSystem($bizSystem)
    {
        $this->bizSystem = $bizSystem;
        return $this;
    }
    /**
     * Gets mtToken
     *
     * @return string
     */
    public function getMtToken()
    {
        return $this->mtToken;
    }

    /**
     * Sets mtToken
     *
     * @param string $mtToken
     * @return FacepayProxyFaceLogonRequest
     */
    public function setMtToken($mtToken)
    {
        $this->mtToken = $mtToken;
        return $this;
    }
    /**
     * Gets memberNo
     *
     * @return string
     */
    public function getMemberNo()
    {
        return $this->memberNo;
    }

    /**
     * Sets memberNo
     *
     * @param string $memberNo
     * @return FacepayProxyFaceLogonRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxyFaceLogon';
    }


}
