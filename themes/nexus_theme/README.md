# Nexus Intercambio
Welcome to the home of Nexus! 

Nexus is built on Wordpress, which will offer a huge amount of customization, and content. The trade off for this is that there are several categories that need to have data and media entered. This document will list all of these catagories and where to edit them.

http://nexus.van.cp.academy.red/

### 1. Front Page

![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/home-readme.png)

The front page provides several different streams of information. 
There are 2 post types editable in the backend. Below are the locations they show up on the page, as well as where to edit them in the Wordpress Dashboard.

![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/country-readme.png)

Front Page Carousel : This is the 'Why Canada?' image scroll. It can be edited in the backend under 'Front Page Carousel'.

Student Quotes: The quote bar at the bottom. Edit in Student Reviews.


### 2. Blog Page 

![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/blog-readme.png)

The blog is the main hub for articles to post and update. All of the content is produced on the WP backend. The comments are contained in the SQL database. The locations to edit are :

Blog Quotes and movies: Edit in Posts.

### 3. Program Page
![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/program-readme.png)

The program page is organized by course and location. All editable in the backend. Location are as follows:

Programs: Programs post type   - The programs need to have city names and school names included in the post form. The name must be exactly the same as the City and School post type for them to interact.

Schools: Schools post type

Cities: Cities post type


### 4. About Page
![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/about-readme.png)

The about is coded in the HTML. See about.php and about.scss to modify information. This page is relatively static, as its purpose is mainly to provide contact information for the instructors. See below for a map.

Mission: Line 24 about.php

Pictures and text for main body: Starts at line 37 about.php

Instructors: Line 74 about.php

### 5. Contact Page
![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/contact-readme.png)

The contact page can be redirected in the backend. Look to the 'Mail' tab in Form 1 under the Contacts tab in Wordpress.

### 6. FAQ

![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/faq-readme.png)

The FAQ included 6 main categories, which each have 5 sub-categories. 

The Main category is edited in FAQs.
Within each category listing are the 5 sub categories. Each of these has an input for Title, Descripton, Image and Image Caption.

### 6. Book Consult

![ScreenShot](https://github.com/redacademy/nexus-fall-2017/blob/develop/themes/nexus/assets/readme-images/consult-readme.png)

The book consult page sends all data gathered to rafael@nexusintercambio.com.br.

To change this, use Contact -> Book Consult -> Mail tab






Next you'll need to run `npm install` **inside your theme directory** next to install the node modules you'll need for Gulp, etc.

### 4. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL).

### Technology used

* HTML
* CSS
* Javascript
* php
* gulp (min, lint, uglify, etc.)
* npm
* WordPress
* MAMP / MySQL

### Built With

* Visual Studio Code - The "Editor" - https://code.visualstudio.com/

* Chrome - Testing platform - Google.ca

* GULP - Issues and all.

* GIT - github

* WordPress and various plugins.

### Contributing voices and ideas

* RED Academy Starter Theme

* RED Web Dev 2017 Fall class

* Special thanks to Jim Bennett/Rose Cass

### Versioning:

* This will be the only version unless required to make changes or upgrades. Wordpress and other tech used will have it's own updates

### Authors - WebDev

* Scott Livingstone
* Ilya Meerovich
* Jordan Plamondon
* Sean Stobo
* Colin Yaremko

See also the list of contributors who participated in this project.

### UI/UX Designers

* Vanessa Elie
* Emma Macartney
* Xi (CiCi) Wang
* Paulette ??


### License

* GNU General Public License v2 or later

### Acknowledgments

* See contributions!

### Issues

* Definitely some issues with CSS. Made changes and information disappeared on other pages. 
