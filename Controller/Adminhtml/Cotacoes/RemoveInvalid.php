<?php

/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package NLTecnologia\Correios
 * @author Igor Ludgero Miura <igor@NLTecnologia.com>
 * @copyright Copyright (c) 2017 Imagination Media (https://www.NLTecnologia.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace NLTecnologia\Correios\Controller\Adminhtml\Cotacoes;

use NLTecnologia\Correios\Model\CotacoesRepository;
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

class RemoveInvalid extends Action
{
    /**
     * @var CotacoesRepository
     */
    protected $cotacao;

    const ADMIN_RESOURCE = 'NLTecnologia_Correios::correios_menuoption1';

    /**
     * RemoveInvalid constructor.
     * @param Context $context
     * @param CotacoesRepository $cotacao
     */
    public function __construct(
        Context $context,
        CotacoesRepository $cotacao
    ) {
        parent::__construct($context);
        $this->cotacao = $cotacao;
    }

    public function execute()
    {
        $collection = $this->cotacao->getCollection()
            ->addFilter("valor", 0)
            ->addFilter("prazo", 0);
        foreach ($collection as $cotacao) {
            $cotacaoObj = $this->cotacao->getById($cotacao->getId());
            $cotacaoObj->delete();
        }
        $this->messageManager->addSuccessMessage(
            __("Deleted %1 invalid postcode tracks.", $collection->count())
        );
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        return $resultRedirect->setPath('*/*/');
    }
}
