<?php
namespace Peec\Facebook\Block\Widget;

use Magento\Framework\UrlInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\_scopeConfigInterface;

class Page extends Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * Extension config path
     */
    const XML_PATH_FB = 'peec_facebook/page/';
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data
    ) {
        parent::__construct($context, $data);
        $this->setTemplate('widget/page.phtml');
    }
    public function getFacebookPageUrl()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'facebook_page_url', ScopeInterface::SCOPE_STORE);
    }
    public function getFacebookPageTitle()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'facebook_page_title', ScopeInterface::SCOPE_STORE);
    }
    public function getSmallHeader()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'small_header', ScopeInterface::SCOPE_STORE);
    }
    public function getAdaptContainerWidth()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'adapt_container_width', ScopeInterface::SCOPE_STORE);
    }
    public function getHideCover()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'hide_cover', ScopeInterface::SCOPE_STORE);
    }
    public function getShowFacepile()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'show_facepile', ScopeInterface::SCOPE_STORE);
    }


}