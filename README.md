# Laravel package for uploading files.

[![File Upload Test](https://github.com/berdidajohnlouise/file-upload/actions/workflows/test.yml/badge.svg)](https://github.com/berdidajohnlouise/file-upload/actions/workflows/test.yml)

A simple file upload that save files to directory and return file path using PHP 7+.

## Installation

```bash
$ composer require berdidajohnlouise/file-upload
```

## Usage

```php
$filepath = new FileUploader($file, 'to-your-storage-path');
```