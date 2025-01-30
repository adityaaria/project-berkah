<?php

use App\Http\Controllers\Approval\FlowType;
use App\Http\Controllers\Approval\Settings;
use App\Http\Controllers\Approval\Type;
use App\Http\Controllers\Approvals;
use App\Http\Controllers\Aritmatika;
use app\Http\Controllers\Fruit;
use App\Http\Controllers\Recommendation;
use App\Http\Controllers\Recommendation\Approval;
use App\Http\Controllers\Recommendation\Approval\Status;
use App\Http\Controllers\Recommendation\Log;
use App\Http\Controllers\Recommendation\Quota;
use App\Http\Controllers\Recommendation\Quota\Generator\Schedule;
use App\Http\Controllers\Recommendation\Status as RecommendationStatus;
use App\Http\Controllers\Recommendation\Type as RecommendationType;
use App\Http\Controllers\RecommendationTypeActions;
use Illuminate\Support\Facades\Route;
use LDAP\Result;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
    echo 'ini dashboard';
});

Route::get('/reporting', function (){
    echo 'ini reporting';
});

Route::get('/hallo', function (){
    echo 'ini hallo';
});

Route::get('/employee/{empName}', function (string $empName){
    echo 'hallo dewa deploy '. $empName;
});

// Route::get('/aritmatika/{angka1}/{angka2}', function (string $angka1, string $angka2){
//     echo 'hasil dari '. $angka1 . 'ditambah ' .$angka2. ' adalah ' .$angka1 + $angka2;
// });

Route::get('/fruit/hello', [Fruit::class, 'hello']);
Route::get('aritmatika/pertambahan/{angka1}/{angka2}', [Aritmatika::class, 'pertambahan']);

// single controller
Route::get('approvals', [Approvals::class, '']);
Route::get('Recommendation', [Recommendation::class, '']);
Route::get('RecommendationTypeAction', [RecommendationTypeActions::class, '']);
Route::get('Result', [Result::class, '']);

// approval group controller

Route::get('approval/FlowType', [FlowType::class, '']);
Route::get('approval/Settings', [Settings::class, '']);
Route::get('approval/Type', [Type::class, '']);

// recoomendation group controller

Route::get('recommendation/Approval', [Approval::class, '']);
Route::get('recommendation/Log', [Log::class, '']);
Route::get('recommendation/Quota', [Quota::class, '']);
Route::get('recommendation/Status', [RecommendationStatus::class, '']);
Route::get('recommendation/Type', [RecommendationType::class, '']);
Route::get('recommendation/Approval/Status', [Status::class, '']);
Route::get('recommendation/Quota/Schedule', [Schedule::class, '']);
