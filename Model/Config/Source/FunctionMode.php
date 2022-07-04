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

class FunctionMode implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => __('Only Offline')),
            array('value' => 2, 'label' => __('Hybrid')),
            array('value' => 3, 'label' => __('Only Online')),
        );
    }
}
