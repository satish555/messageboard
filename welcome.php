<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Welcome to Message Board</title>
   </head>
   
   <body>
    <div align="center">
    
    <table width="100%" border="0">
  <tr>
    <td align="center"><h1>MESSAGE BOARD</h1></td>
    
  </tr>
</table>

    
	</div>
<div align="center">
     <table width="100%" border="0">
        <tr>
          <td>Welcome <?php echo $login_session; ?></td>
          <td><a href = "logout.php">Sign Out</a></td>
        </tr>
      </table>
      <p></p>
</div>
<div align="left">
 <table width="100%" border="0" align="left">
                <tr>
                  <td align="left"><a href="createpost.php">Create Thread/Post</a></td>
                </tr>
              </table>
</div>
<div align="center">

              <?php 
      $sql = "SELECT * FROM posts" ;

$sql = "SELECT * FROM posts" ;
$result = $db->query($sql);

if ($result->num_rows > 0) {
	$counter=0;

    echo "<table border='1'><tr><th>Serial No</th><th>Post Title </th><th>Post Description</th><th>Posted By</th><th>Posted Date</th><th>Comment</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
				$counter++;
        echo "<tr><td>" . $counter . "</td><td>".$row['p_title']."</td>"."<td>". $row['p_description'] ."</td>" .  "<td>". $row['p_postedby'] ."</td>" . "<td>" . $row['p_date'] . "</td>" . "<td>" . '<a href="postacomment.php">Post Your Comment</a>' . "</td>" .  "</tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

			   ?>
             
</div>


<div>
    <table width="100%" border="0">
    <br />
  <tr>
    <td align="center">a project submitted by SATISH</td>
    
  </tr>
</table>      
</div>


   </body>
   
</html>