<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingatlan extends Model
{
    protected $table='kategoriak';
    protected $fillable=['kategoria','leiras','hirdetesDatuma','tehermentes','ar','kepUrls'];
    public $timestamps=false;
    public function kategoria()
    {
        return $this->belongsto(Kategoria::class,'kategoria');
    }

    public static function getAllWithCategory()
    {
        return self::with('kategoria:id,nev')->get()->map(function($ingatlan)
        {
            return [
                'id'=>$ingatlan->id,
                'kategoria'=>$ingatlan->kategoria->nev ?? null,
                'leiras'=>$ingatlan->leiras,
                'hirdetesDatuma'=>$ingatlan->hirdetesDatuma,
                'tehermentes'=>$ingatlan->tehermentes,
                'ar'=>$ingatlan->ar,
                'kepUrl'=>$ingatlan->kepUrl,
            ];
        }
    );
    }
}
