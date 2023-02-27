<?PHP 
class DB{ 
    private $dbHost     = "localhost"; 
    private $dbUsername = "root"; 
    private $dbPassword = ""; 
    private $dbName     = "phptutsdb"; 
     
    public function __construct(){ 
        if(!isset($this->db)){ 
            // Connect to the database 
            try{ 
                $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword); 
                $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                $this->db = $conn; 
            }catch(PDOException $e){ 
                die("Failed to connect with MySQL: " . $e->getMessage()); 
            } 
        } 
    } 
     
		public function pre($arr){
			echo '<pre>';
			print_r($arr);
			exit;
		}	 
	 
    /* 
     * Returns rows from the database based on the conditions 
     * @param string name of the table 
     * @param array select, where, order_by, limit and return_type conditions 
     */ 
    public function getData($table,$where =''){ 
	$data=array();
	if($where!=''){
		$sql= 'select * from '.$table .' where '.$where;
		}else{
	$sql= 'select * from '.$table;
		}
	$query = $this->db->prepare($sql); 
        $query->execute(); 
      if($query->rowCount() > 0){ 
                $data = $query->fetchAll(); 
				
            } 
	return $data;		
    } 
     
    /* 
     * Insert data into the database 
     * @param string name of the table 
     * @param array the data for inserting into the table 
     */ 
    public function insert($table,$data){ 
        if(!empty($data) && is_array($data)){ 
            $columns = ''; 
            $values  = ''; 
            $i = 0; 
            if(!array_key_exists('created',$data)){ 
                $data['created'] = date("Y-m-d H:i:s"); 
            } 
            if(!array_key_exists('modified',$data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
 
            $columnString = implode(',', array_keys($data)); 
            $valueString = ":".implode(',:', array_keys($data)); 
            $sql = "INSERT INTO ".$table." (".$columnString.") VALUES (".$valueString.")"; 
            $query = $this->db->prepare($sql); 
            foreach($data as $key=>$val){ 
                 $query->bindValue(':'.$key, $val); 
            } 
            $insert = $query->execute(); 
            return $insert?$this->db->lastInsertId():false; 
        }else{ 
            return false; 
        } 
    } 
     
    /* 
     * Update data into the database 
     * @param string name of the table 
     * @param array the data for updating into the table 
     * @param array where condition on updating data 
     */ 
    public function update($table,$data,$conditions){ 
        if(!empty($data) && is_array($data)){ 
            $colvalSet = ''; 
            $whereSql = ''; 
            $i = 0; 
            if(!array_key_exists('modified',$data)){ 
                $data['modified'] = date("Y-m-d H:i:s"); 
            } 
            foreach($data as $key=>$val){ 
                $pre = ($i > 0)?', ':''; 
                $colvalSet .= $pre.$key."='".$val."'"; 
                $i++; 
            } 
            if(!empty($conditions)&& is_array($conditions)){ 
                $whereSql .= ' WHERE '; 
                $i = 0; 
                foreach($conditions as $key => $value){ 
                    $pre = ($i > 0)?' AND ':''; 
                    $whereSql .= $pre.$key." = '".$value."'"; 
                    $i++; 
                } 
            } 
            $sql = "UPDATE ".$table." SET ".$colvalSet.$whereSql; 
            $query = $this->db->prepare($sql); 
            $update = $query->execute(); 
            return $update?$query->rowCount():false; 
        }else{ 
            return false; 
        } 
    } 
     
    /* 
     * Delete data from the database 
     * @param string name of the table 
     * @param array where condition on deleting data 
     */ 
    public function delete($table,$conditions){ 
        $whereSql = ''; 
        if(!empty($conditions)&& is_array($conditions)){ 
            $whereSql .= ' WHERE '; 
            $i = 0; 
            foreach($conditions as $key => $value){ 
                $pre = ($i > 0)?' AND ':''; 
                $whereSql .= $pre.$key." = '".$value."'"; 
                $i++; 
            } 
        } 
        $sql = "DELETE FROM ".$table.$whereSql; 
        $delete = $this->db->exec($sql); 
        return $delete?$delete:false; 
    } 
}
?>