FacebookApi
=======

Created by Florian Degenhardt

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=VRMTHV3E4ZD3Y)

Please give me Feedback and help me to optimized and extend the code.
If you're interested to help me write me

Introduction
------------

FacebookApi is a module for Zend Framework 2.
Example You can easy fill your Website Page content from you Facebook Page.
Feeds, Post, Picture, Album, Events, etc


Features / Goals
----------------

* Facebook Graph Api [COMPLETE]
* Page Service Posts (List/Details) [INCOMPLETE]
* Page Service Events (List/Details) [INCOMPLETE]
* Page Service Album (List/Details) [INCOMPLETE]
* Translate Route [COMPLETE]
* Widgets 
* - Events/Event [TEST]
* - Albums/Album [TEST]

Installation
------------

### Main Setup

#### With composer

1. Add this project in your composer.json:

    ```json
    "require": {
        "flod1/facebook-api": "dev-master"
    }
    ```

2. Now tell composer to download ZfcUser by running the command:

    ```bash
    $ php composer.phar update
    ```

#### Post installation

1. Enabling it in your `application.config.php`file.

    ```php
    <?php
    return array(
        'modules' => array(
            // ...
            'FacebookApi',
        ),
        // ...
    );
    ```



### Post-Install: Config

After installing, copy
`./vendor/flod1/facebook-api/config/facebookapi.global.php.dist` to
`./config/autoload/facebookapi.global.php` and change the values as desired.


Examples for a Facebookpage
------------

### Pages

* Overview Page Content  `http://domain.dev/dashboard`
* Widget Examples `http://domain.dev/examples`
* List all Albums `http://domain.dev/albums`
* List all Events `http://domain.dev/events`
* List all Posts `http://domain.dev/posts`

### Widgets

* graphwidget - Fetch a Facebook GraphNode

```php
<?php echo graphwidget->fetchEvent($eventid,$fields)->setTemplate("widget/default/detail.phtml");
```

* pagewidget - Fetch Childs from a page. e.x albums, events, posts

```php
<?php echo $pagewidget->fetchAlbums($fields,$limit)->setTemplate("widget/default/table.phtml");
```