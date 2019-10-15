<?php
require_once('IFigure.php');

class Square implements IFigure
{
    // プロパティを定義
    private $width;
    private $heught;
    // コンストラクタでプロパティを初期化
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    // IFigure::getAreaメソッドを実装
    public function getArea(): float
    {
        return $this->width * $this->height;
    }
}
?>