# noloadphp
No load php will help you to move around your pages without loading the browser

## How to create route and pages?

create your new pages in to the /pages/ directory
open /route.php assign route and include the page you created 

case 'contact':
 include_once('pages/contact.php');
 break;
    
create your nave in your header or anywere that you want to click to load the view using this function.
<?php noload_nav('contact'); ?> //contact is what you set in route to match.

## How to create forms and actions without loading the pages? 
 create a form tag like below
 <form <?php echo noload_action('contact'); ?>> //this functions add you the form action set
 replace contact with your own action 
 create your action file in /actions/contact.php
 opent he /actions.php set the case and include the file you created
 
 case 'contact':
   include_once('actions/contact.php');
   break;
 

