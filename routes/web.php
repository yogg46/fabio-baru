<?php


use App\Http\Controllers\dataAdminController;
use App\Http\Controllers\dataAturanController;
use App\Http\Controllers\dataPakarController;
use App\Http\Controllers\DetailPenyakitController;
use App\Http\Controllers\LaporanController;
use App\Http\Livewire\Chat\AdminChat;
use App\Http\Livewire\Chat\UserChat;
use App\Http\Livewire\Diagnosa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/datagejala', function () {
//     return view('admin.dataPakar.datagejala');
// });

// Route::get('/datapenyakit', function () {
//     return view('admin.dataPakar.datapenyakit');
// });

// Route::get('/dataobat', function () {
//     return view('admin.dataPakar.dataobat');
// });

// Route::get('/detailpenyakit', function () {
//     return view('admin.dataAturan.detailpenyakit');
// });

Route::get('/laporan', function () {
    return view('admin.dataLaporan.laporan');
});

// Route::get('/chat', function () {
//     return view('admin.dataLaporan.chat');
// });

// Route::get('/komentar', function () {
//     return view('admin.dataLaporan.komentar');
// });

// Route::get('petani/diagnosa', function () {
//     return view('petani.menuDiagnosa.diagnosa');
// });

// Route::get('petani/hasilDiagnosa', function () {
//     return view('petani.menuDiagnosa.hasilDiagnosa');
// })->name('hasil-diagnosa');

Route::get('/petani/hasilDiagnosa/{id}', [DetailPenyakitController::class, 'hasilDiagnosa'])->middleware('auth')->name('hasil-diagnosa');

Route::get('/petani/detailDiagnosa/{id}', [DetailPenyakitController::class, 'detailDiagnosa'])->middleware('auth')->name('detail-diagnosa');

// Route::get('petani/detailDiagnosa', function () {
//     return view('petani.menuDiagnosa.detailDiagnosa');
// });
Route::get('petani/diagnosa', Diagnosa::class)->middleware('auth')->name('diagnosa');

Route::get('petani/chatadmin', [UserChat::class])->middleware('auth');
Route::post('/generate-pdf', [DetailPenyakitController::class, 'generatePdf'])->middleware('auth');

Route::post('/komen', [LaporanController::class, 'komen'])->middleware('auth')->name('save-komen');
Route::get('petani/komentaradmin', [LaporanController::class, 'showKomen'])->middleware('auth')->name('show-komen');

Route::get('petani/riwayatDiagnosa', [DetailPenyakitController::class, 'riwayatDiagnosa'])->middleware('auth')->name('riwayat-diagnosa');

Route::get('petani/detailRiwayat', function () {
    return view('petani.riwayatDiagnosa.detailRiwayat');
});


Route::get('/dataMaster/dataadmin', [dataAdminController::class, 'index'])->middleware('checkRole:admin', 'auth')->name('data-admin');
Route::post('/dataMaster/dataadmin/simpanadmin', [dataAdminController::class, 'simpanAdmin'])->middleware('checkRole:admin', 'auth')->name('simpan-data-admin');
Route::post('/dataMaster/dataadmin/updateadmin', [dataAdminController::class, 'updateAdmin'])->middleware('checkRole:admin', 'auth')->name('update-data-admin');
Route::any('/dataMaster/dataadmin/deleteadmin/{id}', [dataAdminController::class, 'deleteAdmin'])->middleware('checkRole:admin', 'auth')->name('delete-data-admin');
Route::get('/dataMaster/dataadmin/tambah', [dataAdminController::class, 'tambahAdmin'])->middleware('checkRole:admin', 'auth')->name('tambah-admin');
Route::get('/dataMaster/dataadmin/edit/{id}', [dataAdminController::class, 'editAdmin'])->middleware('checkRole:admin', 'auth')->name('edit-admin');

