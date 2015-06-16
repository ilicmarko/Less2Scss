# Less2Scss
![Logo](http://i.imgur.com/8WZuHGV.png)
## What is this?
Less2Scss is a simple PHP aplication that will help you convert less to sass. Keep in mind it is not always right therefore it needs some manual corrections. I will keep improving the program and try to spot more changes.

Built with Yeoman and [Yeoman-php](https://github.com/Bradleycorn/generator-php)
## Run app
There are two ways of downloading Less2Scss:
* [Download the zip](https://github.com/ilicmarko/Less2Scss/archive/master.zip)
* Clone the repo: `https://github.com/ilicmarko/Less2Scss.git`

Then in the cloned/download directory run:

`npm install`

Running the app with:

`grunt server`

And you will have the app running on `http://localhost:1337`
## Building Release Versions
To build:

`grunt build`

This will create a `dist` directory, containing the files that can be uploaded to a server.

## What's in the download?
The download includes a really simple stracture:
```
+ index.php
    +---bower_components
    +---css
    +---img
    |   \---favicon
    +---inc
    +---js
```

## To do
What I plan to do in the future.
* Change footer - Add older browser support (flexbox currently)
* Add syntax highlight - Something like [ace](http://ace.c9.io/)
* Add more options


## Licences
Copyright 2015 Marko Ilic. Released under the terms of the MIT license.

