<?php 
  //menampilkan data mysqli
  include "koneksi.php";
  $no = 0;
  $modal=mysqli_query($koneksi,"SELECT * FROM modal ORDER BY modal_id DESC");
  while($r=mysqli_fetch_array($modal)){
  $no++;
       
?>
  <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo  $r['modal_name']; ?></td>
      <td><?php echo  $r['description']; ?></td>
      <td>
         <a href="javascript:void(0)" class='open_modal' id='<?php echo  $r['modal_id']; ?>'>Edit</a>
         <a href="javascript:void(0)" class="delete_modal" data-id='<?php echo  $r['modal_id']; ?>'>Delete</a>
      </td>
  </tr>
 

<?php } ?>