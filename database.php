<?php
/**
 * PDO connexion
 * @return connexion
 */
function connexion() {
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=table_1;charset=utf8','root','');
        return $connexion;
        //echo 'Connexion etabli';
    }
    catch(Exception $ex) {
        die("Erreur " . $ex->getMessage());
    }
}



/**
 * select function
 * @param string select query
 * @return request
 */
function select_request($query) {
    $con = connexion();

    $request = $con->prepare($query);
    $request->execute();

    return $request;
}


/**
 * insert function
 * @param string insert request
 */
function insert_request() {
    $con = connexion();

    $request = $con->prepare($query);
    $request->execute();
}

function insert() {
    

}

?>