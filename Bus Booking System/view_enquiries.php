<!DOCTYPE html>
<html lang="en">
   <head>
      <title>View Enquiries</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	   <meta charset="utf-8"/>
      <link rel="stylesheet" type="text/css" href="css/style.css">
	   <link rel="preconnect" href="https://fonts.googleapis.com">
	   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">  
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald&display=swap" rel="stylesheet">
    
      <script src="script.js"></script>
   </head>
         
   <body>
        <?php 
            $activeSection = '';
            include 'header.php';
        ?>

   <div class="col-lg-4 col-sm-6">
          <div class="item1"> 

          <table id="example">
		    <thead>
		      <tr>
              <th>Enquiry Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Date of birth</th>
                <th>Phone number</th>
                <th>Email</th>
                <th>Street address</th>
                <th>City</th>
                <th>State</th>
                <th>Postcode</th>
                <th>Enquiry on</th>
                <th>Destination</th>
                <th>Comment</th>
		      </tr>
		    </thead>
		</table>
          </div>
        </div>

	  <footer>
         <div class="footer-conatiner">
            <p>
               © Osama Iftikhar | Last updated: 04/10/2021
            </p>
         </div>
      </footer> 
   </body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').dataTable({
        "bProcessing": true,
        "sScrollX": "100%",
        "sAjaxSource": "model/getEnquiries.php",
        "aoColumns": [
              { mData: 'enquiry_id' } ,
              { mData: 'fname' },
              { mData: 'lname' },
              { mData: 'dob' },
              { mData: 'phone_number' },
              { mData: 'email' },
              { mData: 'address' },
              { mData: 'city' },
              { mData: 'state' },
              { mData: 'postcode' },
              { mData: 'subject' },
              { mData: 'product' },
              { mData: 'comment' }
            ]
      });  
} );
</script>