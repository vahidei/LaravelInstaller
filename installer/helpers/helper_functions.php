<?php
if(!function_exists('uploadFile')){
    function uploadFile($file, $type)
    {
        $mimetypes = ['png', 'jpg', 'jpeg', 'svg'];
        $name = 'logo';

        if($type == 'favicon'){
            $mimetypes = ['ico', 'png', 'jpg', 'jpeg'];
            $name = 'favicon';
        }

        $f = explode('.', $file['name']);
        if( !in_array(end($f), $mimetypes) ){
            return false;
        }

        if(filesize(($file['tmp_name'])) > 5000000){
            return false;
        }

        if(!move_uploaded_file($file['tmp_name'], 'source/storage/app/public/'.$name.'.'.end($f))){
            return false;
        }

        return true;

    }
}

if(!function_exists('getLaravelEnv')){
    function getLaravelEnv(){
        $envData = file_get_contents('source/.env');
        $ENV = [];
        foreach (explode("\n", $envData) as $item) {
            $row = '';
            if (!empty($item) && strpos($item, '=') !== false) {
                $e = explode('=', $item);
                $key = $e[0];
                unset($e[0]);
                $row = [$key, implode('=', $e)];
            }
            $ENV[] = $row;
        }
        return $ENV;
    }
}