<?php
/**
 *
 */
namespace FishPig\NoInventory\Plugin\Magento\CatalogInventory\Ui\DataProvider\Product\Form\Modifier;

use Magento\CatalogInventory\Ui\DataProvider\Product\Form\Modifier\AdvancedInventory;

class AdvancedInventoryPlugin
{
    /**
     *
     */
    public function beforeModifyData(AdvancedInventory $subject, $data)
    {
        $fieldCode = 'quantity_and_stock_status';

        foreach ($data as $modelId => $item) {
            if (!isset($data[$modelId][AdvancedInventory::DATA_SOURCE_DEFAULT][$fieldCode])) {
                $data[$modelId][AdvancedInventory::DATA_SOURCE_DEFAULT][$fieldCode] = [];
            }
        }

        return [$data];
    }
}