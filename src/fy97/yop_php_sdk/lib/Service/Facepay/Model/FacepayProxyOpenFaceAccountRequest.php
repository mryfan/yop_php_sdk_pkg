<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FacepayProxyOpenFaceAccountRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $faceImageFirst;
    /**
     * @var string
     */
    private $faceImageSecond;
    /**
     * @var string
     */
    private $faceImageThird;
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
    private $orderToken;
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
     * Gets faceImageFirst
     *
     * @return string
     */
    public function getFaceImageFirst()
    {
        return $this->faceImageFirst;
    }

    /**
     * Sets faceImageFirst
     *
     * @param string $faceImageFirst
     * @return FacepayProxyOpenFaceAccountRequest
     */
    public function setFaceImageFirst($faceImageFirst)
    {
        $this->faceImageFirst = $faceImageFirst;
        return $this;
    }
    /**
     * Gets faceImageSecond
     *
     * @return string
     */
    public function getFaceImageSecond()
    {
        return $this->faceImageSecond;
    }

    /**
     * Sets faceImageSecond
     *
     * @param string $faceImageSecond
     * @return FacepayProxyOpenFaceAccountRequest
     */
    public function setFaceImageSecond($faceImageSecond)
    {
        $this->faceImageSecond = $faceImageSecond;
        return $this;
    }
    /**
     * Gets faceImageThird
     *
     * @return string
     */
    public function getFaceImageThird()
    {
        return $this->faceImageThird;
    }

    /**
     * Sets faceImageThird
     *
     * @param string $faceImageThird
     * @return FacepayProxyOpenFaceAccountRequest
     */
    public function setFaceImageThird($faceImageThird)
    {
        $this->faceImageThird = $faceImageThird;
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
     * @return FacepayProxyOpenFaceAccountRequest
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
     * @return FacepayProxyOpenFaceAccountRequest
     */
    public function setCollectDevice($collectDevice)
    {
        $this->collectDevice = $collectDevice;
        return $this;
    }
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
     * @return FacepayProxyOpenFaceAccountRequest
     */
    public function setOrderToken($orderToken)
    {
        $this->orderToken = $orderToken;
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
     * @return FacepayProxyOpenFaceAccountRequest
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
     * @return FacepayProxyOpenFaceAccountRequest
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
     * @return FacepayProxyOpenFaceAccountRequest
     */
    public function setMemberNo($memberNo)
    {
        $this->memberNo = $memberNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'facepayProxyOpenFaceAccount';
    }


}
