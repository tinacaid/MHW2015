<?php

use App\Http\Controllers\WwjController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WdwController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//管理员导出Excel表
Route::delete('usershanchu/paper_stars/{student_id}', [\App\Http\Controllers\MhwController::class, 'Mhwshanchu']);//学生删除操作
Route::get('userchaxun/paper_stars/{student_id}', [\App\Http\Controllers\MhwController::class, 'Mhwpapershanxun']);//学生查询操作
