<?php

    class Users {
        public function registerUser($data){
            $c = new Connection();
            $connection = $c -> establish();

            $_date = date('Y-m-d');

            $sql = "INSERT into usuarios(
                nombre,
                apellido,
                email,
                password,
                fechaCaptura
            ) values (
                '$data[0]',
                '$data[1]',
                '$data[2]',
                '$data[3]',
                '$_date'
            )";

            return mysqli_query($connection, $sql);
        }

        public function loginUser($data){
            $c = new Connection();
            $connection = $c -> establish();
            $password = sha1($data[1]);
            $_SESSION['user'] = $data[0];
            $_SESSION['iduser'] = self::getID($data);

            $sql="SELECT * from usuarios
                where email='$data[0]' and password='$password'
            ";

            $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) > 0){ return 1; }
            else { return 0; }
        }

        public function getID($data){
            $c = new Connection();
            $connection = $c -> establish();
            $password = sha1($data[1]);

            $sql="SELECT id_usuario
                where email='$data[0]' and password='$password'
            ";

            $result = mysqli_query($connection, $sql);

            return mysqli_fetch_row($result)[0];
        }

    }

?>