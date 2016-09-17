<?phpinclude_once 'DBConnection.php';


class Registration{
     public function __construct() {
          
        
     }
     function insert() {
        $connect2 = new createConnection ();
        $connect2->connectToDatabase();
        echo 'insert';
        $sql = $connect2->conn->prepare("INSERT INTO organization(org_Name,org_address,org_phone,"
                . "org_NIP,org_category,org_discription,org_email)VALUES (?,?,?,?,?,?,?)");
                echo $s=$_POST['org_name'];

        $sql->bind_param('sssssss', $_POST['org_name'], $_POST['org_address'], $_POST['org_phone'], $_POST['org_NIP'], 
                $_POST['org_category'], $_POST['org_discription'], $_POST['org_email']);
        if ($sql->execute()) {



            echo 'insertion succses';
        } else {
            echo 'insert not succses';
        }
        $sql->close();
        $connect2->closeConnection();
    }
    
    
     function validate() {
     echo 'haloo validate';

        $org_name = $org_category = $org_email = $org_address = $org_discription = $org_phone =$org_NIP = "";
        $error = array(
            'org_name' => '',
            'org_category' => '',
            'org_email' => '',
            'org_address' => '',
            'org_discription' => '',
            'org_phone' => '',
            'org_NIP' => '',
        );


        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_POST["org_name"])) {
                $org_name = ($_POST["org_name"]);
            } else {

                $error['org_name'] = 'organization name is required';

                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/", $org_name)) {
                    $error['org_name'] = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["org_category"])) {

                $error['org_category'] = "organization supportin category is required";
            } else {
                $org_category = ($_POST["org_category"]);
                // check if org category address is well-formed
                if (!preg_match("/^[a-zA-Z ]*$/", $org_category)) {
                    $error['org_category'] = "Only letters and white space allowed";
                }
            }

            if (empty($_POST["org_email"])) {
                $error['org_email'] = "email name is required";
            } else {
                $org_email = ($_POST["org_email"]);
                // check if e-mail address is well-formed
                if (!filter_var($org_email, FILTER_VALIDATE_EMAIL)) {
                    $error['org_email'] = "Invalid email format";
                }
            }
            if (empty($_POST["org_address"])) {
                $error['org_address'] = "address is required";
            } else {
                $org_address = ($_POST["org_address"]);
            }
            if (empty($_POST["org_discription"])) {
                $error['org_discription'] = "discription is required";
            } else {
                $org_discription = ($_POST["org_discription"]);
  
               
            }
            if (empty($_POST["org_phone"])) {
                $error['org_phone'] = "phone is required";
            } else {
                $org_phone = ($_POST["org_phone"]);
            }
              if (empty($_POST["org_NIP"])) {
                $error['org_NIP'] = "phone is required";
            } else {
                $org_NIP = ($_POST["org_NIP"]);
            }
        }
        return $error;
    }

    function check_db() {
        $connect2 = new createConnection ();
        $connect2->connectToDatabase();
        $org_name = $_POST['org_name'];
        $org_email = $_POST['org_email'];
        $org_NIP = $_POST['org_NIP']; 
        $q = $connect2->conn->prepare("SELECT org_Name,org_email,org_NIP FROM "
                . "organization WHERE org_Name=? OR org_email=? OR org_NIP=?");
        $q->bind_param('sss', $org_name, $org_email,$org_NIP);
        $q->execute();
        $q->store_result();
        $q->bind_result($org_name, $org_email,$org_NIP);
        $q->fetch();


        if ($q->num_rows == 1) {



            return false;
        } else {

        Registration:: insert();
        }
    }
}

