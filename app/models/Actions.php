<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.25.0-9e8af9e modeling language!*/

class Actions
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //Actions Attributes
  private $id;
  private $name;
  private $entity_type;
  private $entity_id;
  private $jsonb;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {
    $this->id = null;
    $this->name = null;
    $this->entity_type = null;
    $this->entity_id = null;
    $this->jsonb = null;
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function setId($aId)
  {
    $wasSet = false;
    $this->id = $aId;
    $wasSet = true;
    return $wasSet;
  }

  public function setName($aName)
  {
    $wasSet = false;
    $this->name = $aName;
    $wasSet = true;
    return $wasSet;
  }

  public function setEntity_type($aEntity_type)
  {
    $wasSet = false;
    $this->entity_type = $aEntity_type;
    $wasSet = true;
    return $wasSet;
  }

  public function setEntity_id($aEntity_id)
  {
    $wasSet = false;
    $this->entity_id = $aEntity_id;
    $wasSet = true;
    return $wasSet;
  }

  public function setJsonb($aJsonb)
  {
    $wasSet = false;
    $this->jsonb = $aJsonb;
    $wasSet = true;
    return $wasSet;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEntity_type()
  {
    return $this->entity_type;
  }

  public function getEntity_id()
  {
    return $this->entity_id;
  }

  public function getJsonb()
  {
    return $this->jsonb;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

}
?>