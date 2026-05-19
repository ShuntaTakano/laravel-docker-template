<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // このModelが対応するテーブルを指定
    protected $table = 'todos';

    // 一括代入で代入してよいカラムを制限
    // → セキュリティ対策（不正なカラム更新を防ぐ）
    protected $fillable = [
        'content',
    ];
}
