<?php

/**
 * Class Index
 *
 * PHP version 7 & 8
 *
 * @category Risecommerce
 * @package  Risecommerce_WhatsAppChat
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */

namespace Risecommerce\WhatsAppChat\Model\Config\Source;

/**
 * Class Position
 * @package Risecommerce\WhatsAppChat\Model\Config\Source
 */
class Position implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'top-left', 'label' => __('Top-Left')],
            ['value' => 'top-right', 'label' => __('Top-Right')],
            ['value' => 'top-middle', 'label' => __('Top-Middle')],
            ['value' => 'left-middle', 'label' => __('Left-Middle')],
            ['value' => 'right-middle', 'label' => __('Right-Middle')],
            ['value' => 'bottom-middle', 'label' => __('Bottom-Middle')],
            ['value' => 'bottom-left', 'label' => __('Bottom-Left')],
            ['value' => 'bottom-right', 'label' => __('Bottom-Right')]
        ];
    }
}
