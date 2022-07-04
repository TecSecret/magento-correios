<?php

/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package NLTecnologia\Correios
 * @author Dep. de Desenvolvimento <webmaster@nltecnologia.com.br>
 * @copyright Copyright (c) 2017 Imagination Media (https://www.NLTecnologia.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace NLTecnologia\Correios\Controller\Adminhtml\Cotacoes;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    /**
     * @var bool|PageFactory
     */
    protected $resultPageFactory = false;

    const ADMIN_RESOURCE = 'NLTecnologia_Correios::correios_menuoption1';

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface|\Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('NLTecnologia_Correios::correios_menuoption1');
        $resultPage->getConfig()->getTitle()->prepend(__('Correios Shipping Tracks'));
        return $resultPage;
    }
}
