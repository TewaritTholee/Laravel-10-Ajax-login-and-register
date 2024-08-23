<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

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


// Route::get('user/dashboard', [AuthController::class, 'dashboard'])->name('user.dashboard');


// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
// Route::get('dashboard', [AuthController::class, 'dashboard']); 
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// Route::get('login', [AuthController::class, 'index'])->name('login');
// Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
// Route::get('registration', [AuthController::class, 'registration'])->name('register');
// Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
// Route::get('user/dashboard', [AuthController::class, 'dashboard'])->name('user.dashboard');  // เปลี่ยนเส้นทางที่นี่
// Route::get('logout', [AuthController::class, 'logout'])->name('logout');





// หน้าเข้าสู่ระบบ
Route::get('login', [AuthController::class, 'index'])->name('auth.login');

// หน้า ลงทะเบียน
Route::get('register', [AuthController::class, 'registration'])->name('auth.register');

// การส่งข้อมูลเข้าสู่ระบบ
Route::post('post-login', [AuthController::class, 'postLogin'])->name('auth.postLogin');

// การส่งข้อมูลลงทะเบียน
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('auth.postRegistration');

// หน้าแดชบอร์ด
// Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('user/dashboard', [AuthController::class, 'dashboard'])->name('user.dashboard');

// ออกจากระบบ
// Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');









// use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });


// // เส้นทางแบบ GET สำหรับแสดงฟอร์ม Login และ Register
// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('auth.register');
// });



// Route::post('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/login', [AuthController::class, 'login'])->name('login');


// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/logout', [AuthController::class, 'logout']);

// Route::middleware(['auth', 'check.status'])->group(function () {
//     Route::get('/user', function () {
//         return view('user.dashboard');
//     });

//     Route::get('/admin', function () {
//         return view('admin.dashboard');
//     });

//     Route::get('/manager', function () {
//         return view('manager.dashboard');
//     });
// });