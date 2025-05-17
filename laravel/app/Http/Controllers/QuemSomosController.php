<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class QuemSomosController extends Controller
{
    public function index()
{
    $carrosselImgs = File::files('/home/u745192978/domains/igrejamosaico.site/public_html/img/carrossel');

    $imagens = collect($carrosselImgs)->map(function ($file) {
        return 'img/carrossel/' . $file->getFilename();
    });

    return view('quem-somos', compact('imagens'));
}

}
