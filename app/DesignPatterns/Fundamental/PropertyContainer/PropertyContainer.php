<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

use App\DesignPatterns\Fundamental\PropertyContainer\Interfaces\PropertyContainerInterface;

class PropertyContainer implements PropertyContainerInterface
{
	private $propertyContainer = [];

	public static function getDescription()
	{
        $description = 'Контейнер свойств
                        Шаблон проектирования

                        App\Http\Controllers\FundamentalPatternsController@PropertyContainer

                        Контейнер свойств (англ. property container) - фундаментальный шабон проектирования,
                        который служит для обеспечения возможности уже построенного и развёрнутого приложения
                        динамически расширять свои свойства, а в общем случае, функциональность.

                        Это достигается путём добавления дополнительных свойств непосредственно самому объекту
                        в некоторый "контейнер свойств", вместо расширения класса объекта новыми свойствами.

                        https://ru.wikipedia.org/wiki/Контейнер_свойств_(шаблон_проектирования)
                        ';

        return $description;
	}

	public function addProperty($propertyName, $value)
	{
		$this->propertyContainer[$propertyName] = $value;
	}

	public function deleteProperty($propertyName)
	{
		unset($this->propertyContainer[$propertyName]);
	}

	public function getProperty($propertyName)
	{
		return $this->propertyContainer[$propertyName] ?? null;
	}

	public function setProperty($propertyName, $value)
	{
		if(!isset($this->propertyContainer[$propertyName])) {
			throw new \Exception('Property [{$propertyName}] not found');
		}

		$this->propertyContainer[$propertyName] = $value;
	}
}
