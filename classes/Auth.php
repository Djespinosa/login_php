<?php 
    include "Connection.php";

    class Auth extends Connection { 
        public function login($user, $password) {
            $connection = parent::connect();
            $sql = "SELECT * FROM usuarios WHERE usuario = ?";
            $query = $connection->prepare($sql);
            $query->bind_param("s", $user);
            $query->execute();
            $respuesta = $query->get_result();
        
            if ($respuesta && mysqli_num_rows($respuesta) > 0) {
                $userData = mysqli_fetch_array($respuesta);
                $passwordExisting = $userData['contrasena_hash'];
        
                if (password_verify($password, $passwordExisting)) {
                    $_SESSION['user'] = $user;
                    $_SESSION['user_db'] = $userData['base_datos'];  // Base de datos del usuario
                    $_SESSION['user_db_user'] = $userData['usuario_bd']; // Usuario de la BD
                    $_SESSION['user_db_pass'] = $password; // Guardamos la misma contraseña que usó para el login
        
                    return true;
                }
            }
            return false;
        }                         
    }
    

?>