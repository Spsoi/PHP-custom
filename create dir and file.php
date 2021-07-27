<?php
// Забираем файл по URL, сохраняем его на сервере.
public function download ($file) {
    $FM = fileManager(dirname(__FILE__,3).'/app/Storage/Parsing/');
    if (!$FM->exists()) {
        $FM->createDir();
    }
    $path = dirname(__FILE__,3).'/app/Storage/Parsing/'.$file['description']['id'].'.mp3';
    file_put_contents($path, file_get_contents($file['url']));
    return $file;
}
