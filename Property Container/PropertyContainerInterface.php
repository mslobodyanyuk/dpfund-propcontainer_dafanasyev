<?php 

interface implements PropertyContainerInterface
{
	public function addProperty($propertyName, $value);
	
	public function deleteProperty($propertyName);
	
	public function getProperty($propertyName);
	
	public function setProperty($propertyName, $value);
}	