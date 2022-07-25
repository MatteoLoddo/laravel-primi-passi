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

// homepage
Route::get('/', function(){
    return view ("Hello") ;
});


// pagina our-team
Route::get('/our-team', function(){
    
    return view("ourTeam");
})->name("ourTeam");


// pagina che ritorna un array convertito in json
Route::get('/corsi' , function(){
    $corsi = [
        [
            "title" => "Front-end",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident debitis porro incidunt!",
        ],
        [
            "title" => "Back-end",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident debitis porro incidunt!Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam exercitationem veritatis nisi repellendus modi quisquam incidunt possimus dolorem ullam, error odio praesentium magni!",
        ],
        [
            "title" => "FullStack",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident debitis porro incidunt! Lorem ipsum dolor sit amet.",
        ],
        [
            "title" => "Design",
            "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident debitis porro incidunt! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, neque vero. Sapiente, ab nostrum ea eaque natus aut nemo, aperiam ut voluptatem suscipit ducimus consequuntur at ullam. Accusantium fugit ipsum alias, iste minima ipsa?",
        ],
        [
            "title" => "Database",
            "description" => "Lorem ipsum dolor sit amet consectetur "
        ],
    ];

return view("courses" , [
    "coursesList" => $corsi
]);
})->name("courses");
