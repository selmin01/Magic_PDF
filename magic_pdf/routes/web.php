<?php

use Illuminate\Support\Facades\Route;
use Dompdf\Dompdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/gerar-pdf', function () {
    $dompdf = new Dompdf();
    $html = view('pdf')->render();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('exemplo.pdf', ['Attachment' => false]);
    exit();
});

Route::get('/', function () {
    return view('index');
});

// Route::get('/', function () {
//     return view('welcome');
// });

