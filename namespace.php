<!-- What is a Namespace in PHP?
A namespace in PHP is like a folder or package that groups related classes, functions, and constants together.
It helps avoid name conflicts when multiple classes or functions have the same name in a big project. -->

Admin/User.php
<?php
namespace Admin;

class User {
    public function getRole() {
        return "Admin User";
    }
}
?>

Customer/User.php
<?php
namespace Customer;
class User {
    public function getRole() {
        return "Customer User";
    }
}
?>

index.php
<?php
require 'Admin/User.php';
require 'Customer/User.php';

use Admin\User as AdminUser;
use Customer\User as CustomerUser;

$admin = new AdminUser();
echo $admin->getRole();  // Output: Admin User

$customer = new CustomerUser();
echo $customer->getRole();  // Output: Customer User
?>
