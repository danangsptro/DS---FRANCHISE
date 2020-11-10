<?php

namespace App\Http\Controllers\dsfranchice\backend;

use Alert;
use App\Models\carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\CarouselRepository;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $repo;

    public function __construct()
    {
        $this->repo = new CarouselRepository();
    }

    public function index()
    {
        $data = carousel::all();
        return view ('dsfranchice.content.backend.carousel.index-carousel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dsfranchice.content.backend.carousel.create-carousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->storeCarousel($request);

        Alert::success('Sukses', 'Data Berhasil Di input!');
        return redirect()->route('carousel.index');
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
    public function edit(carousel $carousel)
    {
        $carousel->find($carousel->id)->all();
        return view('dsfranchice.content.backend.carousel.edit-carousel', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carousel $carousel)
    {
       $this->repo->updateCarousel($request, $carousel);

        Alert::success('Data Berhasil Di Edit!');
        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repo->CarouselDestroy($id);

        Alert::success('Data Berhasil di Delete!');
        return redirect()->route('carousel.index');
    }
}
