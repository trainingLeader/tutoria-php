<?php 
    class Vendedor extends Persona {
        private $salario;
        private $skill;
        function __construct($cc=null, $name=null, $email=null, $phone=null, $address=null, $birthday=null, $gender=null,$salario,$skill)
        {
            parent::__construct($cc,$name,$email,$phone,$address,$birthday,$gender);            
        }
    }

?>