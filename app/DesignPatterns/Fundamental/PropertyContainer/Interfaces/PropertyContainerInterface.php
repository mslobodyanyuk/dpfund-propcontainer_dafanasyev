<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer\Interfaces;

interface PropertyContainerInterface
{
	public function addProperty($propertyName, $value);

	public function deleteProperty($propertyName);

	public function getProperty($propertyName);

	public function setProperty($propertyName, $value);
}
