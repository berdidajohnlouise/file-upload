<?php

use Berdidajohnlouise\FileUpload\FileUploader;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class FileUploaderTest extends TestCase
{

    public function testUploadToLocal()
    {
        $file = new UploadedFile(
            __DIR__ . '/storage/sample.jpg',
            'sample.jpg',
            'image/jpeg',
            null,
            true
        );

        $uploader = new FileUploader($file,'images');
        $filePath = $uploader->upload();

        $this->assertFileExists($filePath);
        $this->assertStringContainsString('images', $filePath);

    }
      
}