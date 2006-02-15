<?php


class ezcArchiveMimeTest extends ezcTestCase
{
    public function setUp()
    {
        $this->createTempDir( "ezcArchive_" );
        date_default_timezone_set("UTC"); 
    }

    public function tearDown()
    {
        $this->removeTempDir();
    }

    public function testRecognizeGzip()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/tar_gnu_2_textfiles.tar", "$dir/my.tar" );
        exec( "gzip $dir/my.tar" );

        $this->assertEquals( ezcArchive::GZIP, ezcArchiveMime::detect( "$dir/my.tar.gz" ) );
    }

    public function testRecognizeBzip2()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/tar_gnu_2_textfiles.tar", "$dir/my.tar" );
        exec( "bzip2 $dir/my.tar" );

        $this->assertEquals( ezcArchive::BZIP2, ezcArchiveMime::detect( "$dir/my.tar.bz2" ) );
    }


    public function testRecognizeZip()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/infozip_2_textfiles.zip", "$dir/my.zip" );

        $this->assertEquals( ezcArchive::ZIP, ezcArchiveMime::detect( "$dir/my.zip" ) );
    }

    public function testRecognizeTarUstar()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/tar_ustar_2_textfiles.tar", "$dir/my.tar" );

        $this->assertEquals( ezcArchive::TAR_USTAR, ezcArchiveMime::detect( "$dir/my.tar" ) );
    }

    public function testRecognizeTarV7()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/tar_v7_2_textfiles.tar", "$dir/my.tar" );

        $this->assertEquals( ezcArchive::TAR_V7, ezcArchiveMime::detect( "$dir/my.tar" ) );
    }

    public function testRecognizeTarPax()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/tar_pax_2_textfiles.tar", "$dir/my.tar" );

        $this->assertEquals( ezcArchive::TAR_PAX, ezcArchiveMime::detect( "$dir/my.tar" ) );
    }

    public function testRecognizeTarGnu()
    {
        $dir = $this->getTempDir();
        copy ( dirname( __FILE__ ) . "/data/tar_gnu_2_textfiles.tar", "$dir/my.tar" );

        $this->assertEquals( ezcArchive::TAR_GNU, ezcArchiveMime::detect( "$dir/my.tar" ) );
    }


    public static function suite()
    {
        return new ezcTestSuite( "ezcArchiveMimeTest" );
    }
}

?>
