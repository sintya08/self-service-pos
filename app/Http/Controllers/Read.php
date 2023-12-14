<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pos;

class Read extends Controller
{
    public function read()
    {
        // Mengambil data guestbook dengan paginate
        $barangs = Pos::paginate(10);

        // Mengirim data guestbook ke view
        return view('read', ['barangs' => $barangs]);
    }
}

