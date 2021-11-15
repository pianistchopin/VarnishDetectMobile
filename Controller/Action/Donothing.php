<?php


namespace Tenx\VarnishDetectMobile\Controller\Action;


class Donothing extends \Magento\Framework\App\Action\Action
{
    private $resultJsonFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
    ){
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->resultJsonFactory->create()->setData(['success' => 'true']);
    }
}
