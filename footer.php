<footer>
    <p>Anthony Blasi and Tim Clancy</p><p>Every image was taken from morguefile.com or stockfreeimage.com(Both sites allow their images to be used at anytime)</p>
    <?php
$today = date("F j, Y");

// this is needed since the the format we display is not considered valid for the time element
$todayDateValue = date("Y-m-d"); 

print '<p>Today is: <time datetime="' . $todayDateValue . '">' . $today . "</time></p>\n";

?>
    
</footer>