<?php
    class Connection {
        public $host = '193.203.175.125';
        public $user = 'u701437552_Usuarios';
        public $password = 'PruebaCAREPP2025*';
        public $database = 'u701437552_Usuarios';


        public function connect() {
            return mysqli_connect(
                $this->host,
                $this->user,
                $this->password,
                $this->database
            );
        }
    }

?>