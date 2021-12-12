<!-- <?php
include "../middlewares/isAuthenticated.php";
include "../middlewares/isAdminOrStaff.php";
include "../db/connection.php";

$id = isset($_GET['id']) ? $_GET['id'] : -1;

$details = selectOne('SELECT Category_status FROM tbl_category WHERE Category_id=?', [$id]);

if ($details) {
	$newStatus = $details['Category_status'] == "active" ? "inactive" : "active";
	query("UPDATE tbl_category SET Category_status='{$newStatus}' WHERE Category_id='{$id}'");
	header("Location:../dashboards/admin/category_dashboard.php");
} else {
	header("Location:bookmart/categories");
}

?> -->