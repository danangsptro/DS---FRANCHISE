<?php

namespace App\Http\Controllers\Repository;

use App\Models\carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CarouselRepository
{
    // CREATE
    public function storeCarousel (Request $request)
    {
        Validator::make($request->all(),
        [
            'foto_carousel' => 'required|image|mimes:png,jpg,jpeg'
        ]);

        $image = $request->file('foto_carousel');
        $image->storeAs('public/img-carousel', $image->hashName());

        carousel::create([
            'foto_carousel' => $image->hashName(),
        ]);

    }

    // UPDATE
    public function updateCarousel (Request $request, carousel $carousel)
    {
        Validator::make($request->all(),
        [
            'foto_carousel' => 'required|image|mimes:png,jpg,jpeg',
        ])->validate();

        $carousel = carousel::findOrFail($carousel->id);

        Storage::disk('local')->delete('public/img-carousel/' .$carousel->foto_carousel);

        $image = $request->file('foto_carousel');
        $image->storeAs('public/img-carousel', $image->hashName());

        $carousel->update([
            'foto_carousel' => $image->hashName(),
        ]);
    }

    // DELETE
    public function CarouselDestroy($id)
    {
        $carousel = carousel::find($id);
        $carousel->delete();
    }
}
