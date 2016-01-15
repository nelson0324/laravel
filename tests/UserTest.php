<?php
class UserTest extends PHPUnit_Framework_TestCase
{
    
    /**
     * @test
     */
    function it_should_be_able_to_construct(){
        
        $user= new \NelsonPHP\User("fake@email.dev", "contrasenia");
        $this->assertInstanceOf(\NelsonPHP\User::class, $user);
        
    }
    
}

