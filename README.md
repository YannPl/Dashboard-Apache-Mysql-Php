# Dashboard AMP

Dashboard AMP is a little project under MIT licence.
It personnalize your index.php on your local machine (http://localhost or http://127.0.0.1/)

## How does it work

Define (name,version,description,website, important link, etc.) your projects, put an image in "dashboardamp/" directory (optionnal) and that's all !

[![My projects](http://tomjamon.com/assets/img/dashboardamp/1.jpg)](http://tomjamon.com/assets/img/dashboardamp/1.jpg)

A hightly configurable panel, who create a Json in the "index.php" (config.json). It contain your configurations to create your own dashboard.

[![My Dash Config](http://tomjamon.com/assets/img/dashboardamp/2.jpg)](http://tomjamon.com/assets/img/dashboardamp/2.jpg)

Get easily your web configuration (Apache, PHP, Mysql, etc.)

[![My Web Config](http://tomjamon.com/assets/img/dashboardamp/3.jpg)](http://tomjamon.com/assets/img/dashboardamp/3.jpg)


## Requierement

- PHP 4+
- Apache 2

## How to install

You can simply copy paste the "index.php", or :
```
git clone git@github.com:TiDJ/Dashboardamp-ubuntu.git # or clone your own fork
cd Dashboardamp-ubuntu
cp ./index.php /var/www/html/ # or /var/www, /www, etc.
```
Your new dashboard should now be running on [localhost](http://localhost/).

## Optionnal

If you want a default project set in your dashboard :
```
cd Dashboardamp-ubuntu
cp ./config.json /var/www/html/ # or /var/www, /www, etc.
```




