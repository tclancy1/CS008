<? include ("top.php"); ?>



<article id="main">

    
        <p class="first">As a restaurant in Vermont, we try to keep our standards for our ingredients very high,
        getting as much local and fresh supplies as we can.  With that being said, we also do our 
        best in cooking our fresh ingredients with healthier options to deliver
        the best tasting and healthiest food.  Although, our menu may seem standard
        and simple,we decided to take these simple ideas and make them as complex as we could,
        giving your taste buds the experience of a life time.  When judging your diet, it is not
        all about calories.  It is also what these calories are coming from and we can
        guarantee that these are the best ingredients in the area.
        
        </p>
        
       <?php
/* Sample code to open a plain text file and put the data into an array */

$debug = false;

if(isset($_GET["debug"])){
    $debug = true;
}




$filename = "data.csv";

if ($debug) print "\n\n<p>filename is " . $filename;
/* have the file in the same folder as this file
 * be sure permissions are set properly
 * if it does work then it is the end of line mark in your csv file
 * check your code with my joe pond sample and see if it works
 * 
 */

$file=fopen($filename, "r");


/* the variable $file will be empty or false if the file does not open */
if($file){
    if($debug) print "<p>File Opened. Begin reading data into an array.</p>\n";

    /* This reads the first row which in our case is the column headers */
    $headers=fgetcsv($file);
    
   
    while(!feof($file)){
        $records[]=fgetcsv($file);
    }
    
    //closes the file
    fclose($file);
    if($debug) {
        print "<p>Finished reading. File closed.</p>\n";
        print "<p>Contents of my array<p><pre> "; print_r($records); print "</pre></p>";
    }
} else {
    if($debug) print "<p>File Opened Failed.</p>\n";
}

 echo '<table>';
 print '<tr><th>' . $headers[0] . '</th><th> ' . $headers[1] . '</th></tr>' . "\n";


foreach($records as $oneRecord){
    
	print '<tr><td>' . $oneRecord[0] . '</td><td> ' . $oneRecord[1] . '</td></tr>' . "\n";
}
echo '</table>';   

?>
        
 
</article>
<? include ("footer.php"); ?>
</body>
</html>
