
<?php include '../createuser.php'; include_once '../dbconnection.php';


 
class CreateUserTest extends PHPUnit_Framework_TestCase {

   
    protected $object;

    
    protected function setUp() {
        $this->object = new CreateUser;
    }

   
    protected function tearDown() {
        
    }    

      public function testvalidate() {
        // Remove the following lines when you implement this test.
        $name = "thomas";
        $pass = "1234";
        $cname = "toto";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertEquals("thomas1234",$this->object->validateUser($name, $pass, $cname));        
    }
    
    public function testNormalUser() {
        // Remove the following lines when you implement this test.
        $name = "thomas";
        $pass = "1234";
        $cname = "toto";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
         $this->assertEquals("success",$this->object->GetUser($name, $pass, $cname));      
    }
  
    public function testFullStringUser() {
        // Remove the following lines when you implement this test.
        $name = "tete";
        $pass = "tete";
        $cname = "tete";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertEquals("Password can only contain numbers",$this->object->GetUser($name, $pass, $cname));        
    }
    public function testEmptyUser() {
        // Remove the following lines when you implement this test.
        $name = "";
        $pass = "";
        $cname = "";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertEquals("User not created!",$this->object->GetUser($name, $pass, $cname));        

    }

}
