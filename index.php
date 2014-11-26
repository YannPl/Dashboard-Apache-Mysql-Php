<!DOCTYPE html>
   <html lang="en">
      <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link href="index/css/bootstrap.min.css" rel="stylesheet">
         <title>DashboardAMP-Ubuntu</title>
         <style type="text/css" media="screen">
            body {
               padding-top: 50px;
               font-family: Ubuntu,Arial,"libra sans",sans-serif !important;
               background-color: #EEE;
            }
            .sub-header {
               padding-bottom: 10px;
               border-bottom: 1px solid #eee;
            }
            .navbar-fixed-top {
               border: 0;
               background-color: #E3621C;
            }
            .sidebar {
               display: none;
            }
            .navbar-inverse .navbar-brand{
               color:white;
            }
            .navbar-inverse .navbar-nav > li > a {
               color:white;
            }
            .navbar-inverse .navbar-nav > li > a:hover {
               text-decoration: underline;
            }
            @media (min-width: 768px) {
            .sidebar {
               position: fixed;
               top: 51px;
               bottom: 0;
               left: 0;
               z-index: 1000;
               display: block;
               padding: 20px;
               overflow-x: hidden;
               overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
               background-color: #f5f5f5;
               border-right: 1px solid #eee;
            }
            }
            .main {
               padding: 20px;
            }
            @media (min-width: 768px) {
            .main {
               padding-right: 40px;
               padding-left: 40px;
            }
            }
            .main .page-header {
               margin-top: 0;
            }
            .placeholders {
               margin-bottom: 30px;
               text-align: center;
            }
            .placeholders h4 {
               margin-bottom: 0;
            }
            .placeholder {
               margin-bottom: 20px;
            }
            .placeholder img {
               display: inline-block;
               border-radius: 50%;
            }
            .nav.nav-sidebar li.active {
               background-color: #9C48E1;
            }
            .nav.nav-sidebar li.active a{
               color:white !important;
            }
            .nav.nav-sidebar li a{
               color:#9C48E1;
            }
            .nav.nav-sidebar li a:focus{
               color:white;
               background-color: #4A0384;
            }
            .nav.nav-sidebar li a:hover{
               color:#9C48E1 !important;
            }

            .thumbnail {
               box-shadow: 0px 2px 2px 0px #C2C2C2;
            }
            .thumbnail img{
               padding:15px;
            }
            .sidebar {
               padding:0;
               margin:20px;
               box-shadow: 0px 2px 2px 0px #C2C2C2;
               border-radius: 4px;
            }
            .thumbnail .row {
               margin-left:0;
               margin-right:0;
            }
            .projetnumber {
               width:50px; 
               -webkit-border-top-left-radius: 5px; 
               -webkit-border-bottom-right-radius: 50px; 
               -moz-border-radius-topleft: 5px; 
               -moz-border-radius-bottomright: 50px; 
               border-top-left-radius: 5px; 
               position:relative; 
               top:-5px; 
               text-align:center; 
               font-size:25px; 
               left:-20px; 
               border-bottom-right-radius: 50px;
               height:50px; 
               background-color:#E3621C; 
               color:white;
            }
         </style>
      </head>
      <body>
      <?php
      $langues = array(
         'en' => array(
            'langue' => 'English',
         ),
         'fr' => array(
            'langue' => 'Francais',
         )
      );
      if (isset ($_GET['lang']))
      {
         $langue = $_GET['lang'];
      }
      elseif (isset ($_SERVER['HTTP_ACCEPT_LANGUAGE']) AND preg_match("/^fr/", $_SERVER['HTTP_ACCEPT_LANGUAGE']))
      {
         $langue = 'fr';
      }
      else
      {
         $langue = 'en';
      } 
      ?>
      <div class="main_page">
         <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">TiDJ AMP</a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="#">Esprit-esport.com (prod)</a></li>
                     <li><a href="#">Esprit-esport.com (live)</a></li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-3 col-md-2 sidebar">
                  <ul class="nav nav-sidebar" >
                     <li class="active"><a href="#pro">Projects</a></li>
                     <li><a href="#inf">Information</a></li>
                     <li><a href="#conf">Configuration</a></li>
                     <li><a href="#apa">Apache</a></li>
                     <li><a href="#sql">Mysql</a></li>
                     <li><a href="#php">PHP</a></li>
                     <li><a href="#about">About homepage</a></li>
                  </ul>
               </div>
               <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                  
                  <div id="pro"></div>
                  <!-- <div class="jumbotron"><h1 class="page-header" style="border:none;" >Projects</h1></div> -->
                  <?php 
                  $json = file_get_contents("config.json");
                  $tab = json_decode($json);
                  //$test1 = file_get_contents("index/img/default.png");
                  //echo base64_encode($test1);
