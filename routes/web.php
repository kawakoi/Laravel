<?php

Route::get('/', function (){
    return 'Home';
});

Route::get('/usuarios', function(){
    return 'Usuarios';
});

//Route::get('/usuarios/detalles', function (){
//    return 'Mostrando el detalle del usuario'.$_GET['id'];

//});

Route::get('/usuarios/nuevo', function (){
    return 'Crea un nuevo usuario';
});

//declaramos una funcion anonima, y se llama cuando la ruta le llega por get
Route::get('/usuarios/{id}', function ($id){//La variable $id se autocompleta cuando se le pasa un parámetro por "GET"
    return 'Mostrando el detalle del usuario '.$id;
})->where('id', '[0-9]+');//Aquí se pueden añadir expresiones regulares (filtros) para que si no coincide, salte a la siguiente línea


Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null){
    if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}, no tienes apodo";
    }
});

//declaramos una funcion anonima, y se llama cuando la ruta le llega por get
Route::get('/usuarios/{id}/edit', function ($id){//La variable $id se autocompleta cuando se le pasa un parámetro por "GET"
    return 'Puedes editar tus datos de usuario aquí '.$id;
})->where('id', '[0-9]+');//Aquí se pueden añadir expresiones regulares (filtros) para que si no coincide, salte a la siguiente línea