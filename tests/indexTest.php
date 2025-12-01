<?php
use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testIndexFileExists()
    {
        $this->assertFileExists('index.php');
    }

    public function testKoneksiFileExists()
    {
        $this->assertFileExists('koneksi.php');
    }
}
