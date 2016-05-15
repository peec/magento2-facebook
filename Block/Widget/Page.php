<?php
namespace Peec\Facebook\Block\Widget;

use Magento\Framework\UrlInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class Page extends Template implements \Magento\Widget\Block\BlockInterface
{
    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;
    protected $urlInterface;
    /**
     * Extension config path
     */
    const XML_PATH_FB = 'peec_facebook/page/';
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ScopeConfigInterface $scopeConfig
     * @param UrlInterface $urlInterface
     * @param array $data
     */
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
        UrlInterface $urlInterface,
        array $data
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
        $this->urlInterface = $urlInterface;
        $this->setTemplate('widget/page.phtml');
    }
    public function getFacebookPageUrl()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'facebook_page_url', ScopeInterface::SCOPE_STORE);
    }
    public function getFacebookPageTitle()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'facebook_page_title', ScopeInterface::SCOPE_STORE);
    }
    public function getSmallHeader()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'small_header', ScopeInterface::SCOPE_STORE);
    }
    public function getAdaptContainerWidth()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'adapt_container_width', ScopeInterface::SCOPE_STORE);
    }
    public function getHideCover()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'hide_cover', ScopeInterface::SCOPE_STORE);
    }
    public function getShowFacepile()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'show_facepile', ScopeInterface::SCOPE_STORE);
    }


}