# _titleCase_

#### _Web app that takes in a user inputed string and formats it in accordance to book title case rules, it will use php, silex, twig, and tests (phpunit). 09.12.16_

#### By _**Alexandre Leibler, Kyle Fisher, Anand Angalig**_


## Description

_Given a string, titleCase will output a correctly formatted version of said user input. Additionally, it will be responsible for displaying the resulting output to the web page_


## Setup/Installation Requirements

* _If you wish to view the source code locally on your machine please follow the following steps:_

  +  _1). Navigate to the directory in which you want the titleCase project to reside._

  +  _2). Enter the following command into your terminal:_
        _git clone https://github.com/KomodoTech/titleCase.git_

  +  _3). Navigate to the titleCase directory, and execute the following command in the terminal:_
          _composer install_

  +  _4). Navigate to the web directory and start your local host by executing the following command in your terminal:_
          _php -S localhost:8000_

  +  _5). Open up the browser of your choice and go to the following url:_
          _http://localhost:8000/_

  +  _6). If you wish to look at the source code, feel free to browse through the files in the titleCase directory_


## Specs

_Special Words: {a, an, the, at, by, for, in, of, on, to, up, and, as, but, or, nor}_

* _A single lower case character_
  + _IN:  t_
  + _OUT: T_

* _A single lower case word_
  + _IN:  friendship_
  + _OUT: Friendship_

* _Multiple word title all lowercase no special words_
  + _IN:  american beauty_
  + _OUT: American Beauty_

* _Multiple word title all lowercase with a single special word at the beginning of the title_
  + _IN:  in bruges_
  + _OUT: In Bruges_

* _Multiple word title with all lowercase and a special word at the end of the title_
  + _IN:  the jig is up_
  + _OUT: The Jig Is Up_

* _Multiple word title with all lowercase and a special word not in the beginning nor the end_
  + _IN:  the thing living in my closet but_
  + _OUT: The Thing Living in My Closet But_

* _Mixed case input_
  + _IN:  tHe Thing LIVING iN MY CloSet BUt_
  + _OUT: The Thing Living in My Closet But_

* _Title with a number in it_
  + _IN:  The 9 horsemen_
  + _OUT: The 9 Horsemen_

* _Non alphabetic characters mishmash_
  + _IN:  tH3 Th!ng LIVING---> IN My cl0s31 BUt!!!!!!!_
  + _OUT: Th3 Th!ng Living---> in My Cl0s31 But!!!!!!!_



## Known Bugs

_None yet_


## Support and Contact Details

_Please feel free to contact me through my github account (KomodoTech) or at the following email:_
    _alexandre.leibler@gmail.com_
    _kyle@kylefisher.com_
    _anandangalig@gmail.com_

## Technologies Used

* _silex v~2.0_
* _twig v~1.0_
* _phpunit v5.5.*_



### License

* GPLV3

titleCase Copyright (c) 2016 **_Alexandre Leibler, Kyle Fisher, Anand Angalig_**
