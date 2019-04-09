<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina', [
    'uses' => 'PagesController@pagina'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/todos/delete/{id}', [
    'uses' => 'TodosController@delete',
    'as' => 'todo.delete'
]);

Route::get('/todos/update/{id}', [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);


Route::post('/todos/save/{id}', [
    'uses' => 'TodosController@save',
    'as' => 'todo.save'
]);


Route::get('/todos', [
    'uses' => 'TodosController@index',
    'as' => 'todos'
]);

Route::post('/create/todo',[
    'uses' => 'TodosController@store'

]);


Route::get('/todos/completed/{id}',[
    'uses' => 'TodosController@completed',
    'as' =>'todo.completed'

]);