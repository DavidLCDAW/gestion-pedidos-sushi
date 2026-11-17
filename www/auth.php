<?php
include_once("./model.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function is_logged() {
    return isset($_SESSION["user"]);
}

function handle_login(): ?string {
    $error = null;
    if(!is_logged() && $_SERVER["REQUEST_METHOD"] === "POST") {
        $name = trim($_POST["name"] ?? "");
        $password = $_POST["password"] ?? "";
        if(!empty($name) && !empty($password)){
            $users = readUser();
            foreach($users as $user){
                if($name === trim($user["name"]) && $password === $user["password"]){
                    $_SESSION["user"] = ["name" => $name];
                }
            }
            if(!is_logged()){
                $error = "Campos incorrectos";
            }
        } else {
            $error = "Campos vacíos";
        }

    }
    return $error;
}

function require_login() {
    if (!is_logged()) {
        header("Location: index.php");
        exit();
    }
}
