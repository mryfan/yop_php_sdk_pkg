<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Trade;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Trade\Model as Model;

class TradeClientTest extends TestCase
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
        self::$client = TradeClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function orderTest()
    {
        $request = new Model\OrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount("100.50");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setSubOrderDetail("subOrderDetail_example");
        $request->setExpiredTime("expiredTime_example");
        $request->setRedirectUrl("redirectUrl_example");
        $request->setCsUrl("csUrl_example");
        $request->setBusinessInfo("businessInfo_example");
        try{
            $response = self::$client->order($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->order: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function orderCloseTest()
    {
        $request = new Model\OrderCloseRequest();

        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->orderClose($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->orderClose: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function orderCombineQueryTest()
    {
        $request = new Model\OrderCombineQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->orderCombineQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->orderCombineQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function orderQueryTest()
    {
        $request = new Model\OrderQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->orderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->orderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function receiptDownloadTest()
    {
        $request = new Model\ReceiptDownloadRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->receiptDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function refundTest()
    {
        $request = new Model\RefundRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("order123456789");
        $request->setRefundRequestId("refundorder987654");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setRefundAmount("88.88");
        $request->setDescription("用户申请退货并退款");
        $request->setMemo("memo_example");
        $request->setRefundAccountType("FUND_ACCOUNT");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setYpPromotionRefundInfo("ypPromotionRefundInfo_example");
        try{
            $response = self::$client->refund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function refundEndTest()
    {
        $request = new Model\RefundEndRequest();

        $request->setOrderId("orderId123456");
        $request->setRefundRequestId("refund123456");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->refundEnd($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundEnd: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function refundFastTest()
    {
        $request = new Model\RefundFastRequest();

        $request->setOrderId("order123456789");
        $request->setRefundRequestId("refundorder987654321");
        $request->setRefundAmount("88.88");
        $request->setDescription("用户申请退货");
        $request->setRefundAccountType("FUND_ACCOUNT");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setCardInfo("{\"remitBankCardNo\":\"上送持卡人卡号\", \"remitCardName\":\"上送持卡人姓名\", \"remitCardType\":\"上送卡类型\"}");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->refundFast($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundFast: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function refundQueryTest()
    {
        $request = new Model\RefundQueryRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setOrderId("orderId_example");
        $request->setRefundRequestId("refundRequestId_example");
        $request->setUniqueRefundNo("uniqueRefundNo_example");
        try{
            $response = self::$client->refundQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function refundSupplyTest()
    {
        $request = new Model\RefundSupplyRequest();

        $request->setOrderId("order123456789");
        $request->setRefundRequestId("refundorder987654321");
        $request->setCardInfo("{\"remitBankCardNo\":\"上送持卡人卡号\", \"remitCardName\":\"上送持卡人姓名\", \"remitCardType\":\"上送卡类型\"}");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->refundSupply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling TradeClient->refundSupply: ', $e->getMessage(), PHP_EOL;
        }
    }
}
