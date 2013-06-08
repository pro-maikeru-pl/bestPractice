<?php
# Examples
class File {
    public function writeNote() {}
    public function open() {}
    public function isOpen() {}
    public function close() {}
}
$file = new File();
if (!$file->isOpen()) {
    $file->open();
}
$file->writeNote("note")->close();