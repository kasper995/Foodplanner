
<?php include '../createuser.php';


 
class CreateUserTest extends PHPUnit_Framework_TestCase {

   
    protected $object;

    
    protected function setUp() {
        $this->object = new CreateUser;
    }

   
    protected function tearDown() {
        
    }

   
    

    
    public function testGetUser1() {
        // Remove the following lines when you implement this test.
        $name = "thomas";
        $pass = "1234";
        $cname = "toto";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertTrue($this->object->GetUser($name, $pass, $cname));        
    }
    public function testGetUser2() {
        // Remove the following lines when you implement this test.
        $name = "123";
        $pass = "123";
        $cname = "123";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertFalse($this->object->GetUser($name, $pass, $cname));        
    }
    public function testGetUser3() {
        // Remove the following lines when you implement this test.
        $name = "tete";
        $pass = "tete";
        $cname = "tete";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertFalse($this->object->GetUser($name, $pass, $cname));        
    }
    public function testGetUser4() {
        // Remove the following lines when you implement this test.
        $name = "";
        $pass = "";
        $cname = "";
       
        //$func = $this->object->GetUser($name, $pass, $cname);
        $this->assertFalse($this->object->GetUser($name, $pass, $cname));        

    }

}
