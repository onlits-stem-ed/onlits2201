<?php
namespace Hostel;

require_once "./DBConfig.php";
require_once "./MessageBox.php";

class allocation_model
{
    function new_allocation($hosteller_id, $room_no)
    {
        $con = \dbconfig::get_connection();
        $sql = "INSERT INTO room_allocation(date, hosteller_id, room_no) VALUES(CURDATE(), '$hosteller_id','$room_no')";
        if ($con->query($sql) === TRUE) {
            message_box("Room allocated successfully!");
        } else {
            message_box($con->error, "HMS 1.0 - Error");
        }
    }

    function checkout($allocation_id)
    {
        echo "allocation_id: $allocation_id";
        $con = \dbconfig::get_connection();
        $sql = "UPDATE room_allocation SET checkout_date = CURDATE() WHERE allocation_id= '$allocation_id'";
        if($con->query($sql)) {
            message_box("Hosteller checked out");
        } else {
            message_box($con->error, "HMS 1.0 - Error");
        }
    }

    function edit_alloction()
    {

    }

    function delete_allocation()
    {
    }

    function search_allocation_by_allocation_id($allocation_id)
    {
        
    }

    function search_allocation_by_hosteller_id($hosteller_id)
    {

    }

    function search_allocation_by_room_number($room_no)
    {
        $row = null;
        $con = dbconfig::get_connection();
        $sql = "SELECT * FROM room_allocation WHERE room_no='$room_no'";
        $result = $con->query($sql);
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
        }
        return $row;
    }

    function display_all_allocations()
    {
        
    }
}
