<?php
function check_if_added_to_cart($item_id){
    $user_id = $_SESSION['user_id'];
    $con = mysqli_connect("localhost","root", "", "estore") or die(mysqli_error($con));
    $select_query = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id'
             and status='Added to cart'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows_fetched = mysqli_num_rows($select_query_result);
     if($total_rows_fetched >= 1)
    {
         return 1;
     } else {
         return 0;
     }
}
?>
