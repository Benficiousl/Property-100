<?php
$myfile = fopen("datafile.txt", "r") or die("Unable to open file!");
$rdata = fread($myfile,filesize("datafile.txt"));


fclose($myfile )
;
$data = json_decode($rdata , true) or die(json_last_error());
rsort($data);
    foreach ($data as $name => $info ) {
      if ($info['sale_type'] != "Rent") { 
          unset($data[$name]); 
      }
  }

  foreach ($data as $property) {
    //    if (++$i > 9) break;
         //echo $property["images"][0]["download_url"];
         $myimages = $property["images"][0]["download_url"];
         $price = $property['price'];
         $title = $property['title'];
         setlocale(LC_MONETARY, 'en_US');
         $money = number_format($price,2);
         

//$date_modified = $property['date_created'];

         $property_type = $property['property_type'];
         $property_city = $property['city'];
         $description = $property['description'];
         $id = $property['id'];
         $sale_type = $property['sale_type'];
         if($title==null)
         {
           $title ="N/A";
         }
         ?><div class='col-sm-12 col-md-4' >
         <div class='card'>
             <img class='card-img' src= <?php echo $myimages; ?> alt='header' />
             <div class='card-info'>
               <br/>
               <div class='card-icon propertyTitle '><?php echo $property_type;?></div>
               <div class='row'>
               <div class = 'col-md-6'>
               <p class='myTitle card-title text-left'><?php echo $title;?></p>
               <div class='row'>
               <div class='col-lg-1  col-1 col-md-1 text-center'>
                   <i class='fa fa-1x fa-map-marker text-primary mb-3 sr-icons'></i>
                 </div>
               <p class='card-author text-left'><?php echo $property_city; ?></p>

               </div>

               </div>
               
               <div class = 'col-md-6'>
               <a id = "<?php print($id);?>" onClick='reply_click(this.id)' class='btn btntransparent  btn-3 btn-md' style='border-radius:15px;  background-color: #034ea1 !important;border: solid !important;border-color: #034ea1 !important;color: #fff; width:100%; font-weight: 100;'>View Listing</a>
               </div>
               </div>
               </div>
             <div class='card-small'>
                 <div class='container'>
                     <div id='parallelogram'>
                       <div class='image'><p class='unskew'>For <?php echo $sale_type;?></p></div>
                       
                     </div>
                     <p class='card-author text-right priceperM'>Price  <span><b>R <?php echo  $money; ?></b></span> </p>
                   </div>
             </div>
         </div>
         </div>
          <?php        
            
                }

            // Print(array_search(40489, array_column($data, 'Gauteng')));

                ?>