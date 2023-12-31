<?php
class Conexion{
    private $host = "mysql-svc";
    private $port = "5432";
    private $dbname = "db";
    private $user = "root";
    private $password = "password";
    private $db;
    
    public function conectar(){
        // Realizar la conexión a la base de datos
        $this->db = pg_connect("host={$this->host} port={$this->port} dbname={$this->dbname} user={$this->user} password={$this->password}");

        // Verificar si la conexión se realizó correctamente
        if (!$this->db) {
            die("Error al conectar a la base de datos.");
        }
    }

    public function ejecutarConsulta($query){
        // Ejecutar la consulta
        $result = pg_query($this->db, $query);

        // Verificar si la consulta se realizó correctamente
        if (!$result) {
            die("Error al ejecutar la consulta.");
        }

        // Obtener los resultados de la consulta
        $rows = pg_fetch_all($result);
        
        // Cerrar el cursor de la consulta
        pg_free_result($result);
        
        return $rows;
    }

    public function cerrarConexion(){
        // Cerrar la conexión a la base de datos
        pg_close($this->db);
    }
}