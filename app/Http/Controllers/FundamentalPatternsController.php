<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\PropertyContainer\BlogPost;
use App\DesignPatterns\Fundamental\PropertyContainer\PropertyContainer;

class FundamentalPatternsController extends Controller
{
		/**
		 * Контейнер свойств (англ. property container)
		 *
		 * @url http://dpfund-propcontainer_dafanasyev.loc/
		 *
		 * @return views\dump.blade.php
		 *
		 * @throws \Exception
		 */

	public function PropertyContainer()
	{
		$name = "Контейнер свойств";

		$description = PropertyContainer::getDescription();

		$item = new BlogPost();

		$item->setTitle('Заголовок статьи');
		$item->setCategory(10);

		$item->addProperty('view_count', 100);

		$item->addProperty('last_update', '2030-02-01');
//dd($item->getProperty('last_update'));
		$item->setProperty('last_update', '2030-02-02');

		$item->addProperty('read_only', true);
		$item->deleteProperty('read_only');

//dd($item->getProperty('last_update'));
		return view('dump', compact( 'name', 'description', 'item'));

	}

}

