<?php
namespace App\Repositories\Item;

interface ItemRepositoryInterface
{
    public function storeItemData(string $name, string $value);
    public function updateItemData(string $id, string $name, string $value);
    public function destroyItemData(string $id);
    public function indexItemData();
}
