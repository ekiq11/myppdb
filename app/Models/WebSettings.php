<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebSettings extends Model
{
    use HasFactory;

    protected $table = 'web_settings';

    // Tambahkan atau perbarui properti $fillable
    protected $fillable = [
        'name', 
        'site_name',
        'short_name',
        'title_home',
        'title_dashboard',
        'title_exam',
        'institution_name',
        'institution_short_name',
        'institution_synopsis',
        'institution_vision_mission',
        'institution_history',
        'institution_superioty',
        'institution_cooperate',
        'footer',
        'link_univ',
        'contact_telp',
        'contact_email',
        'contact_fax',
        'contact_address',
        'contact_maps',
        'contact_maps_link',
        'contact_facebook',
        'contact_whatsapp',
        'contact_instagram',
        'contact_twitter',
        'contact_youtube',
        'payment_bank',
        'payment_account',
        'payment_name',
        'created_at',  // Jika Anda ingin mengizinkan created_at untuk diisi, meskipun biasanya ini tidak diperlukan
        'updated_at',  // Biasanya Laravel otomatis menangani ini, tapi tidak ada salahnya untuk menyertakannya
    ];
}
