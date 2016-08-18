<?php

/**
 * Doghouse_Carousel_Block_Carousel
 *
 * @category  Doghouse
 * @package   Doghouse_Carousel
 * @author    Doghouse <support@dhmedia.com.au>
 * @copyright 2015 Doghouse Media (http://doghouse.agency)
 * @license   https://github.com/DoghouseMedia/Doghouse_Carousel/blob/master/LICENSE  The MIT License (MIT)
 * @link      https://github.com/DoghouseMedia/Doghouse_Carousel
 */
class Doghouse_Carousel_Block_Products
    extends Doghouse_Carousel_Block_Carousel
{

    /**
     * Get carousel items.
     *
     * @param null $identifier
     * @param bool $withProducts
     * @param bool $withInactive
     * @param bool $withSchedule
     * @param bool $withLimit
     * @return mixed
     */
    public function getCarouselItems(
        $identifier = null,
        $withProducts = false,
        $withInactive = false,
        $withSchedule = false,
        $withLimit = false
    )
    {
        if (!$identifier) {
            $identifier = $this->getCategoryId();
        }

        $category = Mage::getModel('catalog/category')->load($identifier);
        $collection = $category->getProductCollection()->addAttributeToSelect('*');
        return $collection;
    }

}