# Laravel Lesson レビュー②

## Todo編集機能

### @method('PUT')を記述した行に何が出力されているか
<input type="hidden" name="_method" value="PUT">
HTMLの仕様としてPUTメソッドを指定できないため@method('PUT')を使用してPUTメソッドでリクエスト送信している

### findメソッドの引数に指定しているIDは何のIDか
todosテーブルのidカラムの値

### findメソッドで実行しているSQLは何か
SELECT * FROM todos WHERE id = ? LIMIT 1;

### findメソッドで取得できる値は何か
findメソッドは、指定したIDのtodosテーブルの1件のレコードをTodoモデルのインスタンスとして取得する

### saveメソッドは何を基準にINSERTとUPDATEを切り替えているのか
モデルインスタンスが既にDBに存在しているかを基準にINSERTとUPDATEを切り替えている

## Todo論理削除

### traitとclassの違いとは
クラスの継承とは異なり1つのクラスに複数のトレイトを追加することができる トレイト自体はインスタンス化できない
イメージは銃のアタッチメント＝トレイト

### traitを使用するメリットとは
複数クラスで共通機能を再利用できる

## その他

### TodoControllerクラスのコンストラクタはどのタイミングで実行されるか
TodoControllerが生成されるタイミング
（web.phpなどからルートにアクセスされた時）

### RequestクラスからFormRequestクラスに変更した理由
バリデーション処理をするため

### $errorsのhasメソッドの引数・返り値は何か
引数はcontent,返り値はtrue / false

### $errorsのfirstメソッドの引数・返り値は何か
引数はcontent,返り値はエラーメッセージの文字列

### フレームワークとは何か
フレームワークとは、アプリケーション開発を効率化するための土台や枠組み
よく使う機能や基本構造が用意されているため機能実装することに集中できる

### MVCはどういったアーキテクチャか
モデル、ビュー、コントローラーに分かれていることで
保守性や再利用性を高めることができる

### ORMとは何か、またLaravelが使用しているORMは何か
裏側で自動的にSQLを生成する機能
Laravelが使用しているORMはEloquent ORM

### composer.json, composer.lockとは何か
composer.json＝このプロジェクトで必要なライブラリ一覧を書くファイル

composer.lock＝実際にインストールされたライブラリの正確なバージョン記録

### composerでインストールしたパッケージ（ライブラリ）はどのディレクトリに格納されるのか
vendorディレクトリ
