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

Route::get('admin/export-company-star', [WwjController::class, 'exportCompanyStar']);
Route::get('admin/export-paper-star', [WwjController::class, 'exportPaperStar']);
Route::get('admin/export-research-star', [WwjController::class, 'exportResearchStar']);
Route::get('admin/export-software-star', [WwjController::class, 'exportSoftwareStar']);
Route::get('admin/export-competition-star', [WwjController::class, 'exportCompetitionStar']);

//管理员查询双创之星
Route::get('admin/company_stars', [WwjController::class, 'ViewCompanyStar']);

//删除双创之星报名接口
Route::delete('student/delete_company_stars', [WwjController::class, 'deleteCompanyStar']);

