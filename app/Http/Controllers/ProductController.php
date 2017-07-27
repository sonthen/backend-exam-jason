<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnitRumah;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    function CreateUnit(Request $request){

         $kavling = $request->input('kavling');
         $blok = $request->input('blok');
         $no_rumah = $request->input('no_rumah');
         $harga_rumah = $request->input('harga_rumah');
         $luas_tanah = $request->input('luas_tanah');
         $luas_bangunan = $request->input('luas_bangunan');

            //save ke database(eloquent)

         $unit = new UnitRumah;
         $unit->kavling = $kavling;
         $unit->blok = $blok;
         $unit->no_rumah = $no_rumah;
         $unit->harga_rumah = $harga_rumah;
         $unit->luas_tanah = $luas_tanah;
         $unit->luas_bangunan = $luas_bangunan;
         $unit->save();
    }

    function DeleteUnit($id){
        DB::delete('delete from units where id = ?', [$id]);
    }
}
