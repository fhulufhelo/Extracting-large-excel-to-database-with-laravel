Extracting large excel to database

This web application was build on top of Lavevel, PHP Framework and can be scale to your needs.

 database sample excel here [https://drive.google.com/open?id=17z4PowSbUc-CvZJyB5aO_8oEs_mvoScD](https://drive.google.com/open?id=17z4PowSbUc-CvZJyB5aO_8oEs_mvoScD)

this excel contain more that 1000000 row of dummy users that will be extracted to database.

#### Cron job

Extracting excel to database run from background with cron job

#### Install app

**Requirements:**
 - Vagrant
 - Composer

This project comes with a Homestead 'Per project' configuration. 

````bash
composer install
vagrant up
````

This process could take a few minutes.

Connect to the vagrant box via:

````bash
vagrant ssh
cd code
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
````

Update your hostfile:
````txt
192.168.10.22	laravel-test.test
````

And access the Laravel installation via:

http://laravel-test.test


#### Email
i used mailtrap

You can configure yours on evn file to see email coming for each user
