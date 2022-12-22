<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quote;
use App\Models\Philosopher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Quote::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tokenID = Auth::id(); //get tokens user id
        $user = User::where('id', $tokenID)->first(); //match the user and his id
        if (!$user) { //return if wrong creds
            return response([
                'message' => 'wrong credentials'
            ], 401);
        }
        $philo = Philosopher::where('philosopher', 'like', $request->input('philosopher'))->first();
        if ($philo == null) {
            return response([
                'message' => 'That philosopher is not added'
            ], 400);
        }
        $request->validate([
            'philosopher' => 'required',
            'quote' => 'required',
        ]);

        return Quote::create([
            'philosopher' => $request->input('philosopher'),
            'quote' => $request->input('quote'),
            'philosopher_id' => $philo->id,
            'user_id' => $tokenID
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        if ($id > Quote::all()->last()->id || $id < 0) {
            return response([
                'message' => 'out of scope'
            ], 400);
        }
        return Quote::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quote = Quote::find($id);
        $quote->update([
            'philosopher' => $request->input('philosopher'),
            'quote' => $request->input('quote')
        ]);
        return $quote;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Quote::destroy($id);
    }
    /**
     * search for the specified resource from storage
     *
     * @param  str  $term
     * @return \Illuminate\Http\Response
     */
    public function search($term)
    {
        return Quote::where('quote', 'like', '%' . $term . '%')->get();
    }
}
