<?php

namespace App\Http\Controllers;

#require_once '/Applications/MAMP/htdocs/foobooks/vendor/fzaninotto/faker/src/autoload.php';

use App\Http\Controllers\Controller;
use App;
use Debugbar;

class BookController extends Controller
{

    /**
    * Responds to requests to GET /books
    */
    public function index()
    {

      echo config('mail.driver');
      dump(config('mail'));

      echo \App::environment();

      $random = new \Rych\Random\Random();
      echo $random->getRandomString(8);

      $generator = new \Badcow\LoremIpsum\Generator();
      $paragraphs = $generator->getParagraphs(5);
      echo implode('<p>', $paragraphs);


      $faker = \Faker\Factory::create();
      for ($i=0; $i < 10; $i++)
      {
        echo $faker->name.'<br>';
        echo $faker->address.'<br>';
        echo $faker->text.'<br>';
      }

      $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::info('Current environment: '.App::environment());
    \Debugbar::error('Error!');
    \Debugbar::warning('Watch out…');
    \Debugbar::addMessage('Another message', 'mylabel');

    //return 'Just demoing some of the features of Debugbar';

      return 'Display all the books';
    }

} # end of class
