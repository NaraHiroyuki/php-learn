<?php 

abstract class Figure {
    // プロパティを定義
    protected $width;
    protected $height;

    // コンストラクタ(プロパティを初期化)
    public function __construt(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // 面積を求める(中身はダミー)
    public abstract function getArea(): float;
}

?>
