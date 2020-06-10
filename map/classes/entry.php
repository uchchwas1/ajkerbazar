<?php 

class Entry {
    private $id;
    private $location;
    private $contract;
    private $email;
    private $name;
	private $dbh;
    private $error;
	private $CategoryImage;
    

    public function __construct() {
        $this->dbh = new PDO("mysql:dbname=foodbank;host=localhost;", 'root', '');
    }

    public function createNew($name) {
        $this->setByParams( -1, $name);
    }

    public function createNewFromPOST( $post ) {
        //print_r($post);
        $this->createNew(            
            $post['r_name']
        );
    }

    public function setByParams( $id, $name, $CategoryImage) {
        if (strlen($name) == 0) {
            $this->id = -1;
        } else {
            $this->id = $id;
            $this->name = $name;
			$this->CategoryImage= $CategoryImage;
          
        }
    }

    public function setByRow( $row ) {
        //print_r($row);
        $this->setByParams (
            $row['r_id'],           
            $row['r_name'],
			$row['r_CategoryImage']
			
           
        );
    }

    public function SqlInsertEntry() {
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $query = ' 
            INSERT INTO restaurant (
                r_location, r_contract, r_email, r_name
                )
            VALUES (
                :r_location, :r_contract, :r_email, :r_name
                );';

        $stmt = $this->dbh->prepare($query);
        $result = $stmt->execute(array(
		    ':r_location' => $this->location,
			':r_contract' => $this->contract,
			':r_email' => $this->email,
		    ':r_name' => $this->name
			
			
            
            
            
            
            
        ));
        $this->error = $this->dbh->errorInfo();
        //print_r($this->error);

        $query = '  SELECT r_id
                    FROM restaurant 
                    WHERE r_name= :r_name
                    ORDER BY r_id
                    DESC LIMIT 1;';

        $stmt = $this->dbh->prepare($query);
        $stmt->execute(array(
            ':r_name' => $this->name
        ));

        $this->error = $this->dbh->errorInfo();
        //print_r($this->error);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        //print_r($row);

        $this->id = $row['r_id'];

        return $result;
    }

    public function SqlSelectEntryById( $r_id ) {
        $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = 'SELECT * FROM restaurant WHERE r_id= :r_id;';

        $stmt = $this->dbh->prepare($query);
        $result = $stmt->execute(array(
            ':r_id' => $r_id
        ));

        $this->error = $this->dbh->errorInfo();
        //print_r($this->error);

        $entry = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->setByRow($entry);
        //print_r($entry);

        return $result;
    }

    public function SqlUpdateEntryById( $r_id ) {
        $query = '  UPDATE restaurant SET 
                    
					r_location =:r_location,
                    r_contract = :r_contract,
                    r_email = :r_email,
                    r_name = :r_name
                    WHERE r_id = :r_id;';

        $stmt = $this->dbh->prepare($query);
        $result = $stmt->execute(array(
            ':r_name' => $this->name,
            ':r_email' => $this->email,
            ':r_contract' => $this->contract,
            ':r_location' => $this->location,
            ':entry_content' => $this->content
        ));

        return $result;
    }

    private function validateString() {
        
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
		
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getLocation()
    {
        return $this->location;
    }
	public function getCategoryImage()
	{
		return $this->CategoryImage;
	}

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setContract($contract)
    {
        $this->contract = $contract;

        return $this;
    }

    /**
     * Get the value of excerpt
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of excerpt
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

   
  
}

?>