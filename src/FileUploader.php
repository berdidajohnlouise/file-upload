<?php
namespace Berdidajohnlouise\FileUpload;

use Berdidajohnlouise\FileUpload\Contracts\FileContract;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FileUploader implements FileContract{

    private $image;
    private $directory;

    public function __construct($image, $directory = 'files'){
        $this->image = $image;
        $this->directory = $directory;
    }

    public function upload(): string
    {
        if (!$this->image instanceof UploadedFile) {
            throw new \InvalidArgumentException('Invalid or empty image provided.');
        }
        
        return $this->uploadToLocal();
    }

    private function uploadToLocal()
    {
        $filename = $this->generateFilename($this->image);
        $this->image->move($this->directory, $filename);
        $filePath = $this->directory . '/' . $filename;

        return $filePath;
    }

    private function generateFilename(UploadedFile $file)
    {
        return uniqid() . '.' . $file->getClientOriginalExtension();
    }
}