<?php

namespace App\Models\Reports;

use App\Models\Item;

/**
 *
 *
 * @property item item
 *
 */
class Inventory_low extends Report
{
    /**
     * @return array[]
     */
    public function getDataColumns(): array
    {
        return [
            ['item_name'     => lang('Reports.item_name')],
            ['item_number'   => lang('Reports.item_number')],
            ['quantity'      => lang('Reports.quantity')],
            ['reorder_level' => lang('Reports.reorder_level')],
            ['location_name' => lang('Reports.stock_location')]
        ];
    }

    /**
     * @param array $inputs
     * @return array
     */
    public function getData(array $inputs): array
    {
        $item = model(Item::class);

        $builder = $this->db->table('items AS items');
        $builder->select(
            $item->get_item_name('name') . ',
            items.item_number,
            item_quantities.quantity,
            items.reorder_level,
            stock_locations.location_name'
        , false);
        $builder->join('item_quantities AS item_quantities', 'items.item_id = item_quantities.item_id');
        $builder->join('stock_locations AS stock_locations', 'item_quantities.location_id = stock_locations.location_id');
        $builder->where('items.deleted = 0', null, false);
        $builder->where('items.stock_type = 0', null, false);
        $builder->where('item_quantities.quantity <= items.reorder_level', null, false);
        $builder->where('stock_locations.deleted = 0', null, false);
        $item->apply_item_supplier_scope_restriction($builder, isset($inputs['person_id']) ? (int)$inputs['person_id'] : null, 'items');
        $builder->orderBy('items.name', '', false);

        return $builder->get()->getResultArray();
    }

    /**
     * @param array $inputs
     * @return array
     */
    public function getSummaryData(array $inputs): array
    {
        return [];
    }
}
