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
        ResolverInterface $locale
    ) {
        parent::__construct($context, $data);
        $this->locale = $locale;
    }
    public function getLocale()
    {
        return $this->locale->getLocale();
    }
    public function getPixelId()
    {
        return $this->_scopeConfig->getValue(static::XML_PATH_FB . 'facebook_pixel_id', ScopeInterface::SCOPE_STORE);
    }
}