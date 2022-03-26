<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shablon extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'xizmat_nomi',
        'tartib_raqami',
        'amal_qilish_muddati',
        'etalonlar_nomi',
        'xujjat_belgilanishi',
        'metrologik_xizmat_nomi',
        'xizmat_egasi',
        'tayyorlovchi',
        'import_mamlakat',
        'parametrlari_nomi',
        'nomlanishi_zavod_raqami',
        'normativ_hujjat_nomi',
        'turining_tarifi',
        'qiyoslovchi',
        'sanasi'
        
    ];
}
