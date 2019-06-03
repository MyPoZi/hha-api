<?php
namespace App\Repositories\Tag;

use App\Tag;
use App\Repositories\Tag\TagRepositoryInterface;

class TagRepository implements TagRepositoryInterface
{

    private $tag;


    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    public function storeTagData(string $name)
    {
        return $this->tag->items()->attach($name);
    }

    public function updateTagData(string $name)
    {
        // TODO: Implement updateTagData() method.
    }

    public function indexTagData()
    {
        // TODO: Implement indexTagData() method.
    }
}
