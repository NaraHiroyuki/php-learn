<?php
// MachineTraitトレイトを定義
trait MachineTrait {
    private $starting = 'Starting...Run!';

    // 機器を起動
    public function run() {
        echo $this->starting;
    }
}
?>