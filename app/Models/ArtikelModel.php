<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
class ArtikelModel{
  public static function get_all(){
    $artikel = DB::table('artikel')->get();
    return $artikel;
  }

  public static function save($data){
    
    unset($data["_token"]);
    
    $new_artikel= DB::table('artikel')->insert([
                    'judul' => $data ["judul"],
                    'isi'=> $data ["isi"],
                    'slug'=> str_replace(' ', '-', strtolower($data ["judul"])),
                    'tag'=> $data ["tag"],
                    ]);
     
    return $new_artikel;
  }

  public static function find_by_id($id){
    $Detail = DB::table('artikel')
              -> where ('id', $id)
              -> first();
    return $Detail;
  }

  public static function update ($id, $request){
    $artikel = DB::table('artikel')
                    ->where ('id', $id)
                    ->update ([
                      'judul' => $request ["judul"],
                      'isi'=> $request ["isi"],
                      'slug'=> str_replace(' ', '-', strtolower($request ["judul"])),
                      'tag'=> $request ["tag"],
                      
                    ]);
    return $artikel;
  }

  public static function destroy($id){
    $deleted = DB::table('artikel')
                  -> where('id', $id)
                  -> delete();
    return $deleted;
  }
}