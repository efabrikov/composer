<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'vendor/autoload.php';
        echo 'php version - ' . phpversion() . '<br>';
        echo 'ip class - ' . Novanova\Helpers\IP::getClientIp() . '<br>';
        ?>

        <!-- The missing protocol means that it will match the current protocol, either http or https. If running locally, we use the local jQuery. -->
        <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script-->
        <script>window.jQuery || document.write('<script src="vendor/components/jquery/jquery.min.js"><\/script>')</script>

        <script lang="javascript">
            $(document).ready(function () {
                $('body').append('jqury work!');
            });
        </script>
    </body>
</html>
