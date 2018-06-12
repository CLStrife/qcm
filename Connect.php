<?php
/**
 * Created by PhpStorm.
 * User: wendong
 * Date: 28/05/2018
 * Time: 11:34
 */
	$user = "root";
	$pass = "";

	try {

        $db = new PDO('mysql:host=localhost;dbname=qcm;charset=UTF8', $user, $pass);

    } catch (PDOException $e) {
        print "Erreur! : ".$e->getMessage()."<br/>";
        die();
    }
 ?>