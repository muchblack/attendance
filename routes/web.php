<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','LoginController@index')->name('loginpage');

Route::get('/login','LoginController@index')->name('loginpage');
Route::post('/login','LoginController@labor_login');


Route::prefix('atten')->middleware('Checkloginstatus')->group(function () {
    //主頁面顯示
    Route::get('index','MainpageController@index')->name('mainpage');

    //員工相關
    Route::prefix('labor/')->group(function(){
        //員工清單
        Route::get('/','LaborController@index')->name('labor.show');
        //新增員工
        Route::get('add','LaborController@add_labor')->name('labor.add');
        Route::post('add','LaborController@add_labor_action');
        //修改員工
        Route::get('modify','LaborController@modify_labor')->name('labor.modify');
        Route::post('modify','LaborController@modify_labor_action');
        //員工軟刪除
        Route::get('delete/{idx}','LaborController@delete_labor');
    });

    //員工班別
    Route::prefix('schedules/')->group(function (){
        //員工班別清單
        Route::get('/','SchedulesController@index')->name('schedules.show');
        //員工班別新增
        Route::get('add','SchedulesController@add_schedules')->name('schedules.add');
        Route::post('add','SchedulesController@add_schedules_actions');
        //員工班別編輯
        Route::get('modify/{idx}','SchedulesController@modify_schedules')->name('schedules.modify');
        Route::post('modify','SchedulesController@modify_schedules_actions');
        //員工班別軟刪除
        Route::get('delete/{idx}', 'SchedulesController@delete_schedules_actions');
    });

    //員工請假假別
    Route::prefix('leave_set')->group(function() {
        Route::get('/', 'LeaveSetController@index')->name('leaveset.show');

        Route::get('add', 'LeaveSetController@add_leaveset');
        Route::post('add','LeaveSetController@add_leaveset_action');

        Route::get('modify/{idx}','LeaveSetController@modify_leaveset');
        Route::post('modify','LeaveSetController@modify_leaveset_actions');
    });

    //員工部門管理
    Route::prefix('dept_set')->group( function () {
        Route::get('/','DeptController@index');
    });
});

//一些測試code的放置場所
Route::get('test','TestController@index');
