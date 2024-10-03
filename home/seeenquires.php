<?php
session_start();	

if(!isset($_SESSION["username"]))
{
	header("location:login:php");
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
		.table {
    margin-top: 20px;
    border-collapse: collapse;
    width: 100%;
}

.table th, .table td {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

/* Table Header */
.table thead th {
    background-color: #f2f2f2;
    color: black;
}

/* Table Body */
.table tbody td {
    background-color: #ffffff;
    color: black;
}

/* Zebra Striping for rows */
.table tbody tr:nth-child(odd) {
    background-color: #f9f9f9;
}

/* Hover effect for rows */
.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* Custom styles for the buttons */
.btn {
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 5px;
    margin: 0 2px;
}

.btn-update {
    background-color: #4CAF50;
    color: white;
}

.btn-delete {
    background-color: #f44336;
    color: white;
}
h1 {
    color:#86c232; 
}
.btn-update:hover {
    background-color: #45a049;
}
		
.bg{
	margin: 50px;
	background:  linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.8)), url("img/admin.jpg") center/cover no-repeat;
			
		}
		
		

.btn-completed {
    background-color: #007bff; 
    color: white;
    padding: 10px 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    text-decoration: none;
    display: inline-block; 
}

.btn-completed:hover {
    background-color: #0056b3; /* A darker blue for hover effect */
	 color: black;
}	

.btn-delete:hover {
    background-color: #d32f2f;
}</style>	 
	
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class ="bg">
	<a href="completed.php" class="btn-completed">Completed Enquiries</a>

    <h1  >List of Enquiries</h1>
    <table class="table">
        <thead>
			
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Location</th>
                <th>Message</th>
                <th>Status</th>
				<th>Action</th>
            </tr>
			
        </thead>
        <tbody>
			<?php
			$conn=new mysqli ('localhost','root','','photographyweb');
			
			
			//check connection
			
		 if ($conn === false) {
        die("connection error");
    }
	$sql="Select * from contact";
	$result= $conn->query($sql);

	while ($row=$result->fetch_assoc()){
		while ($row = $result->fetch_assoc()) {
    echo "<tr>
              <td>" . $row["id"] . "</td>
              <td>" . $row["name"] . "</td>
              <td>" . $row["email"] . "</td>
              <td>" . $row["number"] . "</td>
              <td>" . $row["location"] . "</td>
              <td>" . $row["message"] . "</td> 
              <td>" . $row["status"] . "</td>
              <td>
                  <a href='update.php?id=" . $row["id"] . "' class='btn btn-update'>Update</a>
                  <a href='delete.php?id=" . $row["id"] . "' class='btn btn-delete'>Delete</a>
              </td>
          </tr>";
}
		
		
		
	}
		
           
				?>
          
        </tbody>
    </table>
	
	
</html>