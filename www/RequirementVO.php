<?php
class EmployeeVO{
private $id
private $typeOfService;
private $serviceKeywords;
private $catOfService;
private $priority;
private $requirements;

public function getType(){
return $this->id;
}
public function setID($id){
$this->id = $id;
}
public function getType(){
return $this->typeOfService;
}
public function setID($typeOfService){
$this->typeOfService = $typeOfService;
}

public function getKeywords(){
return $this->serviceKeywords;
}
public function setKeywords($serviceKeywords){
$this->serviceKeywords = $serviceKeywords;
}

public function getCategory(){
return $this->catOfService;
}
public function setCategory($catOfService){
$this->catOfService = $catOfService;
}

public function getPriority(){
return $this->priority;
}
public function setPriority($priority){
$this->priority = $priority;
}

public function getRequirements(){
return $this->getRequirements;
}
public function setRequirements($requirements){
$this->requirements = $requirements;
}
}
?>