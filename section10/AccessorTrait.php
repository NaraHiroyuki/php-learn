<?php 
trait AccessorTrait {
    // 未定義のプロパティを設定すると、配列propsに値を設定
    public function __set($name, $value) {
        // キーの有無をチェックし、存在しないキーはエラー
        if ($this->props[$name]) {
            $this->props[$name] = $value;
        } else {
            throw new Exception("{$name}プロパティは存在しません。");
        }
    }
    // 未定義のプロパティを取得すると、配列propsから値を取得
    public function __get($name) {
        // キーの有無をチェックし、存在しないキーはエラー
        if ($this->props[$name]) {
            return $this->props[$name];
        } else {
            throw new Exception("{$name}プロパティは存在しません。");
        }
    }
}

class MyTriangle {
    // トレイトを有効化
    use AccessorTrait;

    // プロパティを連想配列として準備
    private $props = [
        'base' => 1,
        'height' => 1
    ];

    public function getArea(): float {
        return $this->base * $this->height / 2;
    }
}

$cls = new MyTriangle();
$cls->base = 10;
$cls->height = 5;
echo $cls->getArea();
?>