<?php
if(isset($_GET['filename']))
	{
	$file = $_GET['filename'];

	header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    //header('Content-Transfer-Encoding: binary');   
    header('Content-Length: ' . filesize($file));


	if(isset($_GET['img'])){
	//Name the thumbnail image (Same as the pdf file -  You can set custom name)
	$thumb = basename($file, ".pdf");
	 
	 //Upload the PDF
	    if(move_uploaded_file($_FILES['pdfupload']['tmp_name'], $file)) {
	     
	    //Set path to the PDF file
	    $pdfWithPath = "/".$file;
	     
	    //Add the desired extension to the thumbnail
	    $thumb = $thumb.".jpg";
	     
	    //execute imageMagick's 'convert', setting the color space to RGB
	    //This will create a jpg having the widthg of 200PX
	    exec("convert \"{$pdfWithPath}[0]\" -colorspace RGB -geometry 200 $thumbDirectory$thumb");
	         
	    // Finally display the image
	    echo "<p><a href=\"$pdfWithPath\"><img src=\"$thumb\" alt=\"\" /></a></p>";
	    }
	    
}

?>