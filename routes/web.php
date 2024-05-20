<?php

use App\Helpers\Telegram;
use Illuminate\Support\Facades\Route;

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

Route::post('/webhook', function () {
    return response('OK', 200);
});

/*
Route::get('/subscribe', function (Telegram $telegram) {
    $buttons = [
        'inline_keyboard' => [
            [
                [
                    'text' => 'Помощь',
                    'callback_data' => 'help_button',
                ],
                [
                    'text' => 'Товары',
                    'callback_data' => 'products_button',
                ],
            ]
        ]
    ];

    $sendMessage = $telegram->sendButtons(1883411748, 'Выберите действие:', json_encode($buttons));
    $sendMessage = json_decode($sendMessage);
    dd($sendMessage);
});
*/