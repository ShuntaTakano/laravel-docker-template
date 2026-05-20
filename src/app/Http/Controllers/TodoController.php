<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;


class TodoController extends Controller
{
    private $todo;

    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    // 一覧表示処理
    public function index()
    {
        // Todoモデルのインスタンス作成(リファクタリング)
        //$todo = new Todo();
        /**ddしたら
         * App\Todo {#123 ▼
         *  #attributes: []
         * }
         */
        
        
        // todosテーブルの全件取得（SELECT * FROM todos）
        //$todos = $todo->all();
        $todos = $this->todo->all();
        //ddしたらtodosテーブルに入っている数分のid、content、created_atがそれぞれでる

        // viewにデータを渡す（todosという名前でbladeに渡る）
        //第一引数＝ビューの指定、第二引数＝ビューへ渡すデータの指定
        return view('todo.index', ['todos' => $todos]);
    }

    // 新規作成画面表示
    public function create()
    {
        // create.blade.php を表示
        return view('todo.create');
    }

    // 新規作成処理
    public function store(Request $request)
    {
        // フォームから送信された値を全て取得（連想配列）
        $inputs = $request->all(); // ←変更
        //ddしたら_tokenとcontentがでる

        // Todoモデルのインスタンス作成(リファクタリング)
        //$todo = new Todo();

        // 一括代入（配列の内容をまとめてセット）
        // ※fillableで許可された項目のみ代入される
        $this->todo->fill($inputs);

        // DBに保存（INSERT文が実行される）
        $this->todo->save();

        // 保存後、一覧画面にリダイレクト
        return redirect()->route('todo.index');
    }

    // 詳細画面表示
    public function show($id)
    {
        // Todoモデルのインスタンス作成(リファクタリング)
        //$model = new Todo();
        

        // 指定idの1件取得して格納
        // SELECT * FROM todos WHERE id = 3 LIMIT 1;
        $todo = $this->todo->find($id);

        // viewにデータを渡す（todosという名前でbladeに渡る）
        //第一引数＝ビューの指定、第二引数＝ビューへ渡すデータの指定
        return view('todo.show', ['todo' => $todo]); // 追記
    }

    // 編集画面表示
    // TODO: ルートパラメータを引数に受け取る
    public function edit($id)
    {
        // TODO: 編集対象のレコードの情報を持つTodoモデルのインスタンスを取得
        //SELECT * FROM todos WHERE id = 3 LIMIT 1;
        $todo = $this->todo->find($id);

        // viewにデータを渡す（todosという名前でbladeに渡る）
        //第一引数＝ビューの指定、第二引数＝ビューへ渡すデータの指定
        return view('todo.edit', ['todo' => $todo]);
    }
}