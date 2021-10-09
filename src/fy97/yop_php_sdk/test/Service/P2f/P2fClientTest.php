<?php


namespace Fy\Yeepay\Yop\Sdk\Service\P2f;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\P2f\Model as Model;

class P2fClientTest extends TestCase
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
        self::$client = P2fClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function companyFinanceAccountTest()
    {
        $request = new Model\CompanyFinanceAccountRequest();

        $request->setCompName("compName_example");
        $request->setCompNo("compNo_example");
        $request->setCustomerCertExpiry("customerCertExpiry_example");
        $request->setRegSerialNoExpired("regSerialNoExpired_example");
        $request->setCompTelephone("compTelephone_example");
        $request->setOrgSMSMobile("orgSMSMobile_example");
        $request->setUniteCreditCode("uniteCreditCode_example");
        $request->setCompEmail("compEmail_example");
        $request->setCompAddr("compAddr_example");
        $request->setZipCode("zipCode_example");
        $request->setBizScope("bizScope_example");
        $request->setLegalName("legalName_example");
        $request->setLegalIdNo("legalIdNo_example");
        $request->setLegalStartDate("legalStartDate_example");
        $request->setLegalExpiredDate("legalExpiredDate_example");
        $request->setLegalMobile("legalMobile_example");
        $request->setBankCode("bankCode_example");
        $request->setBankName("bankName_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setBindType("bindType_example");
        $request->setBindAcctBranch("bindAcctBranch_example");
        $request->setThreeInOneFlag("threeInOneFlag_example");
        $request->setUniteCreditCodePath("uniteCreditCodePath_example");
        $request->setFrontPhotoPath("frontPhotoPath_example");
        $request->setBackPhotoPath("backPhotoPath_example");
        $request->setOpenAcctPermitCodePath("openAcctPermitCodePath_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceAccount($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceAccount: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinanceAccountQueryTest()
    {
        $request = new Model\CompanyFinanceAccountQueryRequest();

        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinanceAssetsQueryTest()
    {
        $request = new Model\CompanyFinanceAssetsQueryRequest();

        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceAssetsQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceAssetsQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinanceOrderQueryTest()
    {
        $request = new Model\CompanyFinanceOrderQueryRequest();

        $request->setBizType("bizType_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceOrderQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceOrderQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinancePurchaseOrderTest()
    {
        $request = new Model\CompanyFinancePurchaseOrderRequest();

        $request->setProdCode("prodCode_example");
        $request->setAmount(1.2);
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setP2fOpenAcctNo("p2fOpenAcctNo_example");
        try{
            $response = self::$client->companyFinancePurchaseOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinancePurchaseOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinanceRedeemOrderTest()
    {
        $request = new Model\CompanyFinanceRedeemOrderRequest();

        $request->setP2fOpenAcctNo("p2fOpenAcctNo_example");
        $request->setProdCode("prodCode_example");
        $request->setAmount(1.2);
        $request->setRemark("remark_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceRedeemOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceRedeemOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinanceSmallPaymentTest()
    {
        $request = new Model\CompanyFinanceSmallPaymentRequest();

        $request->setConfirmCheckCode("confirmCheckCode_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceSmallPayment($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceSmallPayment: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function companyFinanceTransactionQueryTest()
    {
        $request = new Model\CompanyFinanceTransactionQueryRequest();

        $request->setStartDate("startDate_example");
        $request->setEndDate("endDate_example");
        $request->setChannelCode("channelCode_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->companyFinanceTransactionQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->companyFinanceTransactionQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function fileUploadTest()
    {
        $request = new Model\FileUploadRequest();

        $request->setRequestNo("requestNo_example");
        $request->setIdentityType("identityType_example");
        $request->setIdentityId("identityId_example");
        $request->setIdType("ID");
        $request->setIdNO("idNO_example");
        $request->setFileType("fileType_example");
        $request->setImage(fopen("/path/to/file", "r"));
        try{
            $response = self::$client->fileUpload($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling P2fClient->fileUpload: ', $e->getMessage(), PHP_EOL;
        }
    }
}
