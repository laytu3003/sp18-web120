<?php
/* 
big-portal-config.php

Used to store all of our WEB120 configuration information

*/

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know it's own url/name

define('THIS_PAGE',basename($_SERVER['PHP_SELF']) );



switch(THIS_PAGE){
        
    case "template.php":
        $title = "Home";
        $logo= "fa-home";
        $PageID = "Template Home";
    break;
        
    case "work.php":
        $title = "Template Work";
        $logo= "fa-th-large";
        $PageID = "Template Work";
    break;
    
    case "about.php":
        $title = "Template About";
        $logo= "fa-th-large";
        $PageID = "Template About";
    break;
    
    case "social.php":
        $title = "Template Social";
        $logo= "fa-file-image-o";
        $PageID = "Template Social";
    break;
    
    case "contact.php":
        $title = "Template Contact";
        $logo= "fa-map-o";
        $PageID = "Template Contact";
    break;
    
    
        
    default:
        $title = THIS_PAGE;
        $logo= "fa-home";
        $PageID = "";
        
}


?> 