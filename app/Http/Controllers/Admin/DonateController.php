<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;
use App\Http\Requests\DonateCreateRequest;
use App\Http\Requests\DonateUpdateRequest;


class DonateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donates = Donate::paginate(5);
        //$donates = Donate::get();//tüm verileri getir
        return view('admin.donate.donate-list',compact('donates'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $donates =  Donate::find($id) ?? abort(404,'bağış bulunamadı!');
        return view('admin.donate.edit',compact('donates'));
        //['donates'=>$donates]

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DonateUpdateRequest $request, $id)
    {
        $donates =  Donate::find($id) ?? abort(404,'Bağış Bulunamadı!');

        Donate::where('id',$id)->update($request->except(['_method','_token']));
        /*METHOD VE TOKEN HARİÇ GÜNCELLE. ONLAR POST OLARAK GELİYOR, UPDATE PUT OLDUĞU İÇİN*/

        //Donate::where('id',$id)->update($request->except(['_method','_token']));

        return redirect()->route('donates.index')->withSuccess('Başarılı', 'Başarıyla Güncellendi!');

        //$donates->update($request->all());
        //return redirect()->route('')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donates =  Donate::find($id) ?? abort(404,'Bağış bulunamadı!');
        $donates->delete();
        return redirect()->route('donates.index')->withSuccess('Silme Başarılı');
    }
}
