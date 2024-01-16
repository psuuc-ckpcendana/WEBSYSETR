<?php
    include 'conn.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $message = $_POST['message'];

        $errorEmpty = false;

        if(empty($message)){
            echo '<span class = "form-error"> Please fill in the message box!</span>';
            $errorEmpty = true;
        }else{
            echo '<span class = "form-success"> Testimonial sent to admin!</span>';
        }
        
        //*insert comment to database yeah
        $sql = "INSERT INTO `testimonials` (`name`, `message`, `posted`, `status`) VALUES ('$name', '$message', NOW(), 'Unapproved')";
        $conn->query($sql);
    }else{
        echo "There was an error";
    }
?>
<script>
    $("#message").removeClass("input-error");
    var errorEmpty = "<?php echo $errorEmpty; ?>";

    if(errorEmpty == true){
        $("#message").addClass("input-error");
    }
    if(errorEmpty == false){
        $("#message").val('');
    }

</script>