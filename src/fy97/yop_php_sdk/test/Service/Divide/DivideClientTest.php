<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Divide;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Divide\Model as Model;

class DivideClientTest extends TestCase
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
        self::$client = DivideClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function applyTest()
    {
        $request = new Model\ApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetail("[{\"ledgerNo\":\"10000466938\",\"amount\":\"0.01\",\"divideDetailDesc\":\"供应商结算\" },{\"ledgerNo\":\"10000466123\",\"amount\":\"0.02\",\"divideDetailDesc\":\"供应商结算\" }]");
        $request->setAccountLinkInfo("{\"serviceProvider\":\"YEEPAY\",\"ipAddress\":\"192.168.1.1\",\"divideType\":\"1\",\"token\":\"token\"}");
        try{
            $response = self::$client->apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function backTest()
    {
        $request = new Model\BackRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideBackDetail("[{\"amount\":\"3.45\",\"divideBackReason\":\"退回原因01\",\"divideDetailNo\":\"1003232421231232\"},{\"amount\":\"2.35\",\"divideBackReason\":\"退回原因02\",\"divideDetailNo\":\"200323242123343\"}]");
        try{
            $response = self::$client->back($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->back: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function backQueryTest()
    {
        $request = new Model\BackQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideBackRequestId("divideBackRequestId_example");
        try{
            $response = self::$client->backQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->backQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function completeTest()
    {
        $request = new Model\CompleteRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setDivideDetailDesc("divideDetailDesc_example");
        try{
            $response = self::$client->complete($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->complete: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function queryTest()
    {
        $request = new Model\QueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->query: ', $e->getMessage(), PHP_EOL;
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
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        $request->setDivideRequestId("divideRequestId_example");
        $request->setLedgerNo("ledgerNo_example");
        try{
            $response = self::$client->receiptDownload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling DivideClient->receiptDownload: ', $e->getMessage(), PHP_EOL;
        }
    }
}
