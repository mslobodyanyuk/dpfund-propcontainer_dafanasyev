Design Pattern ► [Property Container] ► Lesson #1
=================================================

* ***Actions on the deployment of the project:***

- Making a new project dpfund-propcontainer_dafanasyev.loc:
																	
	sudo chmod -R 777 /var/www/DESIGN_PATTERNS/Fundamental/dpfund-propcontainer_dafanasyev.loc

	//!!!! .conf
	sudo cp /etc/apache2/sites-available/test.loc.conf /etc/apache2/sites-available/dpfund-propcontainer_dafanasyev.loc.conf
		
	sudo nano /etc/apache2/sites-available/dpfund-propcontainer_dafanasyev.loc.conf

	sudo a2ensite dpfund-propcontainer_dafanasyev.loc.conf

	sudo systemctl restart apache2

	sudo nano /etc/hosts

	cd /var/www/DESIGN_PATTERNS/Fundamental/dpfund-propcontainer_dafanasyev.loc

- Deploy project:

	`git clone << >>`
	
	`or Download`
	
	_+ Сut the contents of the folder up one level and delete the empty one._

---

Dmitry Afanasyev

[Design Pattern ► [Property Container] ► Lesson #1 (11:36)]( https://www.youtube.com/watch?v=uVWPusUe3Aw&list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&index=1&t=6s&ab_channel=DmitryAfanasyev )

Let's look at a Fundamental Design Pattern - a `Property Container` - in PHP with examples.
The first video from the course on design patterns.

	composer create-project --prefer-dist laravel/laravel

_+ Сut the contents of the folder up one level and delete the empty one._

	php artisan make:controller FundamentalPatternsController

Error: 
_"... Permission denied"_

	sudo chmod -R 777 /var/www/DESIGN_PATTERNS/Fundamental/dpfund-propcontainer_dafanasyev.loc

Error: 
_"Target class [FundamentalPatternsController] does not exist."_
		
<https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8>		
		
Add route in `routes/web.php`:

```php
use App\Http\Controllers\FundamentalPatternsController;

Route::get('/', [FundamentalPatternsController::class, 'PropertyContainer'])->name('dump');
```

	php artisan config:cache	
	php artisan config:clear
		
[(1:35)]( https://youtu.be/uVWPusUe3Aw?t=95 ) `FundamentalPatternsController.php`

[(2:15)]( https://youtu.be/uVWPusUe3Aw?t=135 ) `BlogPost.php`

There are getters and setters - get and set a value, the properties themselves are private.

[(2:45)]( https://youtu.be/uVWPusUe3Aw?t=165 ) And we needed to Add some properties. The addition can be done dynamically. - This question will help us to solve the Design Pattern `Container of properties`.
Its Implementation can be as follows...

[(3:50)]( https://youtu.be/uVWPusUe3Aw?t=230 ) `PropertyContainer.php`

`PropertyContainer.php` will implement `PropertyContainerInterface.php`.

[(4:15)]( https://youtu.be/uVWPusUe3Aw?t=255 )`PropertyContainerInterface.php` 

Thanks to this interface, we will clearly understand what methods we will work with, and in general what kind of work it can be.

[(5:20)]( https://youtu.be/uVWPusUe3Aw?t=320 )`PropertyContainer.php` 

```php
private $propertyContainer = [];
```

ALL properties that will be placed will be stored in this array.

`getDescription()` - Has nothing to do with the Design Pattern. Was needed to "score" information.

[(5:50)]( https://youtu.be/uVWPusUe3Aw?t=350 ) Next - Implementation of the required methods from this class.

`addProperty()` - Add the property `$value` on the given key `$propertyName`.

`deleteProperty()` - just do `unset();` - Delete the property.

`getProperty()` - Get a property by name. IF our Properties container has such an element, by the current key Display its value. IF NO - we "say" `null`.

`setProperty ()` - We check, IF there is no such property yet - we issue an Error. - Otherwise, we set this property.

[(7:40)]( https://youtu.be/uVWPusUe3Aw?t=460 ) One of the ways to Inject into our already existing class `BlogPost.php` is to inherit...

When we inherit from this class, accordingly, ALL methods will be "here" in `BlogPost.php`.

[(8:08)]( https://youtu.be/uVWPusUe3Aw?t=488 ) `BlogPost.php`

[(8:30)]( https://youtu.be/uVWPusUe3Aw?t=510 ) `FundamentalPatternsController.php`

[(9:45)]( https://youtu.be/uVWPusUe3Aw?t=585 ) Result in `dump.blade.php`:

```php
{{dd($item);}}
```

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-propcontainer_dafanasyev/blob/main/public/images/firefox1.png )

[(10:25)]( https://youtu.be/uVWPusUe3Aw?t=625 ) In `FundamentalPatternsController.php`:

```php
dd($item->getProperty('last_update'));
```

[(10:30)]( https://youtu.be/uVWPusUe3Aw?t=630 ) Result.

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-propcontainer_dafanasyev/blob/main/public/images/firefox2.png )

[(10:39)]( https://youtu.be/uVWPusUe3Aw?t=639 ) IF check before Update, move `dd($item->getProperty('last_update'));`

![screenshot of sample]( https://github.com/mslobodyanyuk/dpfund-propcontainer_dafanasyev/blob/main/public/images/firefox3.png )

[(10:45)]( https://youtu.be/uVWPusUe3Aw?t=645 ) In this way, using the `Property Container` design pattern, we Created the ability to Extend our class using dynamic properties. - They can be dynamic, like here `run-time`.
This can be a separate field that turns into `json-data` as a result, store it in your own.

It is important to know that there is such a "trick". And the context for the application of the "technique" and its Implementation is already a question of the Application.

#### Useful links:

Dmitry Afanasyev

[Design Pattern ► [Property Container] ► Lesson # 1]( https://www.youtube.com/watch?v=uVWPusUe3Aw&list=PLoonZ8wII66jY9zYXsvTDj5thPpCpa58v&index=1&t=6s&ab_channel=DmitryAfanasyev )

<https://ru.wikipedia.org/wiki/Контейнер_свойств_(шаблон_проектирования)>

<https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8>
