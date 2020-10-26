# Protecting Australian Grassland

**Root cause of the title:** Farmer Education Regarding - Grazing, Livestock, and Natural Disasters  

**Start date:** August 6th, 2020  
**End date:** October 26th, 2020  

**Website:** [Amazing Grazing](https://amazing-grazing.ml/)  
**Product video:** [Product Video @ Youtube](https://www.youtube.com/watch?v=G00baoJcJ38&feature=emb_title)  
**Audience:** English speaking farmers age 30-45  

## Team members
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
  
## Programming languages

* HTML, PHP, JavaScript, jQuery, CSS, SCSS
* SQL (phpMyAdmin)

## Project description

Responsive mobile website developed by the Monash University students for the 'FIT5120 Industry Experience 
Studio Project' unit based on the Bootstrap 4 platform. The root cause of the problem has been researched 
from scratch based on the information provided online. Developers tried their best to utilise copyright/royalty-free 
resources. No help was provided by anyone since this problem is relatively new in Australia. In total, the project consisted 
of 3 iterations in 3 months.
	
## Project iterations

### [Iteration 1](https://amazing-grazing.ml/iteration1)

* Latest news regarding grazing, wildfires, drought, and livestock. These news’ are the latest possible and can be 
filtered based on the country and sorted by date. Few bugs are present here, which are fixed later on in iterations 2 and 3.
* Grazing techniques that need to be avoided/utilized by the farmers. Animated images, developed by us, are provided with 
the quick bullet-point information. Users can read additional information regarding these techniques and can download brochures.

### [Iteration 2](https://amazing-grazing.ml/iteration2)

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

### [Iteration 3](https://amazing-grazing.ml/iteration3)

* Lots of improvements to iterations 1 and 2. Various bug fixes and UX improvements. Mobile version is completely user friendly now on both mobile and desktop devices.
* The drought page contains locations of drought based on the rainfall (mm). Users can learn what seasons are usually affected by drought. The dataset was retrieved from 
[Australian Governement Bureau of Meteorology](http://www.bom.gov.au/climate/data/). Additionally, farmers can learn how drought impacts grassland, what the government does to assist them (with URLs to government 
dedicated websites), and what they can do to protect themselves. 
* The invasive species page contains various species (plants & animals). Farmers can know what impact do these species have on grassland and their livestock. 
Additionally, farmers can learn preventative measures against them and what states in Australia are infested by these species. Plant and animal datasets were 
retrieved from [WeedsAustralia](https://weeds.org.au/) and [Australian Government Department of Agriculture, Water and the Environment](https://www.environment.gov.au/biodiversity/invasive-species/feral-animals-australia). 
On top of that, users can download brochures of the preventative measures for their convenience.

## Set up

1. [Locally] Configure [XAMPP Control Panel v3.2.4](https://www.apachefriends.org/index.html) (or any other alternative):
    - Apache & MySQL must be configured within the XAMPP
2. [Externally] Configure [Amazon Web Server EC2](https://aws.amazon.com/free/?all-free-tier.sort-by=item.additionalFields.SortRank&all-free-tier.sort-order=asc&awsf.Free%20Tier%20Categories=categories%23compute&trk=ps_a134p000003yHreAAE&trkCampaign=acq_paid_search_brand&sc_channel=PS&sc_campaign=acquisition_MY&sc_publisher=Google&sc_category=Cloud%20Computing&sc_country=MY&sc_geo=APAC&sc_outcome=acq&sc_detail=aws%20ec2&sc_content=EC2_e&sc_segment=444351555594&sc_medium=ACQ-P|PS-GO|Brand|Desktop|SU|Cloud%20Computing|Product|MY|EN|Text&s_kwcid=AL!4422!3!444351555594!e!!g!!aws%20ec2&ef_id=Cj0KCQjwxNT8BRD9ARIsAJ8S5xY8mxb7H2tB-ejFW8v85-wPynxciO11EWIbKO0-_aFFzP_uLUQgnD4aAtONEALw_wcB:G:s&s_kwcid=AL!4422!3!444351555594!e!!g!!aws%20ec2)
(or any other alternative) with LAMPP (or any other alternative):
    - Apache & MySQL must be configured within the LAMPP
3. Website files in this must be stored in any of the methods mentioned above
    - Download from [GitHub](https://github.com/maximzaika/amazing-grazing2): contact maximzaika@hotmail.com to get access
    - Download from [Google Drive](https://bit.ly/3jv8sEd)
4. Following actions need to be taken to launch the website:
    - Create the table ‘amazing-grazing’ in your database
    - Add the [server_config.php](https://bit.ly/3onLDWG) file to the main folder (if it is not there):
      - Open it and modify *db_server* (server name), *db_username8* (username to access the database), *db_password* (password to access the database), and *db_name* (table name)
    - Go to *../db_backup/full_db_backup*. Import *amazing-grazing.sql* file to MySQL database

## Configure web pages

1. Configure **the navigation bar**:
    - Edit content:
	  - Option 1: directly modify the table *nav_bar* in the MySQL
      - Option 2: go to *../db_backup* folder, open *nav_bar.sql* in notepad, modify the content, and import it to MySQL
	- Make direct changes to HTML/PHP code:
	  - Go to *../php* folder, open *navigation.php* in notepad, read comments, modify the content, save it, and reload the page
2. Configure **the headers** of every page:
    - Headers are not stored in the database. To modify the images or text, open any of the web page file using notepad:
	  - eg: *index.php, livestock-statistics.php,* etc.
	- Go to commented out section called "Page header", make direct modifications, save them, and reload the page
3. Configure **the footers/license** of every page:
	- Footers are not stored in the database. To modify the content, open any of the web page file using notepad:
	  - eg:*index.php, livestock-statistics.php,* etc.
	- Go to commented out section called "Footer" or "License", make direct modifications, save them, and reload the page
4. Configure **breadcrumbs** of *techniques.php, livestock-statistics.php, employment-statistics.php, drought.php, invasive-species.php,* or *news.php*:
    - Open any of the files mentioned above in notepad
	- Go to commented out section called "Breadcrumbs", make direct modifications, save them, and reload the page
5. Configure & set up **the Feedback floating button**:
    - Where does feedback go to?
	  - It goes directly to MySQL database table called *user_feedback*
	- How does it work? Do the following actions when new pages are created ONLY.
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
	  - Add the following code to the top of the webpage inside the <head> section (used for sending tokens between the client and server to verify the identity):
		```html
			<meta name="csrf-token" content="<?php $_SESSION['csrf_token']; echo $_SESSION['csrf_token']; ?>">
		```
	  - Add the following scripts to the bottom of the `<body>` section:
	    ```html
			<script src="js/amazing-grazing/feedback.js"></script>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		```
	  - Feedback is generated via .PHP file. To modify it go to *../php* folder, open *feedback.php* using a notepad, read comments, perform direct manipulations, save the file, and reload the page
6. Configure & set up floating **back to top button** located on every page. Perform these actions when creating a new page ONLY:
	- Add the following line to the bottom of the `<body>` section before `<scripts>`:
	```html
		<div class="scrollToTop js-top"><a href="" class="js-gotop"><i class="fa fa-arrow-up" aria-hidden="true"></i></a></div>
	```
	- Add the following script to the bottom of the `<body` section:
	```html
		<script src="js/amazing-grazing/main.js"></script>
	```
7. **Index.php page**:
    - Modify 'SERVICES' section
	  - To modify the HEADER and SUBHEADER: 1) directly access *index.php* file via notepad, 2) scroll down to "SERVICES" section 3) modify directly
	  - To modify cards (services):
	    - Content can be modified via the database:
		  - Option 1: directly modify *index_offerings* table in MySQL
		  - Option 2: go to *../db_backup* folder, open *index_offerings.sql* in notepad, modify the content, and import it to MySQL
		- Make direct changes to HTML/PHP code:
		  - Go to *../php* folder, open *home_offerings.php* in notepad, read comments, modify the content, save it, and reload the page


## Licence / Copyright

- HTML5/Bootstrap 4 template is provided by [Colorlib](https://colorlib.com/wp/templates/)
- Icons are retrieved from the [Flaticon](https://www.flaticon.com/)
- Images are retrieved from:
  - [Unsplash](https://unsplash.com/)
  - [Stockfreeimages](https://www.stockfreeimages.com/)
  - [Pibxabay](https://pixabay.com/)