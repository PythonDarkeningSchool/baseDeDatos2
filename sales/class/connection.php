class Connection (
 
    private $_SERVER="localhost";
    private $_USER="root";
    private $_PASSWORD="";
    private $_DB="sales";

    public function establish(){
        $CONNECTION=mysql_connect(
            $this-> _SERVER,
            $this-> _USER,
            $this-> _PASSWORD,
            $this-> _DB
        );

        return $CONNECTION;
    }
)