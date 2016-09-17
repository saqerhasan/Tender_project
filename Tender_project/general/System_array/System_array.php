<?php

$header_menu1 = array(

  'home'  => array('text'=>'Home',  'url'=>'./index.php?url=tender_controler/tender_view'),
  'registration_form' => array('text'=>'registration form', 'url'=>'./index.php?url=org_controler/create',),
    'About_Us' => array('text'=>'About Us', 'url'=>'?p=about'),
    'Contact_Us' => array('text'=>'Contact Us', 'url'=>'./index.php?url=contact_controler/create'),
    
    
    
);
$header_menu2 = array(

  'home'  => array('text'=>'Home',  'url'=>'./index.php?url=tender_controler/tender_view'),
  'registration_form' => array('text'=>'registration form', 'url'=>'./index.php?url=org_controler/create',),
    'About_Us' => array('text'=>'About Us', 'url'=>'?p=about'),
        'users_modulus'  => array('text'=>'User Form',  'url'=>'./index.php?url=user_controler/create'),
    'Contact_Us' => array('text'=>'Contact Us', 'url'=>'./index.php?url=contact_controler/create'),
    'log_out' => array('text'=>'log out', 'url'=>'./index.php?url=logout_controler/logout'),
);
$left_menu = array(

  
  'tender modulus'  => array('text'=>'Tender Form',  'url'=>'./index.php?url=tender_controler/create','name'=>'tender_controler'),
  'organization modulus' => array('text'=>'Organization Form', 'url'=>'./index.php?url=org_controler/create','name'=>'org_controler'),
    'User' => array('text'=>'user', 'url'=>'./index.php?url=user_controler/grid_view','name'=>'user_controler'),
    'Tender' => array('text'=>'Tender', 'url'=>'./index.php?url=tender_controler/grid_view','name'=>'tender_controler'),
     'Organization' => array('text'=>'Organization', 'url'=>'./index.php?url=org_controler/grid_view','name'=>'org_controler'),
    'governerate' => array('text'=>'governerate', 'url'=>'./index.php?url=lookup_gov_con/grid_view','name'=>'lookup_gov_con'),
      'category' => array('text'=>'category', 'url'=>'./index.php?url=lookup_cat_con/grid_view','name'=>'lookup_cat_con'),
    'area' => array('text'=>'area', 'url'=>'./index.php?url=lookup_area_con/grid_view','name'=>'lookup_area_con'),
    'add_role' => array('text'=>'add role', 'url'=>'./index.php?url=user_controler/add_role','name'=>'user_controler'),
);



$right_menu = array(

  'Agricultural and Veterinary Supplies'  => array('text'=>'Agricultural and Veterinary Supplies', 
  'url'=>'?p= Agricultural and Veterinary Supplies'),
  'Foodstuffs'  => array('text'=>'Foodstuffs',  'url'=>'?p=Foodstuffs'),
  'Commercial Supplies' => array('text'=>'Commercial Supplies', 'url'=>'?p=Commercial Supplies'),
   'Consulting and training'  => array('text'=>'Consulting and training',  'url'=>'?p=Consulting and training'),
  'Services'  => array('text'=>'Services',  'url'=>'?p=Services'),
'Construction and Building Materials'  => array('text'=>'Construction and Building Materials', 
	   'url'=>'?p=Construction and Building Materials'),
'Supplies medical and scientific'  => array('text'=>'Supplies medical and scientific', 'url'=>'?p=Supplies medical and scientific'),
		   
  'Information technology'  => array('text'=>'Information technology','url'=>'?p=Information technology'),
 'Media, advertising and printing'  => array('text'=>'Media, advertising and printing',  'url'=>'?p=Media, advertising and printing'),
 'Real estate and rental'  => array('text'=>'Real estate and rental',  'url'=>'?p=Real estate and rental'),
   'Insurance Services'  => array('text'=>'Insurance Services',  'url'=>'?p=Insurance Services'),
  'Administrative and Financial Services'  => array('text'=>'Administrative and Financial Services', 
  'url'=>'?p=Administrative and Financial Services'),
  'Elevators and escalators'  => array('text'=>'Elevators and escalators',  'url'=>'?p=Elevators and escalators'),
   'Machinery and equipment'  => array('text'=>'Machinery and equipment',  'url'=>'?p=Machinery and equipment'),
	  'Vehicles, cars and spare parts'  => array('text'=>'Vehicles, cars and spare parts',  'url'=>'?p=Vehicles, cars and spare parts'),

);


?>
