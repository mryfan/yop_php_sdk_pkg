<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Account;


use PHPUnit\Framework\TestCase;
use Fy\Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Service\Account\Model as Model;

class AccountClientTest extends TestCase
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
        self::$client = AccountClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function accountinfosQueryTest()
    {
        $request = new Model\AccountinfosQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountinfosQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountinfosQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function autoWithdrawRuleCancelTest()
    {
        $request = new Model\AutoWithdrawRuleCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRuleId("ruleId_example");
        try{
            $response = self::$client->autoWithdrawRuleCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function autoWithdrawRuleQueryTest()
    {
        $request = new Model\AutoWithdrawRuleQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->autoWithdrawRuleQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function autoWithdrawRuleSetTest()
    {
        $request = new Model\AutoWithdrawRuleSetRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBindId("bindId_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setReceiveType("receiveType_example");
        $request->setTriggerTime("triggerTime_example");
        $request->setRemainAmount(1.2);
        $request->setRemark("remark_example");
        try{
            $response = self::$client->autoWithdrawRuleSet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleSet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function balanceQueryTest()
    {
        $request = new Model\BalanceQueryRequest();

        $request->setMerchantNo("10080006026");
        try{
            $response = self::$client->balanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAccountPayOrderTest()
    {
        $request = new Model\EnterpriseAccountPayOrderRequest();

        $request->setBody(new \Fy\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderAccountPaymentRequestDtoParam());
        try{
            $response = self::$client->enterpriseAccountPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAccountPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAutoPaymentOrderTest()
    {
        $request = new Model\EnterpriseAutoPaymentOrderRequest();

        $request->setMerchantNo("10014242006");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(0.01);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2021-05-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        try{
            $response = self::$client->enterpriseAutoPaymentOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAutoPaymentQueryTest()
    {
        $request = new Model\EnterpriseAutoPaymentQueryRequest();

        $request->setMerchantNo("10014242004");
        $request->setOrderId("merchant12345");
        $request->setOrderDate("orderDate_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->enterpriseAutoPaymentQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseWithholdingOrderTest()
    {
        $request = new Model\EnterpriseWithholdingOrderRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10014242004");
        $request->setPayerMerchantNo("10014242005");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(88.88);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2017-12-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("费用");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        try{
            $response = self::$client->enterpriseWithholdingOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseWithholdingOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payBatchOrderTest()
    {
        $request = new Model\PayBatchOrderRequest();

        $request->setBody(new \Fy\Yeepay\Yop\Sdk\Service\Account\Model\PayBatchOrderBatchRemitReqDTOParam());
        try{
            $response = self::$client->payBatchOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payBatchOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payBatchQueryTest()
    {
        $request = new Model\PayBatchQueryRequest();

        $request->setBatchNo("batchNo_example");
        try{
            $response = self::$client->payBatchQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payBatchQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payCancelTest()
    {
        $request = new Model\PayCancelRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setOrderNo("20200720110033a171b64e");
        $request->setCancelReason("业务需要撤销此次付款");
        try{
            $response = self::$client->payCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payOrderTest()
    {
        $request = new Model\PayOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("PAY2133213124");
        $request->setOrderAmount(1.01);
        $request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持收款方承担；当平台商或服务商承担时无需指定此手续费承担方；");
        $request->setReceiveType("REAL_TIME");
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setReceiverAccountName("receiverAccountName_example");
        $request->setReceiverBankCode("ICBC");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setBranchBankCode("branchBankCode_example");
        $request->setComments("xx平台付款");
        $request->setTerminalType("PC");
        $request->setNotifyUrl("http://www.baidu.com");
        $request->setRemark("remark_example");
        try{
            $response = self::$client->payOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payQueryTest()
    {
        $request = new Model\PayQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("REMIT20200327103027");
        $request->setOrderNo("8af60c56b35b42d3a7e985fe55a6c54c");
        try{
            $response = self::$client->payQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function receiptGetTest()
    {
        $request = new Model\ReceiptGetRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setTradeType("tradeType_example");
        try{
            $response = self::$client->receiptGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receiptGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeOnlinebankOrderTest()
    {
        $request = new Model\RechargeOnlinebankOrderRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setPayType("payType_example");
        $request->setBankCode("bankCode_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        $request->setReturnUrl("returnUrl_example");
        try{
            $response = self::$client->rechargeOnlinebankOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeOnlinebankOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeOrderTest()
    {
        $request = new Model\RechargeOrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setRemark("remark_example");
        $request->setPayType("payType_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->rechargeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeQueryTest()
    {
        $request = new Model\RechargeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->rechargeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierApplyTest()
    {
        $request = new Model\SupplierApplyRequest();

        $request->setBody(new \Fy\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRequestDTOParam());
        try{
            $response = self::$client->supplierApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierPayOrderTest()
    {
        $request = new Model\SupplierPayOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo111");
        $request->setOrderAmount(1.01);
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setSupplierId(17);
        $request->setReceiverBankCode("ICBC");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setComments("xx平台付款");
        $request->setFeeChargeSide("PAYER");
        $request->setTerminalType("PC");
        $request->setReceiveType("REAL_TIME");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->supplierPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierQueryTest()
    {
        $request = new Model\SupplierQueryRequest();

        $request->setMerchantNo("10080011111");
        try{
            $response = self::$client->supplierQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierQueryProgressTest()
    {
        $request = new Model\SupplierQueryProgressRequest();

        $request->setRequestNo("requestNo1111");
        try{
            $response = self::$client->supplierQueryProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierQueryProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2bOrderTest()
    {
        $request = new Model\TransferB2bOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        $request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
        $request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
        $request->setUsage("usage_example");
        $request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->transferB2bOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2bQueryTest()
    {
        $request = new Model\TransferB2bQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成 ;示例值：TRANS2133213124");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferB2bQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawCardBindTest()
    {
        $request = new Model\WithdrawCardBindRequest();

        $request->setMerchantNo("100400612345");
        $request->setBankCardType("bankCardType_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankCode("当bankCardType为ENTERPRISE_ACCOUNT时必填；  示例值：ICBC");
        $request->setBranchCode("102100000048");
        try{
            $response = self::$client->withdrawCardBind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardBind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawCardModifyTest()
    {
        $request = new Model\WithdrawCardModifyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBindId(789);
        $request->setBankCardOperateType("bankCardOperateType_example");
        $request->setBankCode("ICBC");
        $request->setBranchCode("102100000048");
        try{
            $response = self::$client->withdrawCardModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawCardQueryTest()
    {
        $request = new Model\WithdrawCardQueryRequest();

        $request->setMerchantNo("易宝支付分配的的商户唯一标识  示例值:100400612345");
        try{
            $response = self::$client->withdrawCardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawOrderTest()
    {
        $request = new Model\WithdrawOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setMerchantNo("100400612345");
        $request->setBankCardId("11103");
        $request->setBankAccountNo("6212260200019388841");
        $request->setReceiveType("REAL_TIME");
        $request->setOrderAmount(1.00);
        $request->setNotifyUrl("www.baidu.com");
        $request->setRemark("XXX平台提现");
        $request->setTerminalType("PC");
        try{
            $response = self::$client->withdrawOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawQueryTest()
    {
        $request = new Model\WithdrawQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setOrderNo("be54b037a981440a8cfcb0549aaf5344");
        try{
            $response = self::$client->withdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
