<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
       {
        $title = 'Sistem Sekolah - Daftar Nilai';
        $classes = [
        [
            'name' => 'XII AKL 2',
            'grade' => 'XII',
            'major_id' => 'Akuntansi dan Keuangan Lembaga',
            'teacher_id' => 'Budi Santoso',
        ],
        ];
        return view('classes.index', [
            'title' => $title,
            'classes' => $classes
        ]);
    }
}
