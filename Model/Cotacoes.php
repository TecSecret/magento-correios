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

namespace NLTecnologia\Correios\Model;

use NLTecnologia\Correios\Model\ResourceModel\Cotacoes as ResourceModel;
use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\Context;
use Magento\Framework\Registry;

class Cotacoes extends AbstractModel
{
    /**
     * Cotacoes constructor.
     * @param Context $context
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Context $context,
        Registry $registry,
        array $data = []
    ) {
        parent::__construct($context, $registry, null, null, $data);
    }

    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}
