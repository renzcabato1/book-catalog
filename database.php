<?php 
    class database{
        public $que;
        public $id_insert;
        public $return;
        public $total;
        public $data;
        private $servername='localhost';
        private $username='root';
        private $password='';
        private $dbname='catalog';
        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }
        
        public function insert($table_name,$parameters=array())
        {

                // var_dump($parameters);
                $columns = implode(',',array_keys($parameters));
                $value = implode("','",$parameters);
                $sql = "INSERT INTO $table_name ($columns) VALUES ('$value')";
                $result = $this->mysqli->query($sql);
                $this->return = $result;
                $this->id_insert = $this->mysqli->insert_id;
        }

        public function update($table_name,$parameters=array(),$id){
            $data = array();
            foreach($parameters as $key => $value)
            {
                $data[] =  "`$key` = '".$value."'";
            }
            $for_update = implode(',',$data);
            // var_dump($for_update);
            // die();
            $sql = "UPDATE ".$table_name." SET ".$for_update." WHERE id = '".$id."' ";
            $result = $this->mysqli->query($sql);
            $this->return = $result;
        }

        public $sql;

        public function select($table,$rows="*",$where = null,$start,$end)
        {
            if ($where != null) {

                $total_que="SELECT $rows FROM $table WHERE $where";
                $sql="SELECT $rows FROM $table WHERE $where  Order By id desc LIMIT $start, $end";
                // var_dump($sql);
            }else{
                $total_que="SELECT $rows FROM $table ";
                $sql="SELECT $rows FROM $table Order By id desc LIMIT $start, $end";
            }
            $result = $this->mysqli->query($sql);
            $row_data = []; 
            while($row = $result->fetch_assoc()){
                $row_data[] = $row;
             }
            $this->data = $row_data;
            $this->sql = $result = $this->mysqli->query($total_que);
            $this->total =  mysqli_num_rows($result);
        }

        public function __destruct(){
            $this->mysqli->close();
        }
    }
?>