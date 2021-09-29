<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay\Model;


use Fy\Yeepay\Yop\Sdk\Model\BaseRequest;

class SosDeleteBindNoRequest extends BaseRequest
{
    /**
     * @var string
     */
    private $string0;
    /**
     * @var string
     */
    private $string1;

    /**
     * Gets string0
     *
     * @return string
     */
    public function getString0()
    {
        return $this->string0;
    }

    /**
     * Sets string0
     *
     * @param string $string0
     * @return SosDeleteBindNoRequest
     */
    public function setString0($string0)
    {
        $this->string0 = $string0;
        return $this;
    }
    /**
     * Gets string1
     *
     * @return string
     */
    public function getString1()
    {
        return $this->string1;
    }

    /**
     * Sets string1
     *
     * @param string $string1
     * @return SosDeleteBindNoRequest
     */
    public function setString1($string1)
    {
        $this->string1 = $string1;
        return $this;
    }

    public static function getOperationId()
    {
        return 'sosDeleteBindNo';
    }


}
