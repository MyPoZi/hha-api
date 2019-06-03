<?php
namespace App\Repositories\Item;

use App\Item;
use App\Repositories\Item\ItemRepositoryInterface;

class ItemRepository implements ItemRepositoryInterface
{
    private $item;


    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function storeItemData(string $name, string $value)
    {
        return $this->item->create(['name' => $name, 'value' => $value]);
    }

    public function updateItemData(string $id, string $name, string $value)
    {
        $this->item->where('id', $id)->update(['name' => $name, 'value' => $value]);
        return $this->item->where('id', $id)->first();
    }

    public function destroyItemData(string $id)
    {
        return $this->item->where('id', $id)->delete();
    }

    public function indexItemData()
    {
        return $this->item->get();
    }
}
