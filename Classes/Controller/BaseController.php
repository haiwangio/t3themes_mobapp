<?php
namespace SalvatoreEckel\T3themesMobapp\Controller;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
#use \TYPO3\CMS\Core\Utility\GeneralUtility;
#use \TYPO3\CMS\Core\Messaging\AbstractMessage;
#use \TYPO3\CMS\Extbase\Utility\DebuggerUtility;

/**
 * BaseController
 */
class BaseController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action configuration
     *
     * @return void
     */
    public function configurationAction()
    {
        $this->view->assign('t3contentLoaded', ExtensionManagementUtility::isLoaded('t3content_mobapp'));
    }

    /**
     * action liveDemo
     *
     * @return void
     */
    public function liveDemoAction()
    {
        $this->view->assign('extkey', 't3themes_mobapp');
    }

}
