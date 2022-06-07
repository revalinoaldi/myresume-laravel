<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project
{
    private static $data = [
        [
            'type' => 'Web Application',
            'name' => 'E-Absensi',
            'path' => 'presensi.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'Akuntansi',
            'path' => 'akuntansi.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'App Penilaian',
            'path' => 'AppPenilaian.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'E-Arsip',
            'path' => 'arsipsurat.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'BNSP Project',
            'path' => 'bnsp.png'
        ],
        [
            'type' => 'Website CMS',
            'name' => 'Company Business',
            'path' => 'company-bussines.png'
        ],
        [
            'type' => 'Website CMS',
            'name' => 'ESport',
            'path' => 'esport.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'E-Voting',
            'path' => 'evoting.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'Merapi Golf',
            'path' => 'golf.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'Helpdesk Ticketing',
            'path' => 'helpdesk.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'E-Inventory',
            'path' => 'inventory.png'
        ],
        [
            'type' => 'Website CMS',
            'name' => 'Company Komit',
            'path' => 'komit.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'Koperasi',
            'path' => 'koperasi.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'E-Gaji',
            'path' => 'penggajian.png'
        ],
        [
            'type' => 'System Integrate',
            'name' => 'Sysmain Ajnusa',
            'path' => 'sysmain.png'
        ],
        [
            'type' => 'Website CMS',
            'name' => 'Violet CMS',
            'path' => 'violet.png'
        ],
        [
            'type' => 'Web Application',
            'name' => 'X-Travel',
            'path' => 'xtravel.png'
        ],
    ];

    public static function all()
    {
        return collect(self::$data);
    }
}
