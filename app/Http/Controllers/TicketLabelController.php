<?php

namespace App\Http\Controllers;

use App\Models\TicketLabel;
use App\Http\Requests\StoreTicketLabelRequest;
use App\Http\Requests\UpdateTicketLabelRequest;

class TicketLabelController extends Controller
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
     * @param  \App\Http\Requests\StoreTicketLabelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketLabelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TicketLabel  $ticketLabel
     * @return \Illuminate\Http\Response
     */
    public function show(TicketLabel $ticketLabel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TicketLabel  $ticketLabel
     * @return \Illuminate\Http\Response
     */
    public function edit(TicketLabel $ticketLabel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTicketLabelRequest  $request
     * @param  \App\Models\TicketLabel  $ticketLabel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTicketLabelRequest $request, TicketLabel $ticketLabel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TicketLabel  $ticketLabel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TicketLabel $ticketLabel)
    {
        //
    }
}
