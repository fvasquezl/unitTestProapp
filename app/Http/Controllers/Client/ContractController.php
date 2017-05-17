<?php

namespace App\Http\Controllers\Client;

use App\Car;
use App\Contract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Styde\Html\Facades\Alert;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Car $car
     * @return \Illuminate\Http\Response
     */
    public function index(Car $car)
    {
        $contracts = Contract::where('car_id',$car->id)->paginate(10);
        return view('clients.contracts.index', compact('contracts','car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Car $car
     * @return \Illuminate\Http\Response
     */
    public function create(Car $car)
    {
        return view('clients.contracts.create',compact('car'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Car $car
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Car $car)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $car->contract()->create($request->all());

        Alert::message('The contract has been created successfully', 'info');
        return redirect()->route('clients.contracts.index',$car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function show(Contract $contract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function edit(Contract $contract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contract $contract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contract  $contract
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contract $contract)
    {
        //
    }
}
