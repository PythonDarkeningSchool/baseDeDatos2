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
                'data[0]',
                'data[1]',
                'data[2]',
                'data[3]',
                '$_date'
            )";

            return mysqli_query($connection, $sql);
        }
    }

?>