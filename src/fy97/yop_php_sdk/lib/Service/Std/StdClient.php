<?php


namespace Fy\Yeepay\Yop\Sdk\Service\Std;


use Fy\Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Fy\Yeepay\Yop\Sdk\Client\ClientHandler;
use Fy\Yeepay\Yop\Sdk\Client\ClientParams;
use Fy\Yeepay\Yop\Sdk\Exception\YopClientException;
use Fy\Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Fy\Yeepay\Yop\Sdk\Model\YosDownloadResponseUnMarshaller;
use Fy\Yeepay\Yop\Sdk\Service\Std\Model as Model;

class StdClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * StdClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BillDividedaydownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billDividedaydownload(Model\BillDividedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillDividedaydownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillApplyRequest $request
     * @return Model\BillFundbillApplyResponse
     * @throws YopClientException
     */
    public function billFundbillApply(Model\BillFundbillApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillApplyRequestMarshaller::getInstance(),
            Model\BillFundbillApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillFundbillDownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billFundbillDownload(Model\BillFundbillDownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getFileId() == null) {
            throw new YopClientException("request.fileId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillFundbillDownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillTradedaydownloadRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function billTradedaydownload(Model\BillTradedaydownloadRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillTradedaydownloadRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
