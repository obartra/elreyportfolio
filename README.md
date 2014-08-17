elreyportfolio
==============

Elrey Belmonti Dance Portfolio contains the code for [//elrey.dance](http://elrey.dance). It is an Angular website with static data that runs on PHP on Google App Engine (GAE). The code is built using grunt and is optimized for first-time visits.

## Setup

Fork the repo and clone it to your machine

```
git clone https://github.com/[YOUR_USER_NAME]/elreyportfolio.git
```

###Dependencies
- PHP ( //php.net )
- Compass ( //compass-style.org )
- Node.js ( //nodejs.org )
- ImageMagick ( //http://www.imagemagick.org )

###Installation

After the listed dependencies are installed, you can install the npm ones by running:

```
npm install
```

Now you should have:
- Grunt ( //gruntjs.com/getting-started )
- Bower ( //bower.io/ )

To install all the project dependencies run:

```
bower install
```

To compile the css run:

```
compass compile
```

Note that compass compilation relies on imageMagick to convert the *.png sprite to a *.jpg one (see config.rb) so it won't work unless it is installed. You could disable the conversion to remove the ImageMagick dependency but the size of the generated sprite will increase. If you do that though, remember to remove sprite.png from the list of files to clean or the grunt process will delete it.

If the basic dependencies are met, simply run `grunt` and it should start the build process, compiling the css, generating sprites and installing npm and bower dependencies automatically.

## Structure
- /admin
	- admin page, storage api calls (admin only)
- /data
	- static files accessed by the website (resume, vcf, qr code)
- /font
	- custom font used for the icons on the preview view ('x', 'i', '<' and '>')
- /grunt
	- custom grunt tasks
- /img
	- site's images and sprites
- /js
	- site's js, Angular code and its dependencies
- /model
	- site's php and json data to generate the performances list
- /sass
	- site's sass files
- /templates
	- page sections HTML/PHP
