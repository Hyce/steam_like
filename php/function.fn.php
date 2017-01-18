<?php
function userConnect(PDO $db, $pseudo, $password){

    $sql ="SELECT *
		FROM users
		WHERE pseudo = :pseudo 
		AND password = :password";

    $req = $db->prepare($sql);
    $req->execute(array(
        'pseudo' => $pseudo,
        'password' => $password
    ));

    $result = $req->fetch(PDO::FETCH_ASSOC);

    if($result == true){
        $_SESSION['id'] = $result['id'];
        $_SESSION['prenom'] = $result['prenom'];

        return true;
    }else {
        return false;
    }
}

function userRegistration(PDO $db, $pseudo, $nom, $prenom, $email, $password, $naissance ) {


    if ( !empty($pseudo) AND !empty($nom) AND !empty($prenom) AND !empty($email) AND !empty($password) AND !empty($naissance) ) {
        $sql= " INSERT INTO users (pseudo, nom, prenom, email, password) 
				 VALUES (:pseudo, :nom, :prenom, :mail, :password)";

        $req = $db->prepare($sql);
        $req->execute( array(
            'pseudo' => $pseudo,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'password' => $password,
            'naissance' => $naissance

        ));

        return true;

    } else {
        return false;
    }


}
?>