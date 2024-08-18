<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

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

Route::get('/', function () {
    return view('welcome');
});

//membuat route/student
Route::get('/student', [StudentController::class, 'index']);
Route::get('/class', [ClassroomController::class, 'kelas']);

Route::get('/contact', function () {
    return view('contact', [
        'nama_siswa' => 'Huluk',
        'kelas' => '12 RPL C',
        'alamat' => 'Bandung barat',
        'telp' => '0881637265',
        'Ras' => 'Makhluk hijau',
    ]);
});


Route::get('/nama', function () {
    return ('Nama saya Muhammad Aria Maulana');
});

Route::get('/tambah', function () {
    return 7+8;
});

Route::get('/kurang', function () {
    return 20-7;
});

Route::get('/kali', function () {
    return 45*6;
});

Route::get('/bagi', function () {
    return 22/7;
});

// Route::get('produk/{id}', function ($id) {
//     return 'Ini produk yang sesuai dengan id : '.$id;
// });


// Route::get('produk/{id}', function ($id) {
//     return view ('product.detail',[
//     'id'=>$id
//     ]);
// });

Route::get('produk/{id}', function ($id) {
    $produk = [
        [
            'id' => 1,
            'nama_produk' => 'ROG Phone 5',
            'harga' => '15000000',
            'stok' => '50',
        ],
        [
            'id' => 2,
            'nama_produk' => 'Samsung S24',
            'harga' => '7000000',
            'stok' => '70',
        ],
        [
            'id' => 3,
            'nama_produk' => 'Infinix GT10',
            'harga' => '5000000',
            'stok' => '80',
        ],
    ];
   $cari_produk = collect($produk)->where('id',$id)->first();
   return view('product.detail', [
    'data'=>$cari_produk
   ]);
});

Route::get('siswa/{nis}', function ($nis) {
    $siswa = [
        [
            'nis' => 101,
            'nama_siswa' => 'Rizki Ridho',
            'jurusan' => 'RPL',
            'tingkat' => '12',
            'ekskul' => 'Djoekamti',
        ],
        [
            'nis' => 102,
            'nama_siswa' => 'Daffa Khairul',
            'jurusan' => 'RPL',
            'tingkat' => '12',
            'ekskul' => 'Badminton',
        ],
        [
            'nis' => 103,
            'nama_siswa' => 'Jibril Hidayat',
            'jurusan' => 'RPL',
            'tingkat' => '12',
            'ekskul' => 'Binvok',
        ],
    ];
   $cari_nis = collect($siswa)->where('nis',$nis)->first();
   return view('siswa', [
    'data'=>$cari_nis
   ]);
});

Route::get('/home', function () {
    $warsel = [
        [
            'nis' => 101,
            'nama_siswa' => 'Rizki Ridho',
            'jurusan' => 'RPL',
            'tingkat' => '12',
            'ekskul' => 'Djoekamti',
        ],
        [
            'nis' => 102,
            'nama_siswa' => 'Daffa Khairul',
            'jurusan' => 'RPL',
            'tingkat' => '12',
            'ekskul' => 'Badminton',
        ],
        [
            'nis' => 103,
            'nama_siswa' => 'Jibril Hidayat',
            'jurusan' => 'RPL',
            'tingkat' => '12',
            'ekskul' => 'Binvok',
        ],
    ];
    return view ('home',[
        'nama' => 'Arman Sucipto',
        'role' => 'admin',
        'warsel' => $warsel
    ]);
});
