<?php
    include "simplehtmldom/simple_html_dom.php";
    $search_query = "infosys";
    $search_query = urlencode( $search_query );
    $html = file_get_html( "https://www.google.com/search?q=$search_query&tbm=isch" );
    $image_container = $html->find('table',4);
    foreach($image_container->find('img') as $element){?>
       <img src="<?php echo $element->src?>"/>
   <?php } 

   die;
   //echo $images = $image_container->find('td a img');
    /* echo"<pre>";var_dump($images);echo"<pre>";die;
    $image_count = 10; //Enter the amount of images to be shown    
    $i = 0;
    foreach($images as $image){
        if($i == $image_count) break;
        $i++;
        // DO with the image whatever you want here (the image element is '$image'):
        echo $image;
    }*/
?>