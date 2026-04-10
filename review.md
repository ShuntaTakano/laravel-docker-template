# Laravel Lesson レビュー①

## Todo一覧機能

### Todoモデルのallメソッドで実行しているSQLは何か
todosテーブルの全件取得を行うSQL。
SELECT * FROM todos;

### Todoモデルのallメソッドの返り値は何か
Illuminate\Database\Eloquent\Collectionクラスのインスタンス。

### 配列の代わりにCollectionクラスを使用するメリットは
配列操作に便利なメソッド（filter、mapなど）が使え、可読性・拡張性が高い。

### view関数の第1・第2引数の指定と何をしているか
第1引数：表示するBladeファイル（例：todo.index）
第2引数：Bladeに渡すデータ（連想配列）
ControllerからViewへデータを渡して画面表示を行う。

### index.blade.phpの$todos・$todoに代入されているものは何か
第1引数：表示するBladeファイル（例：todo.index）
第2引数：Bladeに渡すデータ（連想配列）
ControllerからViewへデータを渡して画面表示を行う。

## Todo作成機能

### Requestクラスのallメソッドは何をしているか
$todos：TodoモデルのCollectionインスタンス
$todo：Collectionから取り出した1件分のTodoモデルインスタンス

### fillメソッドは何をしているか
フォームから送信された全ての入力値を連想配列で取得する。

### $fillableは何のために設定しているか
一括代入時に代入を許可するカラムを制限し、不正なデータ更新を防ぐため。

### saveメソッドで実行しているSQLは何か
新規作成時はINSERT文。
INSERT INTO todos (content, created_at, updated_at) VALUES (...);

### redirect()->route()は何をしているか
指定したルートへリダイレクト（画面遷移）している。

## その他

### テーブル構成をマイグレーションファイルで管理するメリット
・DB構造をコードで管理できる  
・環境間で同じ構成を再現できる  
・変更履歴を管理できる  

### マイグレーションファイルのup()、down()は何のコマンドを実行した時に呼び出されるのか
up()：php artisan migrate 実行時  
down()：php artisan migrate:rollback 実行時  

### Seederクラスの役割は何か
テスト用や初期データをデータベースに投入するためのクラス。

### route関数の引数・返り値・使用するメリット
引数：ルート名（例：todo.create）  
返り値：そのルートに対応するURL  
メリット：URLを直接書かずに済み、保守性が向上する  

### @extends・@section・@yieldの関係性とbladeを分割するメリット
@extends：親Bladeを指定  
@section：子Bladeで差し込む内容を定義  
@yield：親Bladeで差し込み位置を指定  
メリット：共通レイアウトを再利用でき、保守性が向上する  

### @csrfは何のための記述か
CSRF攻撃を防ぐためのトークンをフォームに埋め込むため。

### {{ }}とは何の省略系か
PHPのecho文の省略記法で、HTMLエスケープされた状態で出力される。