<?php
// 一覧画面表示
// GET /todo にアクセスした時に indexメソッドを実行
// 名前付きルートを設定することで route('todo.index') が使える
Route::get('/todo', 'TodoController@index')->name('todo.index');
// 新規作成画面表示
// GET /todo/create にアクセスした時に createメソッドを実行
Route::get('/todo/create', 'TodoController@create')->name('todo.create'); 
// 新規作成処理（DB登録）
// POSTでフォーム送信されたデータを storeメソッドで受け取る
Route::post('/todo', 'TodoController@store')->name('todo.store');
// 詳細画面表示
// /todo/{id}はルートパラメータ
Route::get('/todo/{id}', 'TodoController@show')->name('todo.show');
// 編集画面表示
// 
Route::get('/todo/{id}/edit', 'TodoController@edit')->name('todo.edit');
// 更新
// GET＝データ取得、PUT＝データ更新
Route::put('/todo/{id}', 'TodoController@update')->name('todo.update');