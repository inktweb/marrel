# marrel.css
Marrel is the CSS as used on Inktweb.nl. This toolkit contains the components we most commonly use in our websites. This prevents us from writing new CSS or copy/pasting in things like `<form>` styling and `buttons`. Thus creating a more uniform design across our sites and making it easier for others to use and improve the code.

This is heavily inspired by Github's [Primer](https://github.com/primer/primer) and @mdo's talk [Build your own Bootstrap](https://speakerdeck.com/mdo/build-your-own-bootstrap). As a way to give back (and as a *thank you*) this code has been released open-source under the MIT license.

The name comes from an abbreviation from **Mar**gin **Rel**ease. A `btn` often found on typewriters which allows you to write on the margins of a page.

## How does it work?
Marrel is built with Sass on top of the grid system from Bootstrap (via [Bootstrip](https://github.com/MartijnOud/bootstrip)), [normalize.css](https://necolas.github.io/normalize.css/) and [LINKS](https://github.com/mrmrs/links).

The end goal is not to create a toolkit that works for every use case but instead provides a solid starting point. Therefore the code does not contain twenty table styles and ten button sizes. Still — when using this we encourage you to write as few new lines of CSS as possible and opt for *less is more*.

# Getting started

Include the following files:
````HTML
<link rel="stylesheet" href="//www.inktweb.nl/includes/marrel/marrel.min.css">
````

Documentation can be found at [https://marrel.inktweb.nl/](https://marrel.inktweb.nl/).

# Building
You'll need Sass installed. Plop the following line in your terminal to make changes to the SCSS file.
````
sass --watch scss/marrel.scss:marrel.min.css --style compressed
````

