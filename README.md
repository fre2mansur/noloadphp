# noloadphp
No load php will help you to create php web aplication by without loading the pages like vue, react.

predefined ajax will take care for you. all you need to do is to create route and php pages.

## How to create route and pages?

Create your new pages in to the /pages/ directory
open /route.php assign route and include the page you created 

```
case 'contact':
 include_once('pages/contact.php');
 break;
```

Create your nave in your header or anywere that you want to click to load the view using this function.

```
<?php noload_nav('contact'); ?>
```

## How to create forms and actions without loading the pages? 
 Create a form tag like below
 
 ```
  <form <?php echo noload_action('contact'); ?>>
 ```
 
 create your action file in /actions/contact.php
 
 opent he /actions.php set the case and include the file you created
 
 ```
 case 'contact':
   include_once('actions/contact.php');
   break;
```
 

