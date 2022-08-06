<?php

class Installer
{
    public $env = [];

    public function __construct($env)
    {
        $this->env = $env;
    }

    public function run()
    {
        if (!$this->regenerateEnvFile()) {
            return false;
        }

        echo '<div class="text-success px-2 py-1 fw-bold">شروع نصب</div>';
        ob_flush();

        $dir = "source";
        $dirNew = "../";
        $result = false;

        if (is_dir($dir)) {
            if ($dh = opendir($dir)) {
                $result = true;
                while (($file = readdir($dh)) !== false) {

                    if ($file == "." || $file == "..") continue;

                    echo '<div class="px-2 py-1">در حال انتقال <b>' . $file . '</b></div>';
                    ob_flush();

                    if ($file == 'public') {
                        if ($dp = opendir($dir . '/' . $file)) {
                            while (($pfile = readdir($dp)) !== false) {
                                if ($pfile == "." || $pfile == "..") continue;
                                $move = rename($dir . '/' . $file . '/' . $pfile, $pfile);
                            }
                        } else {
                            $result = false;
                        }
                    } else {
                        $move = rename($dir . '/' . $file, $dirNew . '/' . $file);
                    }

                    if ($move) {
                        echo '<div class="px-2 py-1 text-success"> با موفقیت انتقال یافت: <b>' . $file . '</b></div>';
                        ob_flush();
                    } else {
                        $result = false;
                        echo '<div class="px-2 py-1 text-danger"> مشکل در انتقال: <b>' . $file . '</b></div>';
                        ob_flush();
                    }
                }
                closedir($dh);
            }
        }

        if ($result) {

            $this->removeInstallerFilesAndDirectories();

        }


        return $result;
    }

    private function regenerateEnvFile()
    {
        $env = '';
        foreach ($this->env as $row) {
            if (!is_array($row)) {
                $env .= $row . "\n";
            } else {
                $env .= implode('=', $row) . "\n";
            }
        }
        return file_put_contents('source/.env', $env);
    }

    private function removeInstallerFilesAndDirectories()
    {
        $installerFilesAndDirs = [
            ['file', 'installer/assets/css/bootstrap.min.css'],
            ['file', 'installer/assets/js/bootstrap.bundle.min.js'],
            ['file', 'installer/assets/js/installer.js'],
            ['folder', 'installer/assets/js'],
            ['folder', 'installer/assets/css'],
            ['folder', 'installer/assets'],
            ['file', 'installer/helpers/helper_functions.php'],
            ['folder', 'installer/helpers'],
            ['file', 'installer/view/install-box.php'],
            ['file', 'installer/view/install-form.php'],
            ['file', 'installer/view/install-result.php'],
            ['folder', 'installer/view'],
            ['file', 'installer/Installer.php'],
            ['folder', 'installer'],
            ['folder', 'source/public'],
            ['folder', 'source'],
            ['file', 'installer.php']
        ];

        foreach($installerFilesAndDirs as $item){
            if($item[0] == 'file'){
                @unlink($item[1]);
            }else{
                @rmdir($item[1]);
            }
        }

    }

}
