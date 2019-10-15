<?php 
class TriangleFigure {
    // プロパティはprivate権限で定義
    private $base;
    private $height;

    // プロパティ値を初期化(コンストラクタ)
    public function __construct() {
        $this->setBase(1);
        $this->setHeight(1);
    }
    // baseプロパティのゲッター(取得)メソッド
    public function getBase(): float {
        return $this->base;
    }
    // baseプロパティのセッター(設定)メソッド
    public function setBase(float $base) {
        if ($base > 0) {
            $this->base = $base;
        }
    }
    // heightプロパティのゲッター(取得)メソッド
    public function getHeight(): float {
        return $this->height;
    }
    // heightプロパティのセッター(設定)メソッド
    public function setHeight(float $height) {
        if ($height > 0) {
            $this->height = $height;
        }
    }
    // プロパティ値を基に面積を取得
    public function getArea(): float {
        return $this->getBase() * $this->getHeight() / 2;
    }
}
?>