# Financial management project for Srisomwong Company

## Background
I am in Information Officer position of Srisomwong Company. I need to create financial system management for company to manage financial within company and keep statistic.

## Requirement.
- PHP version 7.4 or more.
- PHP development environment such as XAMPP.

## How to Deploy on Localhost (base tutorial on XAMPP)

### Step 1 : set up XAMPP
1. turn on server
    - MySQL Database
    - Apache Web Server

### Step 2 : Set up project folder
1. Download project file as zip file
2. Unzip file to folder
3. Rename folder to `sws-financial`
3. Copy folder to `xampp/htdocs/`

### Step 3 : set up database
1. Open any browser
2. Go to `localhost/phpmyadmin`
3. On the left pane, click *New*
4. Set *Database name* to `srisomw_financialsimple`
5. Set *Collation* to `utf8_general_ci`
6. On the middle top of screen, click *Import* menu
7. At *File to import* section, click *Choose File*
8. Go to `xampp/htdocs/sws-financial/SQL`
9. Select file `srisomw_financialsimple.sql`
10. Set *Character set of the file* to `utf-8`
11. Go to bottom of page, then click *Import* button

### Step 4 : Set up database config in project file
1. Open project folder.
2. Go to `.env` file at root project folder
3. edit *DB_USERNAME* variable to your PHPMyAdmin username (default is 'root')
4. edit *DB_PASSWORD* variable to your PHPMyAdmin password (default is empty)
5. save file

### Step 5 : Open web app
1. Open new tab browser
2. Go to `localhost/sws-financial/public`
3. Done

## How to use
1. Login with username "cheetah5900@windowslive.com" and password "12345678"
2. it is specified program for company, So it's too difficult to describe.
3. you can try this project as you want.

* I remove company file from project because privacy policy.