<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Facepay;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Facepay\Model as Model;

class FacepayClientTest extends TestCase
{


    private static $client;

    public static function setUpBeforeClass()
    {
        $data = \Fy\GuzzleHttp\json_decode('{"app_key":"app_Fe51qCyZWcEnDMtK","aes_secret_key":"ytrbMFjRqLpLgY58J6LN9Q==","server_root":"http://ycetest.yeepay.com:30228/yop-center","yos_server_root":"http://ycetest.yeepay.com:30228/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4g7dPL+CBeuzFmARI2GFjZpKODUROaMG+E6wdNfv5lhPqC3jjTIeljWU8AiruZLGRhl92QWcTjb3XonjaV6k9rf9adQtyv2FLS7bl2Vz2WgjJ0FJ5/qMaoXaT+oAgWFk2GypyvoIZsscsGpUStm6BxpWZpbPrGJR0N95un/130cQI9VCmfvgkkCaXt7TU1BbiYzkc8MDpLScGm/GUCB2wB5PclvOxvf5BR/zNVYywTEFmw2Jo0hIPPSWB5Yyf2mx950Fx8da56co/FxLdMwkDOO51Qg3fbaExQDVzTm8Odi++wVJEP1y34tlmpwFUVbAKIEbyyELmi/2S6GG0j9vNwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":10000,"read_timeout":30000,"max_conn_total":2000,"max_conn_per_route":1000}}', true);
        try {
            $appSdkConfig = new AppSdkConfig($data);
        } catch (YopClientException $e) {
            throw $e;
        }
        self::$client = FacepayClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function facepayProxyBindConfirmSmsTest()
    {
        $request = new Model\FacepayProxyBindConfirmSmsRequest();

        $request->setBindBizNo("bindBizNo_example");
        $request->setSmsCode("smsCode_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyBindConfirmSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyBindConfirmSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyBindFirstCardTest()
    {
        $request = new Model\FacepayProxyBindFirstCardRequest();

        $request->setBankCardNo("bankCardNo_example");
        $request->setPhoneNumber("phoneNumber_example");
        $request->setCvv2("cvv2_example");
        $request->setExpireDate("expireDate_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyBindFirstCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyBindFirstCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyBindSendSmsTest()
    {
        $request = new Model\FacepayProxyBindSendSmsRequest();

        $request->setBindBizNo("bindBizNo_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyBindSendSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyBindSendSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyCertificateNoAuthTest()
    {
        $request = new Model\FacepayProxyCertificateNoAuthRequest();

        $request->setOrderToken("orderToken_example");
        $request->setFaceRequestNo("faceRequestNo_example");
        $request->setCertificateNoLastN("certificateNoLastN_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyCertificateNoAuth($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyCertificateNoAuth: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyCheckLogonSmscodeTest()
    {
        $request = new Model\FacepayProxyCheckLogonSmscodeRequest();

        $request->setOrderToken("orderToken_example");
        $request->setFaceRequestNo("faceRequestNo_example");
        $request->setSmsCode("smsCode_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyCheckLogonSmscode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyCheckLogonSmscode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyConfirmFirstCardSmscodeTest()
    {
        $request = new Model\FacepayProxyConfirmFirstCardSmscodeRequest();

        $request->setBindBizNo("bindBizNo_example");
        $request->setSmsCode("smsCode_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyConfirmFirstCardSmscode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyConfirmFirstCardSmscode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyConfirmVerifySmscodeTest()
    {
        $request = new Model\FacepayProxyConfirmVerifySmscodeRequest();

        $request->setSmsCode("smsCode_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyConfirmVerifySmscode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyConfirmVerifySmscode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyCreateBindCardTest()
    {
        $request = new Model\FacepayProxyCreateBindCardRequest();

        $request->setBankCardNo("bankCardNo_example");
        $request->setPhoneNumber("phoneNumber_example");
        $request->setCvv2("cvv2_example");
        $request->setExpireDate("expireDate_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyCreateBindCard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyCreateBindCard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyCreateOrderTest()
    {
        $request = new Model\FacepayProxyCreateOrderRequest();

        $request->setOrderToken("orderToken_example");
        $request->setOrderAmount("orderAmount_example");
        $request->setUniquePayNo("uniquePayNo_example");
        $request->setBindBizNo("bindBizNo_example");
        $request->setExpireDate("expireDate_example");
        $request->setCvv2("cvv2_example");
        $request->setSmsCode("smsCode_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyCreateOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyCreateOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyFaceLogonTest()
    {
        $request = new Model\FacepayProxyFaceLogonRequest();

        $request->setOrderToken("orderToken_example");
        $request->setFaceImage("faceImage_example");
        $request->setCollectType("collectType_example");
        $request->setCollectDevice("collectDevice_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyFaceLogon($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyFaceLogon: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyOpenFaceAccountTest()
    {
        $request = new Model\FacepayProxyOpenFaceAccountRequest();

        $request->setFaceImageFirst("faceImageFirst_example");
        $request->setFaceImageSecond("faceImageSecond_example");
        $request->setFaceImageThird("faceImageThird_example");
        $request->setCollectType("collectType_example");
        $request->setCollectDevice("collectDevice_example");
        $request->setOrderToken("orderToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyOpenFaceAccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyOpenFaceAccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyPaySendSmsTest()
    {
        $request = new Model\FacepayProxyPaySendSmsRequest();

        $request->setUniquePayNo("uniquePayNo_example");
        $request->setBindBizNo("bindBizNo_example");
        $request->setCvv2("cvv2_example");
        $request->setExpireDate("expireDate_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyPaySendSms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyPaySendSms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyQueryBindCardInfoTest()
    {
        $request = new Model\FacepayProxyQueryBindCardInfoRequest();

        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyQueryBindCardInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyQueryBindCardInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyQueryOrderAfterTest()
    {
        $request = new Model\FacepayProxyQueryOrderAfterRequest();

        $request->setOrderToken("orderToken_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyQueryOrderAfter($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyQueryOrderAfter: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyQueryOrderBeforeTest()
    {
        $request = new Model\FacepayProxyQueryOrderBeforeRequest();

        $request->setBody(new \Fy\Yeepay\Yop\Sdk\Service\Facepay\Model\FacepayProxyQueryOrderBeforeOrderBeforeRequestParam());
        try{
            $response = self::$client->facepayProxyQueryOrderBefore($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyQueryOrderBefore: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxySendFirstCardSmscodeTest()
    {
        $request = new Model\FacepayProxySendFirstCardSmscodeRequest();

        $request->setBindBizNo("bindBizNo_example");
        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxySendFirstCardSmscode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxySendFirstCardSmscode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxySendLogonSmscodeTest()
    {
        $request = new Model\FacepayProxySendLogonSmscodeRequest();

        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxySendLogonSmscode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxySendLogonSmscode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxySendVerifySmscodeTest()
    {
        $request = new Model\FacepayProxySendVerifySmscodeRequest();

        $request->setBizNo("bizNo_example");
        $request->setBizToken("bizToken_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxySendVerifySmscode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxySendVerifySmscode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function facepayProxyVerifyUserInfoTest()
    {
        $request = new Model\FacepayProxyVerifyUserInfoRequest();

        $request->setName("name_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setBizSystem("bizSystem_example");
        $request->setMtToken("mtToken_example");
        $request->setMemberNo("memberNo_example");
        try{
            $response = self::$client->facepayProxyVerifyUserInfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->facepayProxyVerifyUserInfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function oAuth2TokenGenerateTokenTest()
    {
        $request = new Model\OAuth2TokenGenerateTokenRequest();

        $request->setUserId("userId_example");
        try{
            $response = self::$client->oAuth2TokenGenerateToken($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->oAuth2TokenGenerateToken: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function sosDeleteBindNoTest()
    {
        $request = new Model\SosDeleteBindNoRequest();

        $request->setString0("string0_example");
        $request->setString1("string1_example");
        try{
            $response = self::$client->sosDeleteBindNo($request);
        }catch (\Exception $e) {
            echo 'Exception when calling FacepayClient->sosDeleteBindNo: ', $e->getMessage(), PHP_EOL;
        }
    }
}
