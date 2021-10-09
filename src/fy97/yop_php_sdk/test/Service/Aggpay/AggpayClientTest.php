<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Aggpay;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model as Model;

class AggpayClientTest extends TestCase
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
        self::$client = AggpayClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function payTest()
    {
        $request = new Model\PayRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime("2021-10-09 10:09:44");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setPayWay("MERCHANT_SCAN");
        $request->setChannel("WECHAT");
        $request->setScene("OFFLINE");
        $request->setAuthCode("authCode123");
        $request->setAppId("appId12345");
        $request->setUserIp("123.123.123.123");
        $request->setTerminalId("00000000");
        $request->setTerminalSceneInfo("{\"storeId\":\"门店id\",\"storeName\":\"门店名称\",\"operatorId\":\"商户操作员编号\",\"alipayStoreId\":\"支付宝的店铺编号\",\"areaCode\":\"门店行政区划码\",\"address\":\"门店详细地址\"}");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setCsUrl("csUrl_example");
        $request->setEncryptedPINData("encryptedPINData_example");
        $request->setPayerAccountNo("payerAccountNo_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        try{
            $response = self::$client->pay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->pay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function prePayTest()
    {
        $request = new Model\PrePayRequest();

        $request->setParentMerchantNo("10040012345");
        $request->setMerchantNo("10040054321");
        $request->setOrderId("orderId12345");
        $request->setOrderAmount(0.01);
        $request->setExpiredTime("2021-10-09 10:09:44");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setRedirectUrl("https://notify.merchant.com/xxx");
        $request->setMemo("memo_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setFundProcessType("REAL_TIME");
        $request->setPayWay("USER_SCAN");
        $request->setChannel("ALIPAY");
        $request->setScene("OFFLINE");
        $request->setAppId("appId12345");
        $request->setUserId("userId12345");
        $request->setUserIp("123.123.123.123");
        $request->setChannelSpecifiedInfo("{\"hbFqNum\":\"3\",\"hbFqSellerPercent\":\"0\",\"sysServiceProviderId\":\"\"}");
        $request->setChannelPromotionInfo("channelPromotionInfo_example");
        $request->setIdentityInfo("{\"identityVerifyType\":\"Y\",\"payerIdType\":\"IDENTITY_CARD\",\"payerNumber\":\"234512198006252456\",\"payerName\":\"名字\",\"payerPhone\":\"15798765432\"}");
        $request->setLimitCredit("N");
        $request->setToken("83BCDF29CFACB4411533080B67864EF8C907CCDC5E10A707C285FEA10CDB8221");
        $request->setUniqueOrderNo("1012202101070000001989946571");
        $request->setCsUrl("csUrl_example");
        $request->setAccountLinkInfo("{accountProvider\":\"BOL\",\"token\":\"xxx\"}");
        $request->setYpPromotionInfo("[{\"amount\":\"0.01\",\"type\":\"CUSTOM_REDUCTION\"}]");
        try{
            $response = self::$client->prePay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->prePay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function violationWechatChannelTest()
    {
        $request = new Model\ViolationWechatChannelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setBeginTime("2021-10-09 10:09:44");
        $request->setEndTime("2021-10-09 10:09:44");
        try{
            $response = self::$client->violationWechatChannel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->violationWechatChannel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigAddTest()
    {
        $request = new Model\WechatConfigAddRequest();

        $request->setBody(new \Fy\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigRequestDTOParam());
        try{
            $response = self::$client->wechatConfigAdd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAdd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigAdd_0Test()
    {
        $request = new Model\WechatConfigAdd0Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setTradeAuthDirList("[\"http://www.yeepay.com/\",\"http://www.yeepay.com/\"]");
        $request->setAppIdList("[{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"OFFICIAL_ACCOUNT\",\"subscribeAppId\":\"subscribeAppId\"},{\"appId\":\"appId\",\"appSecret\":\"appSecret\",\"appIdType\":\"MINI_PROGRAM\",\"subscribeAppId\":\"subscribeAppId\"}]");
        try{
            $response = self::$client->wechatConfigAdd_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigAdd_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigQueryTest()
    {
        $request = new Model\WechatConfigQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAppIdType("appIdType_example");
        try{
            $response = self::$client->wechatConfigQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function wechatConfigQuery_0Test()
    {
        $request = new Model\WechatConfigQuery0Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAppIdType("appIdType_example");
        try{
            $response = self::$client->wechatConfigQuery_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AggpayClient->wechatConfigQuery_0: ', $e->getMessage(), PHP_EOL;
        }
    }
}
