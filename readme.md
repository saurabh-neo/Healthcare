
 #**HealthCare App**
 
 This is a very powerful completely MVC based website developed by me,
 using php laravel where user patient can login into system and can enter his/her details in
 2 sections named as Demographics and Medical History. Everything on this project is dynamic all the data is fetched from straight datatbase dynamically !!
 I tried to make it on a professional level hope you like it !!!

####[A Live Screenshot provided at end of this read.md]

 Used Technologies / Prerequisites :
 - PHP 7
 - Laravel 5.3
 - Composer
 - Apache Server
 - Bootstrap
 - JQuery
 - Javascript
 - HTML5
 - CSS3

There are total 17 tables, *Models* for it and I have already created **Database Migrations** for you !!!!!

So Running it is very simple process you will need composer for it,
## steps to run :
  1] Go to Healthcare project folder and open **.env** file and change database name to your db name where u want to import tables, user name and password as:
 - DB_DATABASE=healthcare
 - DB_USERNAME=root
 - DB_PASSWORD=matrix24
 
This is my configuration please change as per your database name
  
  2] **Create Migrations** open terminal and go to project folder and type command :
  
    ##  php artisan migrate 
  
   This command will create all 17 tables of database with dummy data inserted for testing

  3] **Start Server** Run Command
  
  ## **php artisan serve** 
  This will start server
  
  4] open browser and go to route
  ## **localhost:8000**   or **localhost:8000/plogin**
 
 5] To  login use any one of these Patient_Ids in login panel
 - Patient_id          password
 -    1           =>            neo
 -    4           =>            444
 -    3           =>            333
 -    2           =>            222
 
And voila..!! You are logged in :-)
Please Do Check my other repositories as well !!
Happy Coding...!!

#Have a Look Here

![Alt text](/public/dist/img/landpage.jpg?raw=true "Landing Page Look")
