<?php
/**
 *
 */
namespace FishPig\NoInventory\Plugin\Magento\CatalogInventory\Model\ResourceModel\Stock;

use Magento\CatalogInventory\Model\ResourceModel\Stock\Status;

class StatusPlugin
{
    /**
     * Don't include the JOIN as everything is always in stock
     */
    public function aroundAddStockDataToCollection(
        Status $subject,
        \Closure $proceed,
        $collection,
        $isFilterInStock
    ) {
        $collection->getSelect()->columns([
            'is_salable' => new \Zend_Db_Expr('1')
        ]);
        return $collection;
    }

    /**
     *
     */
    public function aroundAddIsInStockFilterToCollection(
        Status $subject,
        \Closure $proceed,
        $collection
    ) {
        echo __METHOD__;
        exit;
    }
}