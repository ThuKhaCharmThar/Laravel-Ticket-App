<?php

namespace App\Http\Controllers;

use App\Models\TicketCategory;
use App\Http\Requests\StoreTicketCategoryRequest;
use App\Http\Requests\UpdateTicketCategoryRequest;

class TicketCategoryController extends Controller
{
    public function __construct()
{
    $this->Middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTicketCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function show(TicketCategory $ticketCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketCategory $ticketCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketCategoryRequest  $request
     * @param  \App\Models\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketCategoryRequest $request, TicketCategory $ticketCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketCategory  $ticketCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketCategory $ticketCategory)
    {
        //
    }
}
