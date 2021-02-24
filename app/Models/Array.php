<?php

namespace App\Models;

class Array extends CoreModel {

private $calendar;
private $id_user;

/**
 * Get the value of calendar
 */ 
public function getCalendar()
{
return $this->calendar;
}

/**
 * Set the value of calendar
 *
 * @return  self
 */ 
public function setCalendar($calendar)
{
$this->calendar = $calendar;

return $this;
}

/**
 * Get the value of id_user
 */ 
public function getId_user()
{
return $this->id_user;
}

/**
 * Set the value of id_user
 *
 * @return  self
 */ 
public function setId_user($id_user)
{
$this->id_user = $id_user;

return $this;
}
}