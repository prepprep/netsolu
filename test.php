<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        require_once 'vars.php';
        $content = "This is a test!";

        $db = new PDO('mysql:host=localhost;dbname=minotes;charset=utf8', ms_user, ms_pwd);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        try {
            $stmt = $db->prepare("INSERT INTO notes (content) VALUES(:content);");
//            $stmt->bindValue(':content', $content, PDO::PARAM_STR);
            $stmt->bindParam(':content', $content, PDO::PARAM_STR);
            $stmt->execute();
            $affected_rows = $stmt->rowCount();
        } catch (PDOException $ex) {
            echo 'An error occured!';
            print $ex->getMessage();
        }
        ?>
    </body>
</html>
