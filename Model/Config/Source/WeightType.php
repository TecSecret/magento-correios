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

namespace NLTecnologia\Correios\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class WeightType implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value'=>'gr', 'label'=>__('Gramas')),
            array('value'=>'kg', 'label'=>__('Kilos')),
        );
    }
}
