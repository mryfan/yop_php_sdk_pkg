<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Mer;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Mer\Model as Model;

class MerClientTest extends TestCase
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
        self::$client = MerClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function authStateQueryTest()
    {
        $request = new Model\AuthStateQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setReportMerchantNo("reportMerchantNo_example");
        $request->setFeeType("feeType_example");
        try{
            $response = self::$client->authStateQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->authStateQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function authorizeRelieveTest()
    {
        $request = new Model\AuthorizeRelieveRequest();

        $request->setAuthorizeMerchantNo("10040039111");
        $request->setBizType("WITHDRAW");
        try{
            $response = self::$client->authorizeRelieve($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->authorizeRelieve: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function authorizeSignTest()
    {
        $request = new Model\AuthorizeSignRequest();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        $request->setAuthorizeMerchantNo("10040039111");
        $request->setBizType("WITHDRAW");
        $request->setNotifyUrl("http://www.notifyUrl.com");
        try{
            $response = self::$client->authorizeSign($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->authorizeSign: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantDisposeQueryTest()
    {
        $request = new Model\MerchantDisposeQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        try{
            $response = self::$client->merchantDisposeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantDisposeUnfreezeTest()
    {
        $request = new Model\MerchantDisposeUnfreezeRequest();

        $request->setRequestNo("requestNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->merchantDisposeUnfreeze($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantWechatauthCancelTest()
    {
        $request = new Model\MerchantWechatauthCancelRequest();

        $request->setApplymentId("applymentId_example");
        $request->setRequestNo("requestNo_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        try{
            $response = self::$client->merchantWechatauthCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function merchantWechatauthQueryTest()
    {
        $request = new Model\MerchantWechatauthQueryRequest();

        $request->setApplymentId("applymentId_example");
        $request->setSubMerchantNo("subMerchantNo_example");
        $request->setReportFee("reportFee_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->merchantWechatauthQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function notifyRepeatTest()
    {
        $request = new Model\NotifyRepeatRequest();

        $request->setRequestNo("requestNo_example");
        $request->setApplicationNo("applicationNo_example");
        $request->setType("type_example");
        try{
            $response = self::$client->notifyRepeat($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->notifyRepeat: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productFeeModifyTest()
    {
        $request = new Model\ProductFeeModifyRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
        try{
            $response = self::$client->productFeeModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productFeeQueryTest()
    {
        $request = new Model\ProductFeeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");
        try{
            $response = self::$client->productFeeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productFeeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function productIncrementSettleOpenTest()
    {
        $request = new Model\ProductIncrementSettleOpenRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->productIncrementSettleOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->productIncrementSettleOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerQueryTest()
    {
        $request = new Model\RegisterQueryRequest();

        $request->setRequestNo("0adc579914d541f8baa3be75387846f1");
        try{
            $response = self::$client->registerQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerSaasMerchantTest()
    {
        $request = new Model\RegisterSaasMerchantRequest();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("ORDINARY_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
        $request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
        $request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" }");
        $request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        try{
            $response = self::$client->registerSaasMerchant($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerSaasMerchant: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function registerSaasMicroTest()
    {
        $request = new Model\RegisterSaasMicroRequest();

        $request->setRequestNo("YBRWQQH20210622XXXXXX");
        $request->setBusinessRole("SETTLED_MERCHANT");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
        $request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
        $request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\",  \"mobile\":\"法人手机号\"  }");
        $request->setAccountInfo("{\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCode\":\"开户总行编码\"}");
        $request->setNotifyUrl("https://notify.merchant.com/xxx");
        $request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
        $request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
        try{
            $response = self::$client->registerSaasMicro($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling MerClient->registerSaasMicro: ', $e->getMessage(), PHP_EOL;
        }
    }
}
