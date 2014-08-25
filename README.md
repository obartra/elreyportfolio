elreyportfolio
==============

Elrey Belmonti Dance Portfolio contains the code for [//elrey.dance](http://elrey.dance). It is an Angular website with static data that runs on PHP on Google App Engine (GAE). The code is built using grunt.

## Setup

Fork the repo and clone it to your machine

```
git clone https://github.com/[YOUR_USER_NAME]/elreyportfolio.git
```

###Dependencies
- PHP ( //php.net )
- Compass ( //compass-style.org )
- Node.js ( //nodejs.org )
- ImageMagick ( //www.imagemagick.org )

####Installation

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

Note that compass compilation relies on imageMagick to convert the *.png sprite to a *.jpg one (see config.rb) so it won't work unless it is installed. You could disable the conversion to remove the ImageMagick dependency but the size of the generated sprite will increase. If you do that though, remember to remove small.png from the list of files to clean or the grunt process will delete it. You should also update the small.jpg reference from index.php.

If the basic dependencies are met, simply run `grunt` and it should start the build process, compiling the css, generating sprites and installing npm and bower dependencies automatically.

The original code will be visible at '/dev' and the built version under '/'. All urls are available under both versions. E.g.: /dev/about and /about or /dev and / (for the index page). Since the built version is not part of the repository it won't be available until the project is built.

## Optimizations

Based on the nature of the website (a portfolio) I anticipate that most users will be one time visitors, so emphasis has been put on server caching and inlining over additional requests on the client. All non-critical resources are loaded asynchronously, combining requests where possible. In detail:

### Critical Path Optimizations

#### Fonts

- 2 Fonts are in use but only Roboto is load on page load:
    - 'Roboto' for the whole page with Helvetica fallback.
        - Loaded from Google Fonts using Google Async loader
        - ~15-20kb gzipped and OS/browser optimized.
        - It's a relatively popular font so it's likely it'll be cached on the browser or installed on the OS (e.g. Android 4.4 ships with it).
        - The code is meant to FOUT on small screens only
            - This was done to avoid not displaying text for a long time since the font load could take a couple seconds on mobile devices.
            - In that case (I think) a FOUT outweights not having text visible for that long.
            - The FOUT would only occur if Roboto isn't cached

#### Images

- JPEG files
    - Sprite (small.jpg)
        - stripped of extra information and saved as progressive jpg
        - The quality has been manually set to 75 which seemed to produce good results while minimizing artifacts.
        - Added to the DOM (with display:none) to trigger server load before CSS is parsed
        - ~65kb

#### CSS

- Except for the google font external css request, all criticall css is inlined
- CSS output is minified using compass

#### JS

- External dependencies: angular.min.js (from Google's CDN)
- JS to start async load of all resources is inlined.
- JS output minfied using r.js with 'uglify2'
- To explore: Closure Compiler optimization.

#### HTML

- Minimized and non-criticial html loaded asynchronously to avoid bloatting the main page (< 30kb gzipped)

### Non-Critical Path Optimizations

#### Fonts

- A subset of 4 characters from 'Entypo' icons for the photo viewer
    - Inlined in the css
    - ~6kb gzipped for all font formats combined

#### Images

- JPEG files
    - Gallery Images
        - Most had already an insufficient resultion and were already optimized thus have been left as they were
- GIF files
    - Spinner
        - The loading photo/video spinner is only loaded for IE9- (real browsers rely on a CSS only implementation)
        - ~7kb
- ICO files
    - favicon.ico
        - Optimized to 16 colors ~300bytes

#### CSS, JS, JSON and HTML

- Non-critical css, js, json and HTML is loaded asynchronously
- For performance consideratiosn it is loaded over a single request (from a JSON file)

### Google's PageSpeed test

- Desktop tests score 100/100.
- Mobile test score 100/100.
- Mobile UX score 100/100.

### Yahoo's YSlow test (V1 and V2)
- All sections score 'A' except for 'Add Expires headers' (scores B) which mentions Google Fonts short expiration date (for the css not the font itself).
