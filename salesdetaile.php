<title>Sales Detailes</title>

<?php
include 'header.php';
include 'conect.php';
$stmt2 = $con->prepare("SELECT * FROM `animals`");
$stmt2->execute();

?>

<link rel="stylesheet" href="css/tabel.css">
<body class="animals">
     <section>
       <h1>Tableux De Sales Detailes</h1>
       <div class="tbl-header">
         <table cellpadding="0" cellspacing="0">
           <thead>
             <tr>
               <th>Pet_iD</th>
               <th>Petcategory</th>
               <th>Breed</th>
               <th>Weight(kg)</th>
               <th>Height(cm)</th>
               <th>Age(m)</th>
               <th>Fur</th>
               <th>Cost(Rs)</th>
             </tr>
           </thead>
         </table>
       </div>
       <div class="tbl-content">
         <table cellpadding="0" cellspacing="0">
           <tbody>
     <?php
     foreach ($stmt2 as $stm) {
     echo '  
             <tr>
               <td>' .$stm['pet_id'] .'</td>
               <td>' .$stm['category'] .'</td>
               <td>' .$stm['breed'] .'</td>
               <td>' .$stm['weight'] .'</td>
               <td>' .$stm['height'] .'</td>
               <td>' .$stm['age'] .'</td>
               <td>' .$stm['fur'] .'</td>
               <td>' .$stm['cost'] .'</td>
             </tr>
           
     ';};
     ?>
     </tbody>
         </table>
       </div>
     </section>
     
     </body>
</div> <!-- end main-container -->
    <div class="botons">
    <button type="submit"class="btn btn-5 danger">Delete<i style="margin-left: 5px;" class="fas fa-trash"></i></button>
    <button type="submit"class="btn btn-5 primery">Update<i style="margin-left: 5px;"  class="far fa-edit"></i></button>
    <button type="submit"class="btn btn-5">Add<i style="margin-left: 5px;"  class="fas fa-plus-circle"></i></button>
    <div class="deletis">
        <i class="fas fa-trash"></i>
        <input type="text"  placeholder="Enter Id To delete">
    </div>

    </div>
<?php
include 'footer.php'
?>

</body>

</html>