Route::get('/dataMaster/datapetani', [dataAdminController::class, 'user'])->middleware('checkRole:admin', 'auth')->name('data-petani');
Route::post('/dataMaster/datapetani/simpanpetani', [dataAdminController::class, 'simpanPetani'])->middleware('checkRole:admin', 'auth')->name('simpan-data-petani');
Route::post('/dataMaster/datapetani/updatepetani', [dataAdminController::class, 'updatePetani'])->middleware('checkRole:admin', 'auth')->name('update-data-petani');
Route::any('/dataMaster/datapetani/deletepetani/{id}', [dataAdminController::class, 'deletePetani'])->middleware('checkRole:admin', 'auth')->name('delete-data-petani');
Route::get('/dataMaster/datapetani/tambah', [dataAdminController::class, 'tambahPetani'])->middleware('checkRole:admin', 'auth')->name('tambah-petani');
Route::get('/dataMaster/datapetani/edit/{id}', [dataAdminController::class, 'editPetani'])->middleware('checkRole:admin', 'auth')->name('edit-petani');

Route::get('/dataPakar/datagejala', [dataPakarController::class, 'datagejala'])->middleware('checkRole:admin', 'auth')->name('data-gejala');
Route::post('/dataPakar/datagejala/simpangejala', [dataPakarController::class, 'simpanGejala'])->middleware('checkRole:admin', 'auth')->name('simpan-data-gejala');
Route::post('/dataPakar/datagejala/updategejala', [dataPakarController::class, 'updateGejala'])->middleware('checkRole:admin', 'auth')->name('update-data-gejala');
Route::any('/dataPakar/datagejala/deletegejala/{id}', [dataPakarController::class, 'deleteGejala'])->middleware('checkRole:admin', 'auth')->name('delete-data-gejala');
Route::get('/dataPakar/datagejala/tambah', [dataPakarController::class, 'tambahGejala'])->middleware('checkRole:admin', 'auth')->name('tambah-gejala');
Route::get('/dataPakar/datagejala/edit/{id}', [dataPakarController::class, 'editGejala'])->middleware('checkRole:admin', 'auth')->name('edit-gejala');

Route::get('/dataPakar/datapenyakit', [dataPakarController::class, 'datapenyakit'])->middleware('checkRole:admin', 'auth')->name('data-penyakit');
Route::post('/dataPakar/datapenyakit/simpanpenyakit', [dataPakarController::class, 'simpanPenyakit'])->middleware('checkRole:admin', 'auth')->name('simpan-data-penyakit');
Route::post('/dataPakar/datapenyakit/updatepenyakit', [dataPakarController::class, 'updatePenyakit'])->middleware('checkRole:admin', 'auth')->name('update-data-penyakit');
Route::any('/dataPakar/datapenyakit/deletepenyakit/{id}', [dataPakarController::class, 'deletePenyakit'])->middleware('checkRole:admin', 'auth')->name('delete-data-penyakit');
Route::get('/dataPakar/datapenyakit/tambah', [dataPakarController::class, 'tambahPenyakit'])->middleware('checkRole:admin', 'auth')->name('tambah-penyakit');
Route::get('/dataPakar/datapenyakit/edit/{id}', [dataPakarController::class, 'editPenyakit'])->middleware('checkRole:admin', 'auth')->name('edit-penyakit');

Route::get('/dataPakar/dataobat', [dataPakarController::class, 'dataobat'])->middleware('checkRole:admin', 'auth')->name('data-obat');
Route::post('/dataPakar/dataobat/simpanobat', [dataPakarController::class, 'simpanObat'])->middleware('checkRole:admin', 'auth')->name('simpan-data-obat');
Route::post('/dataPakar/dataobat/updateobat', [dataPakarController::class, 'updateObat'])->middleware('checkRole:admin', 'auth')->name('update-data-obat');
Route::any('/dataPakar/dataobat/deleteobat/{id}', [dataPakarController::class, 'deleteObat'])->middleware('checkRole:admin', 'auth')->name('delete-data-obat');
Route::get('/dataPakar/dataobat/tambah', [dataPakarController::class, 'tambahObat'])->middleware('checkRole:admin', 'auth')->name('tambah-obat');
Route::get('/dataPakar/dataobat/edit/{id}', [dataPakarController::class, 'editObat'])->middleware('checkRole:admin', 'auth')->name('edit-obat');

