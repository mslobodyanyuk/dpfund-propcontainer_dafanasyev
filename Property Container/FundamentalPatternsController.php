<?php 

FundamentalPatternsController extends Controller
{
		/**
		 * Контейнер свойств (англ. property container)
		 *
		 * @url 
		 *
		 * @return
		 *
		 * @throws \Exception
		 */
		 
	public function propertyContainer()
	{
		$name = "Контейнер свойств";
		
		$description = PropertyContainer::getDescription();
		
		$item = new BlogPost();
		
		$item->setTitle('Заголовок статьи');
		$item->setCategory(10);
		
		$item->addProperty('view_count', 100);
			
		$item->addProperty('last_update', '2030-02-01');
		$item->setProperty('last_update', '2030-02-02');
		
		$item->addProperty('read_only', true);
		$item->deleteProperty('read_only');
		
		return view('dump', compact( 'name', _:'description', 'item'));
	}
		 	
}