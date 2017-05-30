<?php


namespace Strategery\Stockbase\Model\ResourceModel\StockItemReserve;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 */
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            \Strategery\Stockbase\Model\OrderedItem::class,
            \Strategery\Stockbase\Model\ResourceModel\OrderedItem::class
        );
    }
}