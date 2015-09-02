# oc-isogallery-plugin
Gallery with sorting functions using isotope.js

## Installation
Install by adding this plugin to your project either at http://octobercms.com/plugins or in the ````settings->update->install plugins```` section of your OctoberCMS Backend.

## Dependencies
* jQuery >= 1.11.3 (might work with previous versions, not tested)

## Usage
Just inject the component into your webpage and you are good to go.

## Customization
### Layout
IsoGallery uses a default layout (greenish) which injects CSS through the controller. If you don't want this, you can uncheck this option in the component settings.

### Javascript Filtering
IsoGallery filters galleries through a JS function that is injected through the controller. If you want to use your own function, you can uncheck this option in the component settings.

### StripJS
IsoGallery uses [strip.js](www.stripjs.com) for the lightbox functionality. If you already have strip implemented on your website, of if you want to use a different Lightbox plugin you can uncheck this option in the component settings.

###Isotope
IsoGallery filters and places the galleries with [Isotope](http://isotope.metafizzy.co). If you already have Isotope implemented on your website, you can uncheck this option in the component settings.
