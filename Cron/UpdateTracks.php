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

namespace NLTecnologia\Correios\Cron;

use NLTecnologia\Correios\Helper\Data as CorreiosHelper;

class UpdateTracks
{
    /**
     * @var CorreiosHelper
     */
    protected $helper;

    /**
     * UpdateTracks constructor.
     * @param CorreiosHelper $helper
     */
    public function __construct(CorreiosHelper $helper)
    {
        $this->helper = $helper;
    }

    /**
     * @return $this
     */
    public function execute()
    {
        $this->helper->logMessage("Cron job updateTracks executed.");
        $this->helper->updateOfflineTracks();
        return $this;
    }
}
