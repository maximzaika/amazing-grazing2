# Protecting Australian Grassland

**Root cause of the title:** Farmer Education Regarding - Grazing, Livestock, and Natural Disasters  
**Product name:** Amazing Grazing  

**Start date:** August 6th, 2020  
**End date:** November 1st, 2020  

**Website:** [Amazing Grazing](https://amazing-grazing.ml/)  
**Product video:** [Product Video @ Youtube](https://www.youtube.com/watch?v=G00baoJcJ38&feature=emb_title)  
**Audience:** English speaking farmers age 30-45  

## Table of Contents

- [1.0 Team members](#10-team-members)
- [2.0 Programming languages](#20-programming-languages)
- [3.0 Project description](#30-project-description)
- [4.0 Project iterations](#40-project-iterations)
  * [4.1 Iteration 1](#41-iteration-1)
  * [4.2 Iteration 2](#42-iteration-2)
  * [4.3 Iteration 3](#43-iteration-3)
- [5.0 Set up website](#50-set-up-website)
- [6.0 Configure identical parts of every page](#60-configure-identical-parts-of-every-page)
  * [6.1 Configure the navigation bar](#61-configure-the-navigation-bar)
    + [6.1.1 Edit content](#611-edit-content)
    + [6.1.2 Make direct changes to HTML/PHP code](#612-make-direct-changes-to-htmlphp-code)
  * [6.2 Configure the headers of every page](#62-configure-the-headers-of-every-page)
  * [6.3 Configure the footers/license of every page](#63-configure-the-footerslicense-of-every-page)
  * [6.4 Configure breadcrumbs](#64-configure-breadcrumbs)
  * [6.5 Configure & set up the Feedback floating button](#65-configure--set-up-the-feedback-floating-button)
    + [6.5.1 How does it work and where does it go?](#651-how-does-it-work-and-where-does-it-go)
	+ [6.5.2 The following code needs to be inside the page](#652-the-following-code-needs-to-be-inside-the-page)
  * [6.6 Configure & set up the floating back to top button](#66-configure--set-up-the-floating-back-to-top-button)
  * [6.7 Configure tableau graphs](#67-configure-tableau-graphs)
- [7.0 Configure index.php page](#70-configure-indexphp-page)
  * [7.1 Modify the SERVICES section](#71-modify-the-services-section)
- [8.0 Configure livestock-statistics.php page](#80-configure-livestock-statisticsphp-page)
  * [8.1 Modify the spinner](#81-modify-the-spinner)
  * [8.2 Modify the LIVESTOCK REDUCTION IMPACTS GRASSLANDS section](#82-modify-the-livestock-reduction-impacts-grasslands-section)
    + [8.3.1 How does it work?](#831-how-does-it-work)
	+ [8.3.2 Modify the HEADER and SUBHEADER](#832-modify-the-header-and-subheader)
	+ [8.3.3 Modify SORT options](#833-modify-sort-options)
	+ [8.3.4 Add/modify/remove tableau graphs](#834-addmodifyremove-tableau-graphs)
	+ [8.3.5 Add/modify/remove card content](#835-addmodifyremove-card-content)
	+ [8.3.6 Modify cards in HTML](#836-modify-cards-in-html)
  * [8.4 Livestock tableau graphs and datasets](#84-livestock-tableau-graphs-and-datasets)
    + [8.4.1 Livestock datasets](#841-livestock-datasets)
    + [8.4.2 Livestock tableau graphs](#842-livestock-tableau-graphs)
- [9.0 Configure employment-statistics.php page](#90-configure-employment-statisticsphp-page)
  * [9.1 Modify FARMERS CAN MAKE A DIFFERENCE, video, and image section](#91-modify-farmers-can-make-a-difference-video-and-image-section)
    + [9.1.1 Modify content](#911-modify-content)
	+ [9.1.2 Modify in HTML](#912-modify-in-html)
  * [9.2 Modify NUMBERS OF EDUCATED & YOUNG FARMERS IS REDUCING section](#92-modify-numbers-of-educated--young-farmers-is-reducing-section)
    + [9.2.1 How does it work?](#921-how-does-it-work)
	+ [9.2.2 Modify the HEADER and SUBHEADER](#922-modify-the-header-and-subheader)
	+ [9.2.3 Modify SORT options](#923-modify-sort-options)
	+ [9.2.4 Add/modify/remove tableau graphs](#924-addmodifyremove-tableau-graphs)
	+ [9.2.5 Add/modify/remove card content](#925-addmodifyremove-card-content)
	+ [9.2.6 Modify cards in HTML](#926-modify-cards-in-html)
  * [9.3 Employment tableau graphs and datasets](#93-employment-tableau-graphs-and-datasets)
    + [9.3.1 Employment datasets](#931-employment-datasets)
	+ [9.3.2 Employment tableau graphs](#932-employment-tableau-graphs)
  * [9.4 Modify AGRICULTURAL COMMUNITIES section](#94-modify-agricultural-communities-section)
    + [9.4.1 Modify the HEADER and SUBHEADER](#941-modify-the-header-and-subheader)
	+ [9.4.2 Modify Carousel content](#942-modify-carousel-content)
	+ [9.4.3 Modify Carousel in HTML](#943-modify-carousel-in-html)
- [10.0 Configure techniques.php page](#100-configure-techniquesphp-page)
  * [10.1 Modify Carousel section](#101-modify-carousel-section)
    + [10.1.1 How does it work?](#1011-how-does-it-work)
    + [10.1.2 Modify carousel in HTML](#1012-modify-carousel-in-html)
    + [10.1.3 Modify carousel content](#1013-modify-carousel-content)
    + [10.1.4 Modify seasonal grazing content](#1014-modify-seasonal-grazing-content)
    + [10.1.5 Modify continuous grazing content](#1015-modify-continuous-grazing-content)
    + [10.1.6 Modify rotational grazing content](#1016-modify-rotational-grazing-content)
    + [10.1.7 Modify patch-burn grazing content](#1017-modify-patch-burn-grazing-content)
    + [10.1.8 Modify grazing techniques in HTML](#1018-modify-grazing-techniques-in-html)
- [11.0 Configure drought.php page](#110-configure-droughtphp-page)
  * [11.1 How does it work?](#111-how-does-it-work)
  * [11.2 Modify DROUGHT IMPACTS GRASSLANDS section](#112-modify-drought-impacts-grasslands-section)
    + [11.2.1 Modify content](#1121-modify-content)
	+ [11.2.2 Modify content in HTML](#1122-modify-content-in-html)
  * [11.3 Drought tableau map](#113-drought-tableau-map)
    + [11.3.1 Add/modify/remove tableau map](#1131-addmodifyremove-tableau-map)
	+ [11.3.2 Drought tableau datasets](#1132-drought-tableau-datasets)
	+ [11.3.3 Drought tableau graphs](#1133-drought-tableau-graphs)
  * [11.4 Modify WHAT THE GOVERNMENT DOES](#114-modify-what-the-government-does)
    + [11.4.1 Modify HEADER and SUBHEADER](#1141-modify-header-and-subheader)
	+ [11.4.2 Modify flip cards content](#1142-modify-flip-cards-content)
	+ [11.4.3 Modify flip cards content in HTML](#1143-modify-flip-cards-content-in-html)
	+ [11.4.4 Modify URL of source](#1144-modify-url-of-source)
  * [11.5 Modify PREPARE YOURSELF FOR DROUGHT](#115-modify-prepare-yourself-for-drought)
	+ [11.5.1 HEADER and SUBHEADER](#1151-header-and-subheader)
	+ [11.5.2 Scrollable cards content](#1152-scrollable-cards-content)
	+ [11.5.3 Scrollable cards content in HTML](#1153-scrollable-cards-content-in-html)
- [12.0 Configure invasive-species.php page](#120-configure-invasive-speciesphp-page)
  * [12.1 Modify the spinner](#121-modify-the-spinner)
    + [12.1.1 Spinner content](#1211-spinner-content)
	+ [12.1.2 Spinner content in HTML](#1212-spinner-content-in-html)
	+ [12.1.3 Javascript spinner animated-spinner.js](#1213-javascript-spinner-animated-spinnerjs)
  * [12.2 Modify INVASIVE SPECIES IMPACT GRASSLANDS](#122-modify-invasive-species-impact-grasslands)
    + [12.2.1 Modify content](#1221-modify-content)
	+ [12.2.2 Modify content in HTML](#1222-modify-content-in-html)
  * [12.3 Modify INVASIVE SPECIES & LOCATIONS (GALLERY)](#123-modify-invasive-species--locations-gallery)
    + [12.3.1 How does it work?](#1231-how-does-it-work)
	+ [12.3.2 Modify filter items](#1232-modify-filter-items)
	+ [12.3.3 HEADER and SUBHEADER](#1233-header-and-subheader)
	+ [12.3.4 Gallery cards content](#1234-gallery-cards-content)
	+ [12.3.5 Gallery cards in HTML](#1235-gallery-cards-in-html)
  * [12.4 PREVENTATIVE MEASURES](#124-preventative-measures)
    + [12.4.1 HEADER, SUBHEADER, and HEADERS of Plants & Animal cards](#1241-header-subheader-and-headers-of-plants--animal-cards)
	+ [12.4.2 Plants & Animal card content](#1242-plants--animal-card-content)
	+ [12.4.3 Plants & Animal card in HTML](#1243-plants--animal-card-in-html)
  * [12.5 Invasive species tableau graphs and datasets](#125-invasive-species-tableau-graphs-and-datasets)
    + [12.5.1 Invasive species datasets](#1251-invasive-species-datasets)
	+ [12.5.2 Invasive species tableau graphs](#1252-invasive-species-tableau-graphs)

## 1.0 Team members
- **Maxim Zaika**
  - *Education: Bachelors in Computer Science & Masters in Business Information Systems*
  - *Role in the team: leader, project manager, front-end & Back-end web developer, UX Designer*
  - *Linkedin: https://www.linkedin.com/in/maxim-zaika*
- **Minjia Ji**
  - *Education: Masters in Business Information Systems*
  - *Role in the team: business analyst and researcher*
- **Chongyang Liu**
  - *Education: Masters in Network & Security*
  - *Role in the team: network & security and web developer*
  - *Linkedin: https://www.linkedin.com/in/chongyang-liu/*
- **ChiHang Li**
  - *Education: Masters in Information Systems*
  - *Role in the team: web developer and data analyst*
  - *Linkedin: https://www.linkedin.com/in/eric-li-02a2361ba*
  
## 2.0 Programming languages

* HTML, PHP, JavaScript, jQuery, CSS, SCSS
* SQL (phpMyAdmin)

## 3.0 Project description

Responsive mobile website developed by the Monash University students for the 'FIT5120 Industry Experience 
Studio Project' unit based on the Bootstrap 4 platform. The root cause of the problem has been researched 
from scratch based on the information provided online. Developers tried their best to utilise copyright/royalty-free 
resources. No help was provided by anyone since this problem is relatively new in Australia. In total, the project consisted 
of 3 iterations in 3 months.
	
## 4.0 Project iterations

### 4.1 [Iteration 1](https://amazing-grazing.ml/iteration1)

* Latest news regarding grazing, wildfires, drought, and livestock. These news’ are the latest possible and can be 
filtered based on the country and sorted by date. Few bugs are present here, which are fixed later on in iterations 2 and 3.
* Grazing techniques that need to be avoided/utilized by the farmers. Animated images, developed by us, are provided with 
the quick bullet-point information. Users can read additional information regarding these techniques and can download brochures.

### 4.2 [Iteration 2](https://amazing-grazing.ml/iteration2)

* Improvements: bug fixes of iteration 1. Iteration 1 content has no visible change due to not keeping track of this change.
* Livestock statistics page contains the facts regarding the current livestock situation in Australia based on the dataset retrieved 
from [Australian Government Data.Gov.Au](https://data.gov.au/dataset/ds-dga-1f3da692-f0cf-4de4-a7d3-bae52d600bae/details). Users are 
given the option to sort the analysis based on the livestock. Additionally, we have provided predictions of what is going to happen in 
the future (like years 2030-2060). On top of that, various fact calculations are done based on the data (like beef, milk, wool, etc. remaining). 
Additionally, the user can view the graph.
* Employment statistics show the current employment situation of farmers responsible for dairy or beef cattle, or sheep livestock. Employment numbers are shown by state. 
The highest qualification and age groups are provided. The datasets were retrieved from: [Australian Government Joboutlook 1](https://joboutlook.gov.au/occupations/dairy-cattle-farmers?occupationCode=121313),
[Australian Government Joboutlook 2](https://joboutlook.gov.au/occupations/beef-cattle-farmers?occupationCode=121312), and 
[Australian Government Joboutlook 3](https://joboutlook.gov.au/occupations/sheep-farmers?occupationCode=121322). Additionally, 
analysis & URLs to various agricultural communities, where farmers can communicate with other farmers, are provided.

### 4.3 [Iteration 3](https://amazing-grazing.ml/iteration3)

* Lots of improvements to iterations 1 and 2. Various bug fixes and UX improvements. Mobile version is completely user friendly now on both mobile and desktop devices.
* The drought page contains locations of drought based on the rainfall (mm). Users can learn what seasons are usually affected by drought. The dataset was retrieved from 
[Australian Governement Bureau of Meteorology](http://www.bom.gov.au/climate/data/). Additionally, farmers can learn how drought impacts grassland, what the government does to assist them (with URLs to government 
dedicated websites), and what they can do to protect themselves. 
* The invasive species page contains various species (plants & animals). Farmers can know what impact do these species have on grassland and their livestock. 
Additionally, farmers can learn preventative measures against them and what states in Australia are infested by these species. Plant and animal datasets were 
retrieved from [WeedsAustralia](https://weeds.org.au/) and [Australian Government Department of Agriculture, Water and the Environment](https://www.environment.gov.au/biodiversity/invasive-species/feral-animals-australia). 
On top of that, users can download brochures of the preventative measures for their convenience.

## 5.0 Set up website

1. [Locally] Configure [XAMPP Control Panel v3.2.4](https://www.apachefriends.org/index.html) (or any other alternative):
    - Apache & MySQL must be configured within the XAMPP
2. [Externally] Configure [Amazon Web Server EC2](https://aws.amazon.com/free/?all-free-tier.sort-by=item.additionalFields.SortRank&all-free-tier.sort-order=asc&awsf.Free%20Tier%20Categories=categories%23compute&trk=ps_a134p000003yHreAAE&trkCampaign=acq_paid_search_brand&sc_channel=PS&sc_campaign=acquisition_MY&sc_publisher=Google&sc_category=Cloud%20Computing&sc_country=MY&sc_geo=APAC&sc_outcome=acq&sc_detail=aws%20ec2&sc_content=EC2_e&sc_segment=444351555594&sc_medium=ACQ-P|PS-GO|Brand|Desktop|SU|Cloud%20Computing|Product|MY|EN|Text&s_kwcid=AL!4422!3!444351555594!e!!g!!aws%20ec2&ef_id=Cj0KCQjwxNT8BRD9ARIsAJ8S5xY8mxb7H2tB-ejFW8v85-wPynxciO11EWIbKO0-_aFFzP_uLUQgnD4aAtONEALw_wcB:G:s&s_kwcid=AL!4422!3!444351555594!e!!g!!aws%20ec2)
(or any other alternative) with LAMPP (or any other alternative):
    - Apache & MySQL must be configured within the LAMPP
3. Website files must be stored in any of the methods mentioned above:
    - Download from [GitHub](https://github.com/maximzaika/amazing-grazing2): contact maximzaika@hotmail.com to get access
    - Download from [Google Drive](https://bit.ly/3jv8sEd)
4. Following actions need to be taken to launch the website:
    - Create the table `amazing-grazing` in your database
    - Add the `server_config.php` file to the main directory **(if it is not there yet)**:
	  ```php
	  <?php
		define("DB_SERVER", "add-server-ip-here");
		define('DB_USERNAME', 'add-MySQL-username-here');
		define('DB_PASSWORD', 'add-MySQL-password-here');
		define('DB_NAME', 'add-table-from-MySQL-here');
	
		$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
		if ($con -> connect_error) {
			die("Connection failed: " . $con->connect_error);
		}
	  ?>
	  ```
      - Modify `DB_SERVER` (server name), `DB_USERNAME` (username to access the database), `DB_PASSWORD` (password to access the database), and `DB_NAME` (table name)
    - Go to `../db_backup/full_db_backup`. Import `amazing-grazing.sql` file to MySQL database
5. When the server is fully configured, add `.htaccess` file to main directory **(if it is not there yet)**:
	```apacheconf
	# Prevent access to Directory Listing
	Options -Indexes

	Options +FollowSymLinks -MultiViews
	# Turn mod_rewrite on
	RewriteEngine On
	RewriteBase /

	# X-XSS-Protection, X-Frame-Options, X-Content-Type nosniff, HSTS Strict Transport Security (HSTS)
	<IfModule mod_headers.c>
		Header set X-XSS-Protection "1; mode=block"
		Header always append X-Frame-Options SAMEORIGIN
		Header set X-Content-Type-Options nosniff
		Header set Strict-Transport-Security "max-age=31536000" env=HTTPS
	</IfModule>

	# Session cookies HTTP & SEcure Flag
	php_value session.cookie_httponly 1
	php_value session.cookie_secure 1

	# Rewrite everything to access to https except http
	RewriteCond %{HTTPS} !=on
	#RewriteCond %{HTTP_HOST} !^(localhost|127.0.0.1)
	RewriteRule ^/(.*) https://%{SERVER_NAME}/$1 [R,L]

	# To externally redirect /dir/foo.php to /dir/foo excluding POST requests
	RewriteCond %{REQUEST_METHOD} !POST
	RewriteCond %{THE_REQUEST} ^[A-Z]{3,}\s([^.]+)\.php [NC]
	RewriteRule ^ %1 [R=302,L,NE]

	## To internally redirect /dir/foo to /dir/foo.php
	RewriteCond %{REQUEST_FILENAME}.php -f [NC]
	RewriteRule ^ %{REQUEST_URI}.php [L]

	### Website password protection
	#AuthUserFile /opt/lampp/htdocs/.htpasswd
	#AuthType Basic
	#AuthName "Restricted Access to AG"
	#Require valid-user
	```

## 6.0 Configure identical parts of every page

### 6.1 Configure the navigation bar

#### 6.1.1 Edit content

- Option 1: directly modify the table `nav_bar` in the MySQL
- Option 2: open `../db_backup/nav_bar.sql` in notepad, modify the content, and import it to MySQL

#### 6.1.2 Make direct changes to HTML/PHP code

- Open `../php/navigation.php` in notepad, read comments, modify the content, save it, and reload the page
	  
### 6.2 Configure the headers of every page

1. Headers are not stored in the database. To modify the images or text, open any of the web page file using notepad.
2. Go to commented out section called `Page header`, make direct modifications, save them, and reload the page
	
### 6.3 Configure the footers/license of every page

1. Footers are not stored in the database. To modify the content, open any of the web page file using notepad.
2. Go to commented out section called `Footer` or `License`, make direct modifications, save them, and reload the page

### 6.4 Configure breadcrumbs

1. Open any of the webpages other than `index.php` (it is not on this page)
2. Go to commented out section called `Breadcrumbs`, make direct modifications, save them, and reload the page
	
### 6.5 Configure & set up the Feedback floating button

#### 6.5.1 How does it work and where does it go?

- HTML generation of the interface is explained below.
- When user clicks send, javascript `../js/amazing-grazing/feedback.js` catches the click of a `feedback-form form`, then uses function `.ajax()` to access `../php/feedback.php` server file, which then compares
the tokens (read more below) to ensure that the sender is authorized, and uses sql query to write to MySQL database table called `user_feedback`

#### 6.5.2 The following code needs to be inside the page

**Note:** Perform these actions when creating a new page ONLY 
- Add the following line to the `<body>` of the webpage: 
```php
<?php echo htmlspecialchars_decode(feedbackRead(basename(__FILE__, '.php')));?>
```
- Add the following code to the top of the webpage before `<html>`:
```php
<?php 
  session_start();
  if (empty($_SESSION['csrf_token'])) {
	$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }
?>
```
- Add the following code to the top of the webpage inside the `<head>` section (used for sending tokens between the client and server to verify the identity):
```html
<meta name="csrf-token" content="<?php $_SESSION['csrf_token']; echo $_SESSION['csrf_token']; ?>">
```
- Add the following scripts to the bottom of the `<body>` section:
```html
<script src="js/amazing-grazing/feedback.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
```
- The HTML is generated via .PHP file. To modify it, open `../php/generate-feedback-tab.php` in notepad, read comments, perform direct manipulations, save the file, and reload the page
	  
### 6.6 Configure & set up the floating back to top button

**Note:** Perform these actions when creating a new page ONLY 
- Add the following line to the bottom of the `<body>` section before `<scripts>`:
```html
<div class="scrollToTop js-top"><a href="" class="js-gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
```
- Add the following script to the bottom of the `<body>` section:
```html
<script src="js/amazing-grazing/main.js"></script>
```
- `Scroll to top button...` section of `../js/amazing-grazing/main.js` file is responsible for the back to top button

### 6.7 Configure tableau graphs

**Note:** Perform these actions if necessary ONLY
- Tableau graphs are located on the `livestock-statistics.php`, `employment-statistics.php`, `drought.php`, and `invasive-species.php` pages
- Tableau server needs to be installed on the local machine to perform modifications (refer to [Tableau documentation](https://www.tableau.com/) to learn more)

Instructions:

1. Go to the folder `dataset_and_tableau` and select any of the folders related to your page:
    - Folder `tableau-drought`
    - Folder `tableau-employment-statistics`
    - Folder `tableau-invasive-species`
    - Folder `tableau-livestock-statistics`
2. Open any of the tableau files (with `.twb` extension) in any of the folders mentioned above, modify, and publish as public
3. Open the tableau page where your public graph is located, click on the "share" button, copy and paste "Embed Code" in some other `.txt` editor
4. Retrieve `id` of the first `<div>` container, retrieve `src` of the `<img>` container, `value` of the `<param name='name'>` container, and `value` of the `<param name='static_image'>` container
5. Refer to the following sections related to the dedicated webpages to learn where to insert content retrieved in step 4

## 7.0 Configure index.php page

### 7.1 Modify the SERVICES section

- To modify the HEADER and SUBHEADER: 1) directly access `index.php` file in notepad, 2) scroll down to `SERVICES` section 3) modify directly
- To modify cards:
- Ensure that the the following line is inside the `SERVICES CARDS` section (it is used to retrieved content from the database):
  ```php
  <?php echo htmlspecialchars_decode(generateOfferings2($con));?>
  ```
- Content can be modified via the database:
  - Option 1: directly modify `index_offerings` table in MySQL
  - Option 2: open `../db_backup/index_offerings.sql` in notepad, modify the content, and import it to MySQL
- Make direct changes to HTML/PHP code:
  - Open`../php/home_offerings.php` in notepad, read comments, modify the content, save it, and reload the page

## 8.0 Configure livestock-statistics.php page

### 8.1 Modify the spinner

#### 8.1.1 Spinner content

- Option 1: directly modify `livestock_spinner` table in MySQL
- Option 2: open `../db_backup/livestock_spinner.sql` in notepad, modify the content, and import it to MySQL

#### 8.1.2 Spinner content in HTML
1. Ensure that the the following line is inside the "Spinner containing livestock, beef..." section (it is used to retrieve content from the database) of the `livestock-statistics.php`:
   ```php
   <?php echo htmlspecialchars_decode($spinner_full);?>
   ```
2. Open `../php/livestock-statistics-content.php` in notepad, read comments, refer to section "1) Spinner", perform manipulations, save the file, and reload the page

#### 8.1.3 Javascript spinner animated-spinner.js
- The following javascript file is responsible for the spinner execution on load of the page (located at the bottom of the `<body>` section:
  ```javascript
  <script src="js/amazing-grazing/animated-spinner.js"></script>
  ```  
**Note:** each time page is resized, it needs to be refreshed to ensure that the spinner fits the screen size - **suggested future improvement**. Refer to the file to read more.

### 8.2 Modify the LIVESTOCK REDUCTION IMPACTS GRASSLANDS section

- Ensure that the the following line is inside the "Livestock reduction impacts..." section (it is used to retrieve content from the database):
```php
<?php echo htmlspecialchars_decode($live_intro);?>
```
- To modify HEADER, SUBHEADER, and CONTENT:
- Option 1: directly modify `livestock_landing` table in MySQL
- Option 2: open `../db_backup/livestock_landing.sql` in notepad, modify the content, and import it to MySQL
- The HTML is generated via .PHP file. To modify it, open `../php/livestock-statistics-content.php` in notepad, read comments, refer to section 2) Intro, perform manipulations, save the file, and reload the page

### 8.3 Modify the CONSEQUENCES OF LIVESTOCK REDUCTION IN THE FUTURE section

#### 8.3.1 How does it work?

- On page load:
  1. The script at the bottom of the page (refer to comments) automatically simulates the click on the year set by default.
  2. This click triggers javascript function `yearSelection` in `js/amazing-grazing/livestock-prediction.js` file. 
  3. This function calls function `.ajax()` to access the `../php/prediction_POST.php` file to receive cards content from MySQL database, updates the data base on the year & filters selected, calculates
	 facts using fomulas, decides what cards to show.
	  - `../php/prediction_POST.php` accesses the following tables in MySQL database: `livestock_prediction_dataset` and `livestock_cards`
- Click on year selection:
  1. Year selection triggers javascript function `yearSelection` in `js/amazing-grazing/livestock-prediction.js` file. 
  2. Same as point (c or 3) above
- Click on filter selection:
  1. Filter selection options trigger javascript function `selectLivestock` in `js/amazing-grazing/livestock-picker.js` file.
  2. This function identifies active/inactive buttons, unchecks all other buttons if TOTAL button is clicked, sends error if all buttons are inactive, and simulates click on the year (Refer to above section On page load b-c (or 2-3)).
- Click on display graph:
  1. Triggers function at the bottom of the webpage related to the "display graph" id `#hide-graph`.
  2. This function clears the place where graph is supposed to go,  identifies filter parameters and year, calls function `.ajax()` to access `../php/livestock-graph.php` file to receive various urls, ids, etc. 
	 related to tableau, then uses this data to create a graph.
	  -  `../php/livestock-graph.php` accesses the `livestock_graph` table in MySQL database
		  
#### 8.3.2 Modify the HEADER and SUBHEADER

It is not stored in database
1. Directly access `livestock-statistics.php` file in notepad
2. Scroll down to "CONSEQUENCES OF LIVESTOCK..." section
3. Modify directly

#### 8.3.3 Modify SORT options

It is not stored in database
1. Directly access `livestock-statistics.php` file in notepad
2. Scroll down to "Sorting" section
3. Modify directly

#### 8.3.4 Add/modify/remove tableau graphs

- Option 1: directly modify `livestock_graph` table in MySQL
- Option 2: open `../db_backup/livestock_graph.sql` in notepad, modify the content, and import it to MySQL
**Note:** Refer to section * [6.7 Configure tableau graphs](#67-configure-tableau-graphs) to learn what each string related to tableau does and where to get it

#### 8.3.5 Add/modify/remove card content

- Option 1: directly modify `livestock_cards` table in MySQL 
- Option 2: open `../db_backup/livestock_cards.sql` in notepad, modify the content, and import it to MySQL
	
#### 8.3.6 Modify cards in HTML

**Note:** Perform operations if necessary ONLY
- Open `../js/amazing-grazing/livestock-prediction.js`
- Find function `contentHTML()`
- Perform modifications, save, and refresh the page

### 8.4 Livestock tableau graphs and datasets

#### 8.4.1 Livestock datasets 

1. Accessed by going to `../dataset_and_tableau/datasets-livestock-statistics/`:
  - File 1: `livestock_year_1973_2016.xlsx` is the original datasets. It is not in database and not used.
  - File 2: `livestock_year_2017_2060.xlsx` is the predicted dataset based on the previous dataset. It is stored in `livestock_prediction_dataset` database table.

#### 8.4.2 Livestock tableau graphs

- Website has many graphs related to various filters for years. Tableau is used to generated these line graphs. 
- Tableau server is required to be installed on your local machine to modify the tableau files.
- Go to `../dataset_and_tableau/tableau-livestock-statistics/` folder, and select the graph needed for modifications.
- Perform modifications to the graphs referring to [Tableau Documentation](https://www.tableau.com/), then publish this graph publicly, and retrieve required content. 
  Refer to [6.7 Configure tableau graphs](#67-configure-tableau-graphs) section to learn more.

## 9.0 Configure employment-statistics.php page

### 9.1 Modify FARMERS CAN MAKE A DIFFERENCE, video, and image section

### 9.1.1 Modify content

Both headers, subheaders, content, image, and video can be modified through MySQL database:
- Option 1: directly modify `emp_landing` table in MySQL
- Option 2: open `../db_backup/emp_landing.sql` in notepad, modify the content, and import it to MySQL

### 9.1.2 Modify in HTML

**Note:** Perform operations if necessary ONLY
- `employment-statstics.php` contains `"Left and right sides (video & content) retrieved from db"` section that stores the following code (used to access the database and create HTML content):
  ```php
  <?php echo htmlspecialchars_decode($emp_landing);?>	
  ```
- Open `../php/employee-statistics-content.php` file in notepad, read the comments, scroll down to section `1) Landing`, perform changes, save, ane reload the page
  - Section `1) Landing` retrives the content directly from the database's table `emp_landing` and converts it to HTML

### 9.2 Modify NUMBERS OF EDUCATED & YOUNG FARMERS IS REDUCING section

#### 9.2.1 How does it work?

- On load:
  1. Click of the sort button `$(emp_type_select).trigger("click");` is simulated in the `<script>` section at the bottom of the `employment-statistics.php` page based on the `id` of the button selected by 
     default. Examples of ids: `#e-beef`, `#e-dairy`, and `#e-sheep`.
  2. These buttons have `.select-employment` class. Function `selectEmployment()` in the `../js/amazing-grazing/employment-picker.js` is listening for a click of this class, which is simulated in step 1.
  3. Once this function is triggered, it receives the `id` of step 1, and sends this `id` to function `selectEmploymentType()` in the same file.
  4. This function compares the `received id` with the `clicked id` and retrieves the content of the graph and its license (graph data and license are not stored in database - ***suggested improvement***).
  5. Then this function sends all the content of step 4 to the function `placeGraph()` in the same file, which generates the graph. This function inserts the graph into `employment-statistics.php` section that has 
     `id` set as `#tableau-chart`. Addtitionally sets license to a text box with `id` `#reference`
  6. Function `selectEmployment()` from step 2 continues execution and sends a request using function `.ajax()` to the server file `../php/employment-card-POST.php` to retrieve the content of all the cards in HTML format.
  7. It inserts HTML content directly to `employment-statistics.php` section that has `id` `cards-data`.  
  **Note:** refer to `../js/amazing-grazing/employment-picker.js` file to learn more in the commented out section.

- On sort button click:
  - Refer to 'On load step b (or 2)'

#### 9.2.2 Modify the HEADER and SUBHEADER

**Note:** It is not stored in database
1. Directly access `employment-statistics.php` file in notepad
2. Find "Section 3: NUMBER OF EDUCATED..." section
3. Modify directly

#### 9.2.3 Modify SORT options

**Note:** It is not stored in database
1. Directly access `employment-statistics.php` file in notepad
2. Find "Sorting" section
3. Modify directly

Additionally, if more sorting options have been added to HTML, then the function `$(".select-employment").click(function()` in the `<script>` at the bottom of the page needs to be modified.

#### 9.2.4 Add/modify/remove tableau graphs

**Note:** It is not stored in the database - ***suggested improvement***
1. Open `../js/amazing-grazing/employment-picker.js` in notepad
2. Find function `selectEmploymentType()`
3. Replace content where necessary, save, and reload page  
**Note:** Refer to section [6.7 Configure tableau graphs](#67-configure-tableau-graphs) to learn what each string related to tableau does and where to get it from.

#### 9.2.5 Add/modify/remove card content

- Option 1: directly modify `emp_cards` table in MySQL 
- Option 2: open `../db_backup/emp_cards.sql` in notepad, modify the content, and import it to MySQL  
**Note:** tables `emp_age`, `emp_education`, and `emp_state` are related to each card. This data can be modified, but it is related to datasets used in this project. Refer to 
section [9.4.1 Employment datasets](941-employment-datasets) to learn more.

#### 9.2.6 Modify cards in HTML

**Note:** Perform operations if necessary ONLY
1. Open `../php/employment-card-POST.php`
    - This file retrieves card, employee age, employee education, and employee region affected content from MySQL database from the following tables:
      - `emp_state`,
	  - `emp_education`,
	  - `emp_age`, and 
	  - `emp_cards`
    - Then it converts all the content to HTML and sends to file `../js/amazing-grazing/employment-picker.js` using function `.ajax()`. Refer to section [9.3.1 How does it work?](#931-how-does-it-work) to learn more
2. Perform direct manipulations, save, and reload the page

### 9.3 Employment tableau graphs and datasets

#### 9.3.1 Employment datasets 

1. Accessed by going to `../dataset_and_tableau/datasets-employment-statistics/`:
    - File 1: `livestock_farmers.xlsx` is the original datasets. It is not in database and not used.
    - File 2: `farmers_data.xlsx`. Data wrangling has been performed on this file. It is stored in the following tables: 
      - `emp_state`,
	  - `emp_education`,
	  - `emp_age`, and 
	  - `emp_cards`

#### 9.3.2 Employment tableau graphs

- Website has three graphs generated in tableau. 
- Tableau server is required to be installed on your local machine to modify the tableau files.
- Go to `../dataset_and_tableau/tableau-employment-statistics/` folder, and select the graph `farmer123.twbx`
- Perform modifications to the graphs referring to [Tableau Documentation](https://www.tableau.com/), then publish this graph publicly, and retrieve required content. 
  Refer to [6.7 Configure tableau graphs](#67-configure-tableau-graphs) section to learn more.

### 9.4 Modify AGRICULTURAL COMMUNITIES section

#### 9.4.1 Modify the HEADER and SUBHEADER

**Note:** It is not stored in database
1. Directly access `employment-statistics.php` file in notepad
2. Find "Section 4: AGRICULTURAL COMMUNITIES" section
3. Modify directly

#### 9.4.2 Modify Carousel content

- Option 1: directly modify `emp_agri_comm` table in MySQL
- Option 2: open `../db_backup/emp_agri_comm.sql` in notepad, modify the content, and import it to MySQL

#### 9.4.3 Modify Carousel in HTML

**Note:** Perform operations if necessary ONLY
- `employment-statistics.php` contains `Start carousel` section that stores the following code (used to access the database and create HTML content):
  ```php
  <?php echo htmlspecialchars_decode($emp_agri);?>
  ```
- Open `../php/employee-statistics-content.php` file in notepad, read the comments, scroll down to section '2) Agricultural communities', perform changes, save, ane reload the page
  - Section '2) Agricultural communities' retrieves content directly from the database's table `emp_agri_comm` and converts it to HTML

## 10.0 Configure techniques.php page

### 10.1 Modify Carousel section

#### 10.1.1 How does it work?

- On load:
  1. Section `Section 2: Grazing Technqiues` of the webpage contains the following line, which connects to the server file called `../php/retrieve_techniques.php`:
      ```php
      <?php echo htmlspecialchars_decode(retrieveTechniques($con));?>
      ```
  2. The line above connects to the database table `techniques_landing` to retrieve all 4 techniques
  3. Sections `Pop up seasonal grazing modal`, `Pop up rotational grazing modal`, and `Pop up patch-burn grazing modal` contain the following lines of code, 
     which also connects to the server file called `../php/retrieve_techniques.php`:
     - `Pop up seasonal grazing modal`:
	   ```php
	   <?php echo retrieveTechniquePage($con, "SEASONAL GRAZING", "Carousel");?>
	   ```
	 - `Pop up rotational grazing modal`:
	   ```php
	   <?php echo retrieveTechniquePage($con, "ROTATIONAL GRAZING", "Methods");?>
	   ```
	 - `Pop up patch-burn grazing modal`:
	   ```php
	   <?php echo retrieveTechniquePage($con, "PATCH-BURN GRAZING", "No");?>
	   ```
  4. Above lines connect to the database table `technique_selected` to retrieve the content of all the pages that can be accessed by clicking `Read more` buttons  
  
**Note:** refer to commented out sections of `../php/retrieve_techniques.php` to learn more.

#### 10.1.2 Modify carousel in HTML

**Note**: perform operations if necessary ONLY
1. Directly access `../php/retrieve_techniques.php` in notepad
2. Find `retrieveTechniques($con)` section
3. Read comments, modify, save, and reload the page

#### 10.1.3 Modify carousel content

- Option 1: directly modify `techniques_landing` table in MySQL
- Option 2: open `../db_backup/techniques_landing.sql` in notepad, modify the content, and import it to MySQL

#### 10.1.4 Modify seasonal grazing content

- Option 1: directly modify `technique_selected` table in MySQL
  - Column `selected-techn` contains the title of the techniques, for example `SEASONAL GRAZING`. The row related to this content needs to be modified.
- Option 2: open `../db_backup/technique_selected.sql` in notepad, modify the content, and import it to MySQL

To modify the suggestions content:
- Option 1: directly modify `suggestion_tech` table in MySQL
- Option 2: open `../db_backup/suggestion_tech.sql` in notepad, modify the content, and import it to MySQL

#### 10.1.5 Modify continuous grazing content

**Note:** there is no dedicated content for this technique because the objective of the website is to avoid promoting it

#### 10.1.6 Modify rotational grazing content

- Option 1: directly modify `technique_selected` table in MySQL
  - Column `selected-techn` contains the title of the techniques, for example `ROTATIONAL GRAZING`. The row related to this content needs to be modified.
- Option 2: open `../db_backup/technique_selected.sql` in notepad, modify the content, and import it to MySQL

To modify the suggestions content:
- Option 1: directly modify `suggestion_tech` table in MySQL
- Option 2: open `../db_backup/suggestion_tech.sql` in notepad, modify the content, and import it to MySQL

#### 10.1.7 Modify patch-burn grazing content

- Option 1: directly modify `technique_selected` table in MySQL
  - Column `selected-techn` contains the title of the techniques, for example `PATCH-BURN GRAZING`. The row related to this content needs to be modified.
- Option 2: open `../db_backup/technique_selected.sql` in notepad, modify the content, and import it to MySQL

To modify the suggestions content:
- Option 1: directly modify `suggestion_tech` table in MySQL
- Option 2: open `../db_backup/suggestion_tech.sql` in notepad, modify the content, and import it to MySQL

#### 10.1.8 Modify grazing techniques in HTML

**Note**: perform operations if necessary ONLY
1. Directly access `../php/retrieve_techniques.php` in notepad
2. Find `retrieveTechniquePage($con, $page, $extraContent)` section
3. Read comments and modify directly

## 11.0 Configure drought.php page

### 11.1 How does it work?

- On load:
  1. Executes section `2: Drought species impact grasslands` with the two following sections:
     1. `Graph containing drought regions`
	    - This section executes tableau graph together with the javascript `Description: executes the drought page graph` at the bottom of the page. Refer to 
	      [6.7 Configure tableau graphs](#67-configure-tableau-graphs) section to learn more. 
	 2. `Invasive species impact grasslands section`
	    - This section executes the "DROUGHT IMPACTS GRASSLANDS" section, the subheader, and the content using the following line:
	      ```php
		  <?php echo htmlspecialchars_decode($drought_intro);?>
		  ```
	      which connects to the server's database through the server file `../php/generate-feedback-tab.php`.
	    - Section `1) Intro` of this file retrieves the information from the `drought_landing` table and generates HTML that is sent to the client
  2. Executes section `3: What the government does`:
    1. The HEADER and SUBHEADER are executed in the HTML itself
	2. Section `Flip cards` contains the following line of code:
	   ```php
	   <?php echo htmlspecialchars_decode($governmentInfo);?>
	   ```
	   which connects to the server's database through the server file `../php/generate-feedback-tab.php`.
	   + Section `2) what the government does` of this file retrieves the information from the `drought_government` table and generates HTML that is sent to the client
  3. Executes section `4: PREPARE YOURSELF FOR DROUGHT`
    1. The HEADER and SUBHEADER are executed in the HTML itself
	2. Section `Actions that farmers can take` contains the following line of code:
	   ```php
       <?php echo htmlspecialchars_decode($prepareInfo);?>
       ```
	   which connects to the server's database through the server file `../php/generate-feedback-tab.php`.
	   + Section `3) Prepare yourself for drought` of this file retrieves the information from the `drought_prepare` table and generates HTML that is sent to the client

### 11.2 Modify DROUGHT IMPACTS GRASSLANDS section

### 11.2.1 Modify content

**Note:** Both headers, subheaders, content, image, and video can be modified through MySQL database:
- Option 1: directly modify `drought_landing` table in MySQL
- Option 2: open `../db_backup/drought_landing.sql` in notepad, modify the content, and import it to MySQL

### 11.2.2 Modify content in HTML

**Note**: Perform operations if necessary ONLY
1. Directly access `../php/drought-content.php` file in notepad
2. Find `1) Intro` section
3. Read comments and modify directly

### 11.3 Drought tableau map

#### 11.3.1 Add/modify/remove tableau map

**Note:** It is not stored in the database - ***suggested improvement***
1. Open `drought.php` in notepad
2. Find section `Graph containing drought regions`
3. Replace content where necessary, save, and reload page  
**Note:** Refer to section [6.7 Configure tableau graphs](#67-configure-tableau-graphs) to learn what each string related to tableau does and where to get it from.

#### 11.3.2 Drought tableau datasets

1. Accessed by going to `../dataset_and_tableau/datasets-drought/`:
    - File 1: `drought-condition.xlsx` is the dataset that has been data wranggled and inserted into the tableau. It is not stored in the database.

#### 11.3.3 Drought tableau graphs

- Website generates one map in tableau. 
- Tableau server is required to be installed on your local machine to modify the tableau files.
- Go to `../dataset_and_tableau/tableau-drought/` folder, and select the tableau map `AU Drought.twbx`
- Perform modifications to the map referring to [Tableau Documentation](https://www.tableau.com/), then publish this graph publicly, and retrieve required content. 
  Refer to [6.7 Configure tableau graphs](#67-configure-tableau-graphs) section to learn more.	   

### 11.4 Modify WHAT THE GOVERNMENT DOES

### 11.4.1 Modify HEADER and SUBHEADER

**Note:** It is not stored in database
1. Directly access `drought.php` file in notepad
2. Find "Section 3: What the government does" section
3. Modify directly

### 11.4.2 Modify flip cards content

- Option 1: directly modify `drought_government` table in MySQL
- Option 2: open `../db_backup/drought_government.sql` in notepad, modify the content, and import it to MySQL

### 11.4.3 Modify flip cards content in HTML

**Note**: Perform operations if necessary ONLY
1. The following line must be within the `Flip cards` section of the `drought.php` webpage (it retrieves database content from a `drought-content.php` file)
   ```php
   <?php echo htmlspecialchars_decode($governmentInfo);?>
   ```
2. Open `../php/drought-content.php` file in notepad
3. Read comments, find `2) What the government does` section, perform changes directly, save, and reload the page

### 11.4.4 Modify URL of source

**Note:** It is not stored in database
1. Directly access `drought.php` file in notepad
2. Find "Flip cards get inserted here" section
   ```html
   <h5 class="pull-right"><u><i><a href="https://www.agriculture.gov.au/ag-farm-food/drought">Learn more</i></u></a></h5>
   ```
3. Modify directly

### 11.5 Modify PREPARE YOURSELF FOR DROUGHT

### 11.5.1 HEADER and SUBHEADER

**Note:** It is not stored in database
1. Directly access `drought.php` file in notepad
2. Find "Section 4: PREPARE YOURSELF FOR DROUGHT" section
3. Modify directly

### 11.5.2 Scrollable cards content

- Option 1: directly modify `drought_prepare` table in MySQL
- Option 2: open `../db_backup/drought_prepare.sql` in notepad, modify the content, and import it to MySQL

### 11.5.3 Scrollable cards content in HTML

**Note**: Perform operations if necessary ONLY
1. The following line must be within the `Actions that farmers can take` section of the `drought.php` webpage (it retrieves database content from a `../php/drought-content.php` file)
   ```php
   <?php echo htmlspecialchars_decode($governmentInfo);?>
   ```
2. Open `../php/drought-content.php` file in notepad
3. Read comments, find `3) Prepare yourself for drought` section, perform changes directly, save, and reload the page

## 12.0 Configure invasive-species.php page

### 12.1 Modify the spinner

#### 12.1.1 Spinner content 

- Option 1: directly modify `species_spinner` table in MySQL
- Option 2: open `../db_backup/species_spinner.sql` in notepad, modify the content, and import it to MySQL

#### 12.1.2 Spinner content in HTML

**Note:** Perform operations if necessary ONLY
1. The following line must be within the `Spinner containing root cause, animals, management...` section of the `invasive-species.php` webpage (it retrieves database content from a `../php/invasive-species-content.php` file)
   ```php
   <?php echo htmlspecialchars_decode($spinner_full);?>
   ```
2. Open `../php/invasive-species-content.php` file in notepad
3. Read comments, find `1) Spinner` section, perform changes directly, save, and reload the page

#### 12.1.3 Javascript spinner animated-spinner.js
- The following javascript file is responsible for the spinner execution on load of the page (located at the bottom of the `<body>` section:
  ```javascript
  <script src="js/amazing-grazing/animated-spinner.js"></script>
  ```  
**Note:** each time page is resized, it needs to be refreshed to ensure that the spinner fits the screen size - **suggested future improvement**. Refer to the file to read more.

### 12.2 Modify INVASIVE SPECIES IMPACT GRASSLANDS

### 12.2.1 Modify content

**Note:** Both headers, subheaders, content, image, and video can be modified through MySQL database:
- Option 1: directly modify `species_landing` table in MySQL
- Option 2: open `../db_backup/species_landing.sql` in notepad, modify the content, and import it to MySQL

### 12.2.2 Modify content in HTML

**Note:** Perform operations if necessary ONLY
1. The following line must be within the `Invasive species impact grasslands` section of the `invasive-species.php` webpage (it retrieves database content from a `../php/invasive-species-content.php` file)
   ```php
   <?php echo htmlspecialchars_decode($species_intro);?>
   ```
2. Open `../php/invasive-species-content.php` file in notepad
3. Read comments, find `2) Intro` section, perform changes directly, save, and reload the page

### 12.3 Modify INVASIVE SPECIES & LOCATIONS (GALLERY)

#### 12.3.1 How does it work?

- On load:
  1) `.ajax()` function (located at the bottom of `invasive-species.php` file) that accesses the server's `../php/invasive-species-gallery.php` file to
     retrieve the gallery content in HTML format from the database's table `species_types` and push it to `id` `#animals-content` (located in the `Gallery` section
	 of the `invasive-species.php`:
	 ```html
     <div class="col-md-12 sort-species-item filter-animals">
	    <div id="animals-content" class="carousel-species owl-carousel ftco-owl">
	       <!-- animals content goes here -->
	    </div>
     </div>
     ```
     - class `sort-species-item` is related to the `sort-species-flters` in step 3, which represents that everything within this class is treated as a sortable item.
  2) It also resizes the gallery items to make the height similar.
  3) It activates the carousel, sorting/filtering animations.
  
- On "Show affected areas" click;
  1) These buttons contain `.location-button` class, which is triggered upon users click.
  2) The modal with `id` `#tableau-chart` gets cleared just in case old graph is there
  3) **This part is done on load:** server file `../php/invasive-species-gallery-get-js.php` is executed that accesses `species_types` table once again to retrieve 
     graph/map content and license in the form of `javascript if-else statements` that are pushed to the javascript using the following php line:
	 ```php
	 <?php echo htmlspecialchars_decode($if_statement);?>
	 ```
  4) Content retrieved in step 3 is used to generate the graph, push it inside the `#tableau-chart`.
  5) Then this function generates the license container that goes below the graph.
  
**Note:** The following code of the "Sort" section is responsible for sorting the galleries:
   ```html
   <li data-filter=".filter-plants" class="filter-active">Plants</li>
   ```
   - `data-filter=".filter-plants"` assigns a unique identifier to an item, which gallery follows
   - `class="filter-active"` makes an item active by default. *You may exclude this line if the item is not active by default.*
   - `Plants` is the name of an item that user sees
  
#### 12.3.2 Modify filter items

**Note:** These are not stored in the database - **suggested improvement if more items added**. Perform operations if necessary ONLY
1) Directly access `invasive-species.php` file in notepad
2) Find "Sort" section
3) Add/remove/replace items referring to [12.3.1 How does it work?](1231-how-does-it-work) section.

#### 12.3.3 HEADER and SUBHEADER

**Note:** It is not stored in database
1. Directly access `invasive-species.php` file in notepad
2. Find "3: INVASIVE SPECIES & LOCATIONS" section
3. Modify directly

#### 12.3.4 Gallery cards content

- Option 1: directly modify `species_types` table in MySQL
- Option 2: open `../db_backup/species_types.sql` in notepad, modify the content, and import it to MySQL

#### 12.3.5 Gallery cards in HTML

**Note:** Perform operations if necessary ONLY
- It is retrieved by the system using `.ajax()` from the `../php/invasive-species-gallery.php` file and `species_type` database table. Refer to [12.3.1 How does it work?](1231-how-does-it-work) to learn more.

Instructions:
1. Open `../php/invasive-species-gallery.php` file in notepad
2. Read comments, modify, save, and reload the page

### 12.4 PREVENTATIVE MEASURES

#### 12.4.1 HEADER, SUBHEADER, and HEADERS of Plants & Animal cards

**Note:** These are not stored in database
1. Directly access `invasive-species.php` file in notepad
2. Find "4: PREVENTATIVE MEASURES" section
3. Modify directly

#### 12.4.2 Plants & Animal card content

- Option 1: directly modify `species_measures` table in MySQL
- Option 2: open `../db_backup/species_measures.sql` in notepad, modify the content, and import it to MySQL

#### 12.4.3 Plants & Animal card in HTML

**Note:** Perform operations if necessary ONLY
1. The following lines must be within the `Invasive species impact grasslands` section of the `invasive-species.php` webpage (it retrieves database content from a `../php/invasive-species-content.php` file)
   ```php
   <?php echo htmlspecialchars_decode($plants_measures);?>
   ```
   and
   ```php
   <?php echo htmlspecialchars_decode($animal_measures);?>
   ```
2. Open `../php/invasive-species-content.php` file in notepad
3. Read comments, find `3) Preventative Masures` section, perform changes directly, save, and reload the page

### 12.5 Invasive species tableau graphs and datasets

#### 12.5.1 Invasive species datasets 

1. Accessed by going to `../dataset_and_tableau/datasets-invasive-species/`:
  - File 1: `Athel Pine.xlsx` is the data wrangled file that contains the locations of Athel Pine plant.
  - File 2: `Buffalos.xlsx` is the data wrangled file that contains the locations of Buffalo animals.
  - File 3: `Buffel Grass.xlsx` is the data wrangled file that contains the locations of Buffel Grass plant.
  - File 4: `Camels.xlsx` is the data wrangled file that contains the locations of Camels animals.
  - File 5: `Cattle.xlsx` is the data wrangled file that contains the locations of Cattle animals.
  - File 6: `Donkeys.xlsx` is the data wrangled file that contains the locations of Donkey animals.
  - File 7: `Goat.xlsx` is the data wrangled file that contains the locations of Goat animals.
  - File 8: `Horses.xlsx` is the data wrangled file that contains the locations of Horse animals.
  - File 9: `Kangaroos.xlsx` is the data wrangled file that contains the locations of Kangaroo animals.
  - File 10: `Mesquite.xlsx` is the data wrangled file that contains the locations of Mesquite plants.
  - File 11: `Mission Grass.xlsx` is the data wrangled file that contains the locations of Mission Grass plants.
  - File 12: `Pigs.xlsx` is the data wrangled file that contains the locations of Pig animals.
  - File 13: `Prickly_Acacia.xlsx` is the data wrangled file that contains the locations of Prickly Acacia plants.
  - File 14: `Rabbit.xlsx` is the data wrangled file that contains the locations of Mission Rabbit animals.
  - File 15: `Reed Sweetgrass.xlsx` is the data wrangled file that contains the locations of Reed Sweetgrass plants.
  
**Note:** above datasets are not stored in database but directly forwarded to tableau API map.

#### 12.5.2 Invasive species tableau graphs

- Website has many locations of invasive species. Tableau is used to generate maps. 
- Tableau server is required to be installed on the local machine to modify the tableau files.
- Go to `../dataset_and_tableau/tableau-invasive-species/` folder, and select the graph needed for modifications.
- Perform modifications to the graphs referring to [Tableau Documentation](https://www.tableau.com/), then publish this graph publicly, 
  retrieve required content, and update `species_types` table. Refer to [6.7 Configure tableau graphs](#67-configure-tableau-graphs) 
  section to learn more.

## Licence / Copyright

- HTML5/Bootstrap 4 template is provided by [Colorlib](https://colorlib.com/wp/templates/)
- Icons are retrieved from the [Flaticon](https://www.flaticon.com/)
- Images are retrieved from:
  - [Unsplash](https://unsplash.com/)
  - [Stockfreeimages](https://www.stockfreeimages.com/)
  - [Pibxabay](https://pixabay.com/)