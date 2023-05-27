<?php 
    class Persona{
        private $cc;
        private $name;
        private $email;
        private $phone;
        private $address;
        private $birthday;
        private $gender;
        public function __construct($cc=null, $name=null, $email=null, $phone=null, $address=null, $birthday=null, $gender=null) {
            $this->cc = $cc;
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;
            $this->birthday = $birthday;
            $this->gender = $gender;
        }

        public function getCc() {
            return $this->cc;
        }
        public function getName() {
            return $this->name;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getPhone() {
            return $this->phone;
        }
        public function getAddress() {
            return $this->address;
        }
        public function getBirthday() {
            return $this->birthday;
        }
        public function getGender() {
            return $this->gender;
        }
        public function setCc($cc) {
            $this->cc = $cc;
        }
        public function setName($name) {
            $this->name = $name;
        }
        public function setEmail($email) {
            $this->email = $email;
        }
        public function setPhone($phone) {
            $this->phone = $phone;
        }
        public function setAddress($address) {
            $this->address = $address;
        }
        public function setBirthday($birthday) {
            $this->birthday = $birthday;
        }
        public function setGender($gender) {
            $this->gender = $gender;
        }
    }
?>