<?php
require_once( "file/block_file_test.php");
require_once( "file/character_file_test.php");
require_once( "tar/v7_tar_test.php");
require_once( "tar/ustar_tar_test.php");
require_once( "tar/pax_tar_test.php");
require_once( "tar/gnu_tar_test.php");
require_once( "compressed_archives/zlib_test.php");
require_once( "compressed_archives/bzip2_test.php");

require_once( "zip/zip_test.php");

require_once( "archive_test.php");
require_once( "archive_mime_test.php");
    
class ezcArchiveSuite extends PHPUnit_Framework_TestSuite
{
	public function __construct()
	{
		parent::__construct();
        $this->setName("Archive");

		$this->addTest( ezcArchiveTest::suite() );
        
		$this->addTest( ezcArchiveMimeTest::suite() );

		$this->addTest( ezcArchiveBlockFileTest::suite() );
		$this->addTest( ezcArchiveCharacterFileTest::suite() );
		$this->addTest( ezcArchiveV7TarTest::suite() );
		$this->addTest( ezcArchiveUstarTarTest::suite() );
		$this->addTest( ezcArchivePaxTarTest::suite() );
		$this->addTest( ezcArchiveGnuTarTest::suite() );

		$this->addTest( ezcArchiveZipTest::suite() );

		$this->addTest( ezcArchiveZlibTest::suite() );
		$this->addTest( ezcArchiveBZip2Test::suite() );
        

	}

    public static function suite()
    {
        return new ezcArchiveSuite();
    }
}


?>
