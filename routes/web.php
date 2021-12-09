<?php

use App\Http\Controllers\HomeController;
use App\Models\Option;
use App\Models\Poll;
use GrahamCampbell\ResultType\Success;
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

Route::get('/',[HomeController::class,'index']);

Route::get('/test', function () {
    // $polls =new Poll();
    // $polls->title = 'What kind of food do you prefer?';
    // $polls->save();
    // $addOption = new Option();
    // $addOption->option = 'borger';
    // $addOption->save();
    // $addOption = new Option();
    // $addOption->option = 'pizza';
    // $addOption->save();
    // $addOption = new Option();
    // $addOption->option = 'Sushi';
    // $addOption->save();
    // $poll = Poll::find(2);
    // $option = Option::find(5);
    // $poll->options()->attach($option);
    // $option = Option::find(6);
    // $poll->options()->attach($option);
    // $option = Option::find(7);
    // $poll->options()->attach($option);
    // $polls =new Poll();
    // $polls->title = 'what your favor color?';
    // $polls->save();
    // $addOption = new Option();
    // $addOption->option = 'red';
    // $addOption->save();
    // $addOption = new Option();
    // $addOption->option = 'blue';
    // $addOption->save();
    // $addOption = new Option();
    // $addOption->option = 'black';
    // $addOption->save();
    // $addOption = new Option();
    // $addOption->option = 'ping';
    // $addOption->save();
    // $poll = Poll::find(3);
    // $option = Option::first();
    // $poll->options()->attach($option);
    // return $poll;
    // $option = Option::find(8);
    // $poll->options()->attach($option);
    // $option = Option::find(10);
    // $poll->options()->attach($option);
    // $option = Option::find(10);
    // $poll->options()->attach($option);
    // return 'Success';
});


