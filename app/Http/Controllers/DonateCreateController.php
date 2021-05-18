<?php

namespace App\Http\Controllers;
use App\Models\Donate;
use Illuminate\Http\Request;
use App\Http\Requests\DonateCreateRequest;
use App\Models\City;

class DonateCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard',compact('donates'));
        //$donata = Donate::paginate(5);
        //return "deneme";
       //$city = City::get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donate-create');
        //$city = City::get();
      
        //$city = City::all();
       /* @foreach  ($city as $cities)
                        <option value="{{ $cities->id }}">{{ $cities->city_name }}</option>
                    @endforeach */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonateCreateRequest $request)
    {
        Donate::create($request->post());
        return redirect()->route('dashboard')->withSuccess('Bağış İsteği Başarılı!');
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
