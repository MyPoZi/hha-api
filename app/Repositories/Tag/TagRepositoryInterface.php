<?php
namespace App\Repositories\Tag;

interface TagRepositoryInterface
{
    public function storeTagData(string $name);
    public function updateTagData(string $name);
    public function indexTagData();
}
