<?php
use PHPUnit\Framework\TestCase;
require_once './Palindrom.php';

class PalindromTest extends TestCase{
    public function testAnalize(){
        $pal = new Palindrom();
        $this->assertEquals('argentinamanitnegra',$pal->analize('Argentina manit negra'));
        $this->assertEquals('sumsummusmus',$pal->analize('Sum summus mus'));
        $this->assertEquals('tinamanit',$pal->analize('Argentina manit'));
        $this->assertEquals('A',$pal->analize('Argentina'));
    }
}
?>