Route::get('dataAturan/detailpenyakit', [dataAturanController::class, 'detailpenyakit'])->middleware('checkRole:admin', 'auth')->name('detail-penyakit');
Route::post('dataAturan/detailpenyakit/simpan', [dataAturanController::class, 'simpan'])->middleware('checkRole:admin', 'auth')->name('simpan-detail-penyakit');
Route::post('dataAturan/detailpenyakit/update', [dataAturanController::class, 'update'])->middleware('checkRole:admin', 'auth')->name('update-detail-penyakit');
Route::any('dataAturan/detailpenyakit/delete/{id}', [dataAturanController::class, 'delete'])->middleware('checkRole:admin', 'auth')->name('delete-detail-penyakit');
Route::get('dataAturan/detailpenyakit/tambah', [dataAturanController::class, 'tambahDetailPenyakit'])->middleware('checkRole:admin', 'auth')->name('tambah-detailpenyakit');
Route::get('dataAturan/detailpenyakit/edit/{id}', [dataAturanController::class, 'editDetailPenyakit'])->middleware('checkRole:admin', 'auth')->name('edit-detail-penyakit');

Route::get('/laporan', [LaporanController::class, 'laporan'])->middleware('checkRole:admin,pemilik', 'auth');
Route::get('/laporan/detail/{id}', [LaporanController::class, 'detaillaporan'])->middleware('checkRole:admin,pemilik', 'auth')->name('detail-laporan-admin');
Route::get('/laporan/lihatlaporan', [LaporanController::class, 'lihatlaporan'])->middleware('checkRole:admin,pemilik', 'auth')->name('lihat-laporan');
Route::get('/laporan/cetaklaporan', [LaporanController::class, 'cetaklaporan'])->middleware('checkRole:admin,pemilik', 'auth')->name('cetak-laporan');
Route::get('/laporan/cetaklaporangejala', [LaporanController::class, 'cetaklaporangejala'])->middleware('checkRole:admin,pemilik', 'auth')->name('cetak-laporan-gejala');
Route::get('/laporan/cetaklaporanpenyakit', [LaporanController::class, 'cetaklaporanpenyakit'])->middleware('checkRole:admin,pemilik', 'auth')->name('cetak-laporan-penyakit');
Route::get('/laporan/cetaklaporanobat', [LaporanController::class, 'cetaklaporanobat'])->middleware('checkRole:admin,pemilik', 'auth')->name('cetak-laporan-obat');
Route::get('/laporan/gejala', [LaporanController::class, 'laporangejala'])->middleware('checkRole:admin,pemilik', 'auth')->name('laporan-gejala');
Route::get('/laporan/penyakit', [LaporanController::class, 'laporanpenyakit'])->middleware('checkRole:admin,pemilik', 'auth')->name('laporan-penyakit');
Route::get('/laporan/obat', [LaporanController::class, 'laporanobat'])->middleware('checkRole:admin,pemilik', 'auth')->name('laporan-obat');

Route::get('/laporanchat/chat', [LaporanController::class, 'chat'])->middleware('auth')->name('chat');
Route::get('/laporanchat/chat/balaschat/{id}', AdminChat::class)->middleware('auth')->name('balas-chat');

Route::get('/laporankomentar/komentar', [LaporanController::class, 'komentar'])->name('komentar');
Route::any('/laporankomentar/komentar/delete/{id}', [LaporanController::class, 'delete'])->middleware('checkRole:admin','auth')->name('delete-komentar');

Route::get('petani/chatadmin', UserChat::class)->middleware('auth')->name('chat-ke-admin');

Route::any('notif/{id}', [LaporanController::class, 'notiif'])->middleware('auth')->name('notifications.destroy');


Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'Dadmin'])->name('admin')->middleware('checkRole:admin,pemilik', 'auth');

Route::get('/dashbord/pemilik', [App\Http\Controllers\DashboardController::class, 'Dpemilik'])->name('pemilik')->middleware('checkRole:pemilik');

Route::get('/dashbord', [App\Http\Controllers\DashboardController::class, 'Duser'])->name('user')->middleware('checkRole:user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
