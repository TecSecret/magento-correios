<?php

/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package NLTecnologia\Correios
 * @author Douglas Ianitsky <ianitsky@gmail.com>
 * @author Dep. de Desenvolvimento <Webmaster@nltecnologia.com.br>
 * @copyright Copyright (c) 2019 Imagination Media (https://www.NLTecnologia.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace NLTecnologia\Correios\Block\Adminhtml\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\Factory;

class PostMethods extends AbstractFieldArray
{
    /**
     * @var Factory
     */
    protected $_elementFactory;

    /**
     * PostMethods constructor.
     * @param Context $context
     * @param Factory $elementFactory
     * @param array $data
     */
    public function __construct(
        Context $context,
        Factory $elementFactory,
        array $data = []
    ) {
        $this->_elementFactory = $elementFactory;
        parent::__construct($context, $data);
    }

    protected function _construct()
    {
        $this->addColumn('code', ['label' => __('Code')]);
        $this->addColumn('name', ['label' => __('Name')]);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
        parent::_construct();
    }
}
