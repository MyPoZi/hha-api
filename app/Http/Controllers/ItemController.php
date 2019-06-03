<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemPost;
use App\Repositories\Item\ItemRepositoryInterface as Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    protected $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->item->indexItemData();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ItemPost $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemPost $request)
    {
        return $this->item->storeItemData($request->name, $request->value);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ItemPost $request
     * @return \Illuminate\Http\Response
     */
    public function update(ItemPost $request)
    {
        return $this->item->updateItemData($request->id, $request->name, $request->value);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ItemPost $request
     * @return void
     */
    public function destroy(ItemPost $request)
    {
        return $this->item->destroyItemData($request->id);
    }
}