$defaultimg = <<< EOFILE
iVBORw0KGgoAAAANSUhEUgAAAyAAAAMgCAYAAADbcAZoAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3gsXFAIyvzCxZgAAIABJREFUeNrt3UlsXWf9+OHvHXw9O3ZiN3YGp3HTqklLQ4eorSht9aMlYpQQAlQWCNiwQCwYFrBArFggsURISCyoKiHKPENUOtJW0CFtkpKpJXMcJ3UaJ2k83uG/6P9cjq+v08yx3eeRqiYezz33xnk/ec/7nkxXV1clAAAAroCsUwAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAAAAAIEAABAgAAAAAIEAABAgAAAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAgAABAAAQIAAAgAABAAAQIAAAgAABAAAECAAAgAABAAAECAAAgAABAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAAABAgAAIEAAAAABAgAAIEAAAAABAgAACBAAAAABAgAACBAAAAABAgAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAAAAgQAAECAAAAAAgQAAECAAAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAACAAAEAABAgAACAAAEAABAgAACAAAEAAAQIAACAAAEAAAQIAACAAAEAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAECAAAgQAAAAAECAAAgQAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAQIA4BQAAgAABAAAECAAAgAABAAAECAAAgAABAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAAABAgAAIEAAAAABAgAAIEAAAAABAgAACBAAAAABAgAACBAAAAABAgAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAAAAgQAAECAAAAAAgQAAECAAAAAAgQAAECAAAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAACAAAEAABAgAACAAAEAABAgAACAAAEAAAQIAACAAAEAAAQIAACAAAEAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAECAAAgQAAAAAECAAAgQAAAAAECAAAgQAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAAACBAAAQIAAAAACBAAAQIAAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAIAAAQAAECAAAIAAAQAAECAAAIAAAQAABIhTAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAAAAgQAAECAAAAAAgQAAECAAAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAACAAAEAABAgAACAAAEAABAgAACAAAEAAAQIAACAAAEAAAQIAACAAAEAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAECAAAgQAAAAAECAAAgQAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAAACBAAAQIAAAAACBAAAQIAAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAIAAAQAAECAAAIAAAQAAECAAAIAAAQAABAgAAIAAAQAABAgAAIAAAQAABAgAACBAAAAABAgAACBAAAAABAgAACBAAAAAAQIAACBAAAAAAQIAACBAAAAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAABAgDgFAACAAAEAAAQIAACAAAEAAAQIAACAAAEAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAECAAAgQAAAAAECAAAgQAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAAACBAAAQIAAAAACBAAAQIAAAAACBAAAQIAAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAIAAAQAAECAAAIAAAQAAECAAAIAAAQAABAgAAIAAAQAABAgAAIAAAQAABAgAACBAAAAABAgAACBAAAAABAgAACBAAAAAAQIAACBAAAAAAQIAACBAAAAAAQIAACBAAAAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAAAAAIEAABAgAAAAAIEAABAgAAAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAgAABAAAQIAAAgAABAAAQIAAAgAABAAAEiFMAAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAAAC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j4ioO+M0ODgYr7/+egwPD3uyAQECAFfb7t27Y8eOHdXwSLasrQ2Q1tbWuO6662LVqlVX/Zi7u7vjpptuiq6uroh4Z1F67Y0HE3v27IktW7Z4ogEBAgBzwb59+2Lnzp3VbWrT6ynScrlcfPSjH42NGzde9WPesGFDfPazn63OyOTz+equV6VSadqxHzhwIHbs2OGJBgQIAMwFg4ODceDAgeqC7kS9+2msXbs2br755qt+zAMDA/H+978/mpubZz3WxJEjR+L111/3RAMCBADmiuPHj8fbb78dEdPvIJ78vlQqRalUiqampujp6Ym1a9detWPt7u6OpUuXRnNz87RtdpMQSS9OHxsbi+PHj3uCAQECAHPJmTNnYv/+/TE6OjpjS9vagf369evj61//emzYsOGKH+fKlSvjW9/6VmzcuHHarlazbb27b9++GBkZ8QQDc559+gB4Tzl16lQ8//zzsWTJkrjxxhunDexrF6P39vbGpz71qThy5EicPn06du7ceUWOcfny5fHAAw9U134ka1bS4ZGevXnrrbfi+eefj8OHD3uCgTnPDAgA7ykHDx6MX//617F58+bqlrZJeNRe5hTxzoL0L33pS/Gd73wnbrjhhst+fN3d3fGVr3wlvv3tb0dHR8esgVS7+9Wjjz4amzdv9gQDc54ZEIBLbK7dQZuZXn/99di7d2+89dZbsWTJkhnrQGq1tbXFXXfdFV/+8pdj//79cfDgwfjXv/51Se+3cd9998X1118fvb298eCDD0ZPT0/1eNJxVBsfb7/9dhw4cCBeeuklTywgQADei862S5FImjt2794dW7dujbvvvru6w1R6HUj6XGUymeju7o4vfOELMT4+Hrt27Yr29vZ47bXX4uTJk3HixIk4c+bMtJsEZrPZ6h3L02+L+N9d11esWBGLFi2KlStXxkMPPRR33313tLS0VI+nXC5Pu+dHvedx165dsW3bNn/wAAECsNDMNmhPX4ufHmTOxbCovQP4pVAqlaqD7PnkT3/6U5w5cybWrVs36xa3yYLvJAIaGxujUCjEzTffHN/85jdjdHQ0Jicn48yZMzExMVE9r8mMRb0F48n3yOVy0d7eHo2NjdHY2BjXXHNNtLe3n/X1k3y9dMj8+te/jp/85Cf+gAICBGChqfev4rVvr70x3NU6zuSYyuXytAFt8r5znaWpN4A+23mZ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ACBAAAAAAQIAACBAAAAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAAAAAIEAABAgAAAAAIEAABAgAAAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAgAABAAAQIAAAgAABAAAQIAAAgAABAAAQIAAAgAABAAAECAAAgAABAAAECAAAgAABAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAAABAgAAIEAAAAABAgAAIEAAAAABAgAACBAAAAABAgAACBAAAAABAgAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAAAAgQAAECAAAAAAgQAAECAAAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAACAAAEAABAgAACAAAEAABAgAACAAAEAAAQIAACAAAEAAAQIAACAAAEAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAAAAAECAAAgQAAAAAECAAAgQAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAAACBAAAQIAAAAACBAAAQIAAAAACBAAAECAAAAACBAAAECAAAAACBAAAECAAAIAAAQAAECAAAIAAAQAAECAAAIAAAQAAECAAAIAAAQAABAgAAIAAAQAABAgAAIAAAQAABAgAACBAAAAABAgAACBAAAAABAgAACBAAAAAAQIAACBAAAAAAQIAACBAAAAAAQIAAAgQAAAAAQIAAAgQAAAAAQIAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAAAAAgQAABAgAAAAAIEAABAgAAAAAIEAABAgAAAAAIEAAAQIAAAAAIEAAAQIAAAAAIEAAAQIAAAgAABAAAQIAAAgAABAAAQIAAAgAABAAAECAAAgAABAAAECAAAgAABAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAAAECAAAIEAAAAABAgAAIEAAAAABAgAAIEAAAAABAgAACBAAAAABAgAACBAAAAABAgAAXEX/D/NyZ2cWl2eBAAAAAElFTkSuQmCC
EOFILE;

                  $count = 0;
                  foreach ($tab->projects as $key => $value) { // pour chaque projet
                     $count++;
                     if($count==1){ echo '<div class="row">';}
                     echo '<div class="col-sm-6 col-md-3"><div class="thumbnail">';
                        if(isset($value->img)){
                           echo '<img src="index/img/'.$value->img.'" style="background-color:#E3E3E3;" alt="">';
                        } else {
                           echo '<img src="data:image/gif;base64,' . $defaultimg . '" />'; 
                           //echo '<img src="index/img/default.png" style="background-color:#E3E3E3;" alt="">';
                        }
                     echo '<div class="caption"><h3>'.$value->name.'</h3><span class="badge">Version : '.$value->version.'</span></p><hr><p>'.$value->description.'</p><hr>';
                        foreach ($value->link as $kl => $vl) {
                           echo '<a target="_blank" href="'.$value->website.''.$vl.'" style="color:#E3621C;" role="button">'.$kl.'</a> - ';
                        }
                        echo '<hr>';
                        foreach ($value->otherlink as $kol => $vol) {
                           echo '<a target="_blank" href="'.$vol.'" style="color:grey;" role="button">'.$kol.'</a> - ';
                        }
                     echo '</div></div></div>';
                     if($count==4){ 
                        echo '</div>';
                        $count=0;
                     }
                  }

                  if($tab->settings->indexwww){
                     $handle = opendir(".");
                     $projectContents = '';
                     $projectsListIgnore = array ('.','..','index','css','js','img');
                     while ($file = readdir($handle)) 
                     {
                        if (is_dir($file) && !in_array($file,$projectsListIgnore)) 
                        {     
                           $count++;
                           if($count==1){ echo '<div class="row">';}
                           echo '<div class="col-sm-6 col-md-3"><div class="thumbnail">';
                              if(file_exists('./index/img/'.$file.'.png')){ 
                                 echo '<img src="index/img/'.$file.'.png" style="background-color:#E3E3E3;" alt="">';
                              } else {
                                 echo '<img src="data:image/gif;base64,' . $defaultimg . '" />'; 
                              }
                           echo '<div class="caption"><h3>'.$file.'</h3></p><hr><hr>';
                           echo '</div></div></div>';
                           if($count==4){ 
                              echo '</div>';
                              $count=0;
                           }
                           //$projectContents .= '<li><a href="'.$file.'">'.$file.'</a></li>';
                        }
                     }
                     closedir($handle);
                  }
                  
                  //echo '<pre>'.print_r($projectContents, 1).'</pre>';

                  if($count!=0){ echo '</div>';}
                  ?>
                  <!-- Debut Description-->
                  <div id="inf"></div><br><br><br><!-- <div class="jumbotron" ><h1 class="page-header" style="" >Default Information</h1></div> -->
                  
                  <div class="row">
                     <div class="col-xs-12">
                        <div class="thumbnail">
                           <div class="row">
                              <div class="col-md-6">
                                 <h1>Information</h1>
                                 Vous avez la possiblité d'ajouter des projets directement sur votre dashboard localhost.
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="content_section floating_element">       
                                    <div class="section_header">
                                       <div id="changes"></div>
                                       Configuration Overview
                                    </div>
                                    <div class="content_section_text">
                                       <p>
                                       Ubuntu's Apache2 default configuration is different from the
                                       upstream default configuration, and split into several files optimized for
                                       interaction with Ubuntu tools. The configuration system is
                                       <b>fully documented in
                                       /usr/share/doc/apache2/README.Debian.gz</b>. Refer to this for the full
                                       documentation. Documentation for the web server itself can be
                                       found by accessing the manual ([localhost]/manual) if the apache2-doc
                                       package was installed on this server.
                                       </p>
                                       <p>
                                       The configuration layout for an Apache2 web server installation on Ubuntu systems is as follows:
                                       </p>
                                       <pre>
                                       /etc/apache2/
                                       |-- apache2.conf
                                       |       `--  ports.conf
                                       |-- mods-enabled
                                       |       |-- *.load
                                       |       `-- *.conf
                                       |-- conf-enabled
                                       |       `-- *.conf
                                       |-- sites-enabled
                                       |       `-- *.conf
                                       </pre>
                                       <ul>
                                          <li>
                                             <tt>apache2.conf</tt> is the main configuration
                                             file. It puts the pieces together by including all remaining configuration
                                             files when starting up the web server.
                                          </li>

                                          <li>
                                             <tt>ports.conf</tt> is always included from the
                                             main configuration file. It is used to determine the listening ports for
                                             incoming connections, and this file can be customized anytime.
                                          </li>

                                          <li>
                                             Configuration files in the <tt>mods-enabled/</tt>,
                                             <tt>conf-enabled/</tt> and <tt>sites-enabled/</tt> directories contain
                                             particular configuration snippets which manage modules, global configuration
                                             fragments, or virtual host configurations, respectively.
                                          </li>

                                          <li>
                                             They are activated by symlinking available
                                             configuration files from their respective
                                             *-available/ counterparts. These should be managed
                                             by using our helpers
                                             <tt>
                                             <a href="http://manpages.debian.org/cgi-bin/man.cgi?query=a2enmod">a2enmod</a>,
                                             <a href="http://manpages.debian.org/cgi-bin/man.cgi?query=a2dismod">a2dismod</a>,
                                             </tt>
                                             <tt>
                                             <a href="http://manpages.debian.org/cgi-bin/man.cgi?query=a2ensite">a2ensite</a>,
                                             <a href="http://manpages.debian.org/cgi-bin/man.cgi?query=a2dissite">a2dissite</a>,
                                             </tt>
                                             and
                                             <tt>
                                             <a href="http://manpages.debian.org/cgi-bin/man.cgi?query=a2enconf">a2enconf</a>,
                                             <a href="http://manpages.debian.org/cgi-bin/man.cgi?query=a2disconf">a2disconf</a>
                                             </tt>. See their respective man pages for detailed information.
                                          </li>

                                          <li>
                                             The binary is called apache2. Due to the use of
                                             environment variables, in the default configuration, apache2 needs to be
                                             started/stopped with <tt>/etc/init.d/apache2</tt> or <tt>apache2ctl</tt>.
                                             <b>Calling <tt>/usr/bin/apache2</tt> directly will not work</b> with the
                                             default configuration.
                                          </li>
                                       </ul>
                                    </div>
                                    <div class="section_header">
                                       <div id="docroot"></div>
                                       Document Roots
                                    </div>
                                    <div class="content_section_text">
                                       <p>
                                       By default, Ubuntu does not allow access through the web browser to
                                       <em>any</em> file apart of those located in <tt>/var/www</tt>,
                                       <a href="http://httpd.apache.org/docs/2.4/mod/mod_userdir.html">public_html</a>
                                       directories (when enabled) and <tt>/usr/share</tt> (for web
                                       applications). If your site is using a web document root
                                       located elsewhere (such as in <tt>/srv</tt>) you may need to whitelist your
                                       document root directory in <tt>/etc/apache2/apache2.conf</tt>.
                                       </p>
                                       <p>
                                       The default Ubuntu document root is <tt>/var/www/html</tt>. You
                                       can make your own virtual hosts under /var/www. This is different
                                       to previous releases which provides better security out of the box.
                                       </p>
                                    </div>

                                    <div class="section_header">
                                       <div id="bugs"></div>
                                       Reporting Problems
                                    </div>
                                    <div class="content_section_text">
                                       <p>
                                       Please use the <tt>ubuntu-bug</tt> tool to report bugs in the
                                       Apache2 package with Ubuntu. However, check <a
                                       href="https://bugs.launchpad.net/ubuntu/+source/apache2">existing
                                       bug reports</a> before reporting a new bug.
                                       </p>
                                       <p>
                                       Please report bugs specific to modules (such as PHP and others)
                                       to respective packages, not to the web server itself.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> 
                  <?php //echo '<pre>'.print_r($tab->settings,1).'</pre>'; ?>
                  <div id="conf"></div><br><br><br>
                  <form action="/index.php#conf" method="post">
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="thumbnail">
                              <div class="row">
                                 <div class="col-md-6">
                                    <h1>Configuration</h1>
                                    Vous avez la possiblité d'ajouter des projets directement sur votre dashboard localhost.
                                    UN fichier au format Json sera enregistrer dans ce même répertoire, il contiendra vos configurations.
                                    <h4 style="color:#E3621C;">General</h4>
                                    Voulez vous que nous scannons le dossier "www" pour afficher les différents dossiers sous forme de projets ?
                                    <br><strong>Fichiers ignorés</strong> : '.', '..', 'index', 'css', 'js', 'img'
                                    <div class="text-center">    
                                       <?php 
                                       if(isset($tab->settings->indexwww)){
                                       if($tab->settings->indexwww){ ?>
                                          <input type="radio" value="true" checked="checked" required="required" name="indexwww"> Oui
                                          <input type="radio" value="false" required="required" name="indexwww"> Non
                                       <?php } else { ?> 
                                          <input type="radio" required="required" name="indexwww"> Oui
                                          <input type="radio" checked="checked" required="required" name="indexwww"> Non
                                       <?php }} else { ?>    
                                          <input type="radio" required="required" name="indexwww"> Oui
                                          <input type="radio" required="required" name="indexwww"> Non
                                       <?php } ?>                    
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <br><h4 style="color:#E3621C;">Top Links</h4>
                                    <p>Vous pouvez rajouter des liens à droite dans la barre orange fixe en haut de cette page.<br>
                                    Vous avez la possibilité d'ajouter trois liens de votre choix.</p>
                                    <input type="text" class="col-md-12" name="first" placeholder="http://an.important.website.com" />
                                    <input type="text" class="col-md-12" name="second" placeholder="http://an.another.one.com" />
                                    <input type="text" class="col-md-12" name="third" placeholder="http://the.last.com" />
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div id="ureload"></div>
                     <!-- Projet Gestion-->
                     
                     <div id="projetlist">

                        
                        <?php $nb_projects=0;
                        foreach ($tab->projects as $key => $value) { ?>
                           <?php $nb_projects++; ?>
                           
                           <div class="row"><div class="col-xs-12"><div class="thumbnail"><div class="row"><div class="col-xs-12"><div class="projetnumber">
                           <?php echo $nb_projects; ?>
                           </div><div class="row"><h4 style="color:#E3621C;">Basic Informations</h4>
                           <input type="text" class="col-md-1" value="<?php echo $value->version; ?>"name="version<?php echo $nb_projects; ?>" placeholder="1.9">
                           <input type="text" class="col-md-2" value="<?php echo $value->name; ?>"name="name<?php echo $nb_projects; ?>" placeholder="My Project Name" />
                           <input type="text" class="col-md-7" value="<?php echo $value->description; ?>"name="description<?php echo $nb_projects; ?>" placeholder="Its my portfolio" />
                           <input type="text" class="col-md-2" value="<?php echo $value->website; ?>"name="website<?php echo $nb_projects; ?>" placeholder="127.0.0.1/myproject/" />
                           </div><div class="row"><div id="fields_morelink_<?php echo $nb_projects; ?>"><h4 style="color:#E3621C;">Link</h4>
                           <?php $temp1 =0;
                           foreach ($value->link as $key2 => $value2) { 
                              $temp1++;
                           ?>
                              <input type="text" class="col-sm-6" name="noml<?php echo $nb_projects.$temp1; ?>" value="<?php echo $key2; ?>" placeholder="Dashboard" />
                              <input type="text" class="col-sm-6" name="link<?php echo $nb_projects.$temp1; ?>" value="<?php echo $value2; ?>" placeholder="backoffice/index.php" />
                           <?php } ?>
                           </div><hr><button type="button" data-rand="<?php echo $nb_projects; ?>" class="morelink btn btn-block">- Ajouter un champ -</button></div><div class="row"><div id="fields_moreotherlink_<?php echo $nb_projects; ?>"><h4 style="color:#E3621C;">Others Links</h4>
                           <?php $temp1 =0;
                           foreach ($value->otherlink as $key3 => $value3) { 
                              $temp1++;
                           ?>
                              <input type="text" class="col-sm-6" name="othernom<?php echo $nb_projects.$temp2; ?>" value="<?php echo $key3; ?>" placeholder="GetBootstrap" />
                              <input type="text" class="col-sm-6" name="otherlink<?php echo $nb_projects.$temp2; ?>" value="<?php echo $value3; ?>" placeholder="http://getbootstrap.com/" />
                           <?php } ?>
                           </div><hr><button type="button" data-rand="<?php echo $nb_projects; ?>" class="moreotherlink btn btn-block">- Ajouter un champ -</button></div><hr></div></div></div></div></div>
                        <?php } ?>
                        <div id="Nprojet" data-nprojet="<?php echo $nb_projects; ?>"></div>

                     </div>
                     <!-- End of Form  -->
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="thumbnail">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <div class="row">
                                       <div class="col-md-4"><button type="button" id="moreproject" class="btn btn-block"><strong>- Ajouter un projet -</strong></button></div>
                                       <div class="col-md-4"></div>
                                       <div class="col-md-4"><input style="color:#E3621C;"class="btn btn-block" type="submit" value="Enregistrer"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
                  <div class="clearfix"></div>
                  <hr>
                  <?php 
                  if((isset($_POST))&&($_POST!=array())){
                     $nb_project = -1;
                     if($_POST['indexwww']=='true'){
                        $test['settings']['indexwww'] = true;
                     } else {
                        $test['settings']['indexwww'] = false;
                     }
                     $test['settings']['first'] = $_POST['first'];
                     $test['settings']['second'] = $_POST['second'];
                     $test['settings']['third'] = $_POST['third'];
                     unset($_POST['indexwww']);
                     unset($_POST['first']);
                     unset($_POST['second']);
                     unset($_POST['third']);
                     $tmp='';
                     $tmp2='';
                     foreach ($_POST as $key => $value) {
                        if(substr($key, 0,3)=='ver'){
                           $nb_project++;
                        }

                        $numbers = array(1,2,3,4,5,6,7,8,9);
                        $key = str_replace($numbers, "", $key);
                        if(($key!='noml')&&($key!='link')&&($key!='othernom')&&($key!='otherlink')){
                           $test['projects'][$nb_project][$key] = $value;
                        } else {
                           if($key=='noml'){
                              $tmp = $value;
                           }
                           if(($key=='link')&&($tmp!='')){
                              $test['projects'][$nb_project]['link'][$tmp] = $value;
                              $tmp='';
                           }
                           if($key=='othernom'){
                              $tmp2 = $value;
                           }
                           if(($key=='otherlink')&&($tmp2!='')){
                              $test['projects'][$nb_project]['otherlink'][$tmp2] = $value;
                              $tmp2='';
                           }
                        }
                     }
                     $response = $test;
                     $fp = fopen('config.json', 'w');
                     fwrite($fp, json_encode($response,JSON_UNESCAPED_UNICODE));
                     fclose($fp);
                     ?>
                     <?php
                     }
                     ?>
                  <!-- Fin Configuration Projet-->
                  

                  <div id="apa"></div><br><br><br><div class="jumbotron" style="background-color:#d9534f";><h1 class="page-header" style="color:white; border:none;" >Apache</h1></div>
                     <?php 
                     // Apache
                     $version = apache_get_version();
                     echo '<br> Apache Info : ';
                     echo $version;
                     ?>
                  <div id="sql"></div><br><br><br><div class="jumbotron" style="background-color:#f0ad4e";><h1 class="page-header" style="color:white; border:none;" >Mysql</h1></div>
                     <?php 
                     echo '<br>Host Info : ';
                     echo mysql_get_host_info();
                     echo '<br> Client Info : ';
                     echo mysql_get_client_info();
                     echo '<br> Proto Info : ';
                     echo mysql_get_proto_info();
                     echo '<br> Server Info : ';
                     echo mysql_get_server_info();
                     echo '<br>';
                     ?>
                  <div id="php"></div><br><br><br><div class="jumbotron" style="background-color:#428bca";><h1 class="page-header" style="color:white; border:none;" >PHP</h1></div>
                  
                  <?php 
                  function phpinfo_array(){
                     ob_start();
                     phpinfo();
                     $info_arr = array();
                     $info_lines = explode("\n", strip_tags(ob_get_clean(), "<tr><td><h2>"));
                     $cat = "General";
                     foreach($info_lines as $line)
                     {
                        // new cat?
                        preg_match("~<h2>(.*)</h2>~", $line, $title) ? $cat = $title[1] : null;
                        if(preg_match("~<tr><td[^>]+>([^<]*)</td><td[^>]+>([^<]*)</td></tr>~", $line, $val)){
                           $info_arr[$cat][$val[1]] = $val[2];
                        }
                        elseif(preg_match("~<tr><td[^>]+>([^<]*)</td><td[^>]+>([^<]*)</td><td[^>]+>([^<]*)</td></tr>~", $line, $val)){
                           $info_arr[$cat][$val[1]] = array("local" => $val[2], "master" => $val[3]);
                        }
                     }
                     return $info_arr;
                  }
                  $table = phpinfo_array();
                  foreach ($table as $key => $value) {
                     echo '<h2 class="sub-header">'.$key.'</h2>';
                     echo '<div class="table-responsive"><table class="table table-striped table-hover"><thead><tr><th>Key</th><th>Value</th></tr></thead>';
                     foreach ($value as $key => $value) {
                        if(!is_array($value)){
                           echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                        } else {
                           echo '<tr><td>'.$key.'</td><td>';
                           foreach ($value as $key => $value) {
                              echo '<strong>'.$key.' : </strong>'.$value.'<br>';
                           }
                           echo '</td>';
                        }
                     }
                     echo '</tbody></table></div>';
                  }
                  ?>
                  <div id="about" class="jumbotron"><h1 class="page-header" >About</h1></div> 
               </div>
            </div>
         </div>
      </div>
      <script src="index/js/jquery.min.js"></script>
      <script src="index/js/bootstrap.min.js"></script>
      <script> 
         $(function() {
            $(".nav-sidebar li").click(function() {
               $(".nav-sidebar li").removeClass( "active" );
               $(this).addClass( "active" );
            });

            initdash();
            function initdash(){
               $(".morelink").unbind('click');
               $(".moreotherlink").unbind('click');

               var newfield =0;
               $(".morelink").click(function() {
                  var rand = $( this ).data( "rand" );
                  var rand2 = Math.floor((10000*Math.random(99999))+1);
                  newfield++;
                  var newname = 'field'+newfield;
                  var champ = $('<input>');
                  var champ2 = $('<input>');
                  champ.attr('type', 'text');
                  champ.attr('class', 'col-sm-6');
                  champ.attr('placeholder', 'Dashboard');
                  champ.attr('name', 'noml'+rand2);
                  champ.appendTo('#fields_morelink_'+rand);
                  champ2.attr('type', 'text');
                  champ2.attr('class', 'col-sm-6');
                  champ2.attr('placeholder', 'backoffice/index.php');
                  champ2.attr('name', 'link'+rand2);
                  champ2.appendTo('#fields_morelink_'+rand);

               });
               var newfield2 =0;
               $(".moreotherlink").click(function() {
                  var rand = $( this ).data( "rand" );
                  var rand2 = Math.floor((10000*Math.random(99999))+1);
                  newfield2++;
                  var newname = 'field'+newfield;
                  var champ = $('<input>');
                  var champ2 = $('<input>');
                  champ.attr('type', 'text');
                  champ.attr('class', 'col-sm-6');
                  champ.attr('placeholder', 'GetBootstrap');
                  champ.attr('name', 'othernom'+rand2);
                  champ.appendTo('#fields_moreotherlink_'+rand);
                  champ2.attr('type', 'text');
                  champ2.attr('class', 'col-sm-6');
                  champ2.attr('placeholder', 'http://getbootstrap.com/');
                  champ2.attr('name', 'otherlink'+rand2);
                  champ2.appendTo('#fields_moreotherlink_'+rand);
               });

               $(".projetnumber").click(function() {
                  $(this).parent().parent().parent().parent().parent().remove();
                  Nprojet--;
               });
            }
            // Numéro du projet
            var Nprojet = parseInt($("#Nprojet" ).data( "nprojet" ));
            $("#moreproject").click(function() {
               var rand = Math.floor((10000*Math.random(99999))+1);
               Nprojet++;
               $( '<div class="row"><div class="col-xs-12"><div class="thumbnail"><div class="row"><div class="col-xs-12"><div class="projetnumber">'+Nprojet+'</div><div class="row"><h4 style="color:#E3621C;">Basic Informations</h4><div id="1-'+rand+'"></div><div class="row"><div id="fields_morelink_'+rand+'"><h4 style="color:#E3621C;">Link</h4><div id="2-'+rand+'"></div></div><hr><button type="button" data-rand="'+rand+'" class="morelink btn btn-block">- Ajouter un champ -</button></div><div class="row" > <div id="fields_moreotherlink_'+rand+'"><h4 style="color:#E3621C;">Others Links</h4><div id="3-'+rand+'"></div></div><hr><button type="button" data-rand="'+rand+'" class="moreotherlink btn btn-block">- Ajouter un champ -</button></div><hr></div></div></div></div></div>' ).appendTo( "#projetlist" );
               var champ1 = $('<input>'),champ2 = $('<input>'),champ3 = $('<input>'),champ4 = $('<input>'),champ5 = $('<input>'),champ6 = $('<input>'),champ7 = $('<input>'),champ8 = $('<input>');
               champ1.attr('type', 'text').attr('class', 'col-md-1').attr('placeholder', '1.9').attr('name', 'version'+rand).appendTo('#1-'+rand);
               champ2.attr('type', 'text').attr('class', 'col-md-2').attr('placeholder', 'My Project Name').attr('name', 'nom'+rand).appendTo('#1-'+rand);
               champ3.attr('type', 'text').attr('class', 'col-md-7').attr('placeholder', 'Its my portfolio').attr('name', 'description'+rand).appendTo('#1-'+rand);
               champ4.attr('type', 'text').attr('class', 'col-md-2').attr('placeholder', '127.0.0.1/myproject/').attr('name', 'website'+rand).appendTo('#1-'+rand);
               
               champ5.attr('type', 'text').attr('class', 'col-sm-6').attr('placeholder', 'Dashboard').attr('name', 'noml'+rand).appendTo('#2-'+rand);
               champ6.attr('type', 'text').attr('class', 'col-sm-6').attr('placeholder', 'backoffice/index.php').attr('name', 'link'+rand).appendTo('#2-'+rand);      
               
               champ7.attr('type', 'text').attr('class', 'col-sm-6').attr('placeholder', 'GetBootstrap').attr('name', 'othernom'+rand).appendTo('#3-'+rand);
               champ8.attr('type', 'text').attr('class', 'col-sm-6').attr('placeholder', 'http://getbootstrap.com/').attr('name', 'otherlink'+rand).appendTo('#3-'+rand);   
               initdash();           
            });

            
         });
      </script>
   </body>
</html>

