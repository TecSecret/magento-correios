<?php

/**
 * Correios
 *
 * Correios Shipping Method for Magento 2.
 *
 * @package NLTecnologia\Correios
 * @author Dep. de desenvolvimento <webmaster@nltecnologia.com.br>
 * @copyright Copyright (c) 2017 Imagination Media (https://www.NLTecnologia.com/)
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace NLTecnologia\Correios\Console\Command\Shipping;

use NLTecnologia\Correios\Helper\Data as CorreiosHelper;
use Magento\Framework\App\State;
use Magento\Framework\App\ObjectManager;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class UpdateCommand extends Command
{
    /**
     * @var State
     */
    private $appState;

    /**
     * SyncCommand constructor.
     * @param State $state
     */
    public function __construct(State $state)
    {
        $this->appState = $state;
        parent::__construct();
    }

    /**
     * Configure catalog sync command
     */
    protected function configure()
    {
        $this->setName('correios:update_tracks')->setDescription('Correios update offline tracks.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null|void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->appState->setAreaCode('adminhtml');
        /**
         * @var $correiosHelper CorreiosHelper
         */
        $correiosHelper = ObjectManager::getInstance()->create(CorreiosHelper::class);
        try{
            $correiosHelper->updateOfflineTracks();
            $output->writeln("Offline tracks updated.");
        } catch (\Exception $ex) {
            $output->writeln("An error occurred while updating the offline tracks.");
        }
    }
}
