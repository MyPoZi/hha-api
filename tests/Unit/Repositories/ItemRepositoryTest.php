<?php

namespace Tests\Unit\Repositories;

use App\Item;
use App\Repositories\Item\ItemRepository;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class ItemRepositoryTest extends TestCase
{
    protected $repo;

    use RefreshDatabase;

    public function setUp() :void
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
        $this->artisan('db:seed');
        $this->repo = $this->app->make(ItemRepository::class);
    }

    public function test_can_store_item()
    {
        $result = $this->repo->storeItemData('name_1', 100);
        $this->assertSame($result->name, 'name_1');
    }

    public function test_can_update_item()
    {
        $result = $this->repo->updateItemData(3, 'name_2', 100);
        $this->assertSame($result->name, 'name_2');
    }

    public function test_can_destroy_item()
    {
        $result = $this->repo->destroyItemData(4);
        $this->assertSame($result, 1);
    }

    public function test_can_get_item()
    {
        $result = $this->repo->indexItemData();
        $this->assertJson($result);
    }
}
