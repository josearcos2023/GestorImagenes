<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{ 
    protected $table = 'foto';

    protected $primarykey = 'foto_id';
    
    protected $fillable = [
        'foto_nombre',
        'foto_descripcion',
        'foto_ruta',
        'album_id',
    ];

    public function album(){
        return $this -> belongsTo('App\Models\Album', 'album_id','album_id');
    }

}



?>