<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class FileUploadRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $identityType;
    /**
     * @var string
     */
    private $identityId;
    /**
     * @var string
     */
    private $idType;
    /**
     * @var string
     */
    private $idNO;
    /**
     * @var string
     */
    private $fileType;
    /**
     * @var Resource
     */
    private $image;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return FileUploadRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets identityType
     *
     * @return string
     */
    public function getIdentityType()
    {
        return $this->identityType;
    }

    /**
     * Sets identityType
     *
     * @param string $identityType
     * @return FileUploadRequest
     */
    public function setIdentityType($identityType)
    {
        $this->identityType = $identityType;
        return $this;
    }
    /**
     * Gets identityId
     *
     * @return string
     */
    public function getIdentityId()
    {
        return $this->identityId;
    }

    /**
     * Sets identityId
     *
     * @param string $identityId
     * @return FileUploadRequest
     */
    public function setIdentityId($identityId)
    {
        $this->identityId = $identityId;
        return $this;
    }
    /**
     * Gets idType
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * Sets idType
     *
     * @param string $idType
     * @return FileUploadRequest
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
        return $this;
    }
    /**
     * Gets idNO
     *
     * @return string
     */
    public function getIdNO()
    {
        return $this->idNO;
    }

    /**
     * Sets idNO
     *
     * @param string $idNO
     * @return FileUploadRequest
     */
    public function setIdNO($idNO)
    {
        $this->idNO = $idNO;
        return $this;
    }
    /**
     * Gets fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets fileType
     *
     * @param string $fileType
     * @return FileUploadRequest
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }
    /**
     * Gets image
     *
     * @return Resource
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets image
     *
     * @param Resource $image
     * @return FileUploadRequest
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    public static function getOperationId()
    {
        return 'fileUpload';
    }


}
