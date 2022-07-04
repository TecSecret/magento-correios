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

namespace NLTecnologia\Correios\Model\ResourceModel\Cotacoes;

use NLTecnologia\Correios\Model\Cotacoes;
use NLTecnologia\Correios\Model\ResourceModel\Cotacoes as CotacoesCollection;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            Cotacoes::class,
            CotacoesCollection::class
        );
    }
}
