<div style="max-height:500px; overflow-y: auto">
    <?php
    if(isset($error)){
        echo '<div class="m-3 alert alert-danger">'.$error.'</div>';
    }

    if(isset($run_installer)){

        require_once 'installer/Installer.php';
        $installer = new Installer($ENV);
        $install_result = $installer->run();

    }
    ?>

</div>