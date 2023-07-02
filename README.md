# Laravel package for uploading files.

A simple file upload that save files to directory and return file path using PHP 7+.

## Installation

```bash
$ composer require berdidajohnlouise/file-upload
```

## Usage

```php
$filepath = new FileUploader($file, 'file directory path');
```