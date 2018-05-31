<?php

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

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Comment;

Route::get('/', function () {
    return view('welcome');
});

Route::any('/profile/{id}', 'ProfileController@showProfile');

Route::get('/home', function() {
    return view('home', [
        'posts' => [
            [
                'id' => 1,
                'title' => 'Vintage-Inspired Finds for Your Home',
                'content' => 'months ago, we found ridiculously cheap plane tickets for Boston and off we went. It was our first visit to the city and, believe it or not, Stockholm in February was more pleasant than Boston in March. It probably has a lot to do with the fact that we arrived completely unprepared. That I, in my converse and thin jacket, did not end up with pneumonia is honestly not even fair',
                'image_url' => 'http://via.placeholder.com/750x500',
                'comments' => 345
            ],
            [
                'id' => 2,
                'title' => 'Vintage-Inspired Finds for Your Home',
                'content' => 'months ago, we found ridiculously cheap plane tickets for Boston and off we went. It was our first visit to the city and, believe it or not, Stockholm in February was more pleasant than Boston in March. It probably has a lot to do with the fact that we arrived completely unprepared. That I, in my converse and thin jacket, did not end up with pneumonia is honestly not even fair',
                'image_url' => 'http://via.placeholder.com/750x500',
                'comments' => 123
            ],
            [
                'id' => 3,
                'title' => 'Vintage-Inspired Finds for Your Home',
                'content' => 'months ago, we found ridiculously cheap plane tickets for Boston and off we went. It was our first visit to the city and, believe it or not, Stockholm in February was more pleasant than Boston in March. It probably has a lot to do with the fact that we arrived completely unprepared. That I, in my converse and thin jacket, did not end up with pneumonia is honestly not even fair',
                'image_url' => 'http://via.placeholder.com/750x500',
                'comments' => 222
            ]
        ]
    ]);
});