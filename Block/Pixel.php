<?php
namespace Peec\Facebook\Block;

use Magento\Framework\UrlInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\Locale\ResolverInterface;
use Magento\Store\Model\ScopeInterface;
use Magento\Framework\View\Element\Template\Context;


class Pixel extends Template {

    protected $locale;

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;
    protected $urlInterface;
    /**
     * Extension config path
     */
    const XML_PATH_FB = 'peec_facebook/pixel/';

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ResolverInterface $locale
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data,
        ResolverInterface $locale,
        ScopeConfigInterface $scopeConfig,
        UrlInterface $urlInterface
    ) {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
        $this->urlInterface = $urlInterface;
        $this->locale = $locale;
    }
    public function getLocale()
    {
        return $this->locale->getLocale();
    }
    public function getPixelId()
    {
        return $this->scopeConfig->getValue(static::XML_PATH_FB . 'facebook_pixel_id', ScopeInterface::SCOPE_STORE);
    }
}