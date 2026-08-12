<?php
include "../Controler/IndexValidation.php";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>PHP-JS Validation </title>

    <script>
        function collect_data() {

            let nm = document.getElementById("name").value.trim();
            let mail = document.getElementById("email").value.trim();
            let web = document.getElementById("website").value.trim();

            let gender = document.querySelector('input[name="gender"]:checked');

            let valid = true;
            let message = "";

            if (nm === "") {
                message += "Name is required.";
                valid = false;
            } else if (nm.length < 5) {
                message += "Name must be at least 5 characters.";
                valid = false;
            }

            if (mail === "") {
                message += "Email is required.";
                valid = false;
            } else if (!mail.endsWith("@gmail.com")) {
                message += "Email must end with @gmail.com.";
                valid = false;
            }

            if (web !== "" && !web.startsWith("https://")) {
                message += "Website must start with https://";
                valid = false;
            }

            if (gender === null) {
                message += "Please select a gender.";
                valid = false;
            }

            if (!valid) {
                alert(message);
            }

            return valid;
        }
    </script>
</head>

<body>
    <form method="post" action="" onsubmit="return collect_data()" >
        <h1>PHP-JS Form Validation Example</h1>

        <?php if (!empty($message)): ?>
            <div style="color: green; font-weight: bold; margin-bottom: 15px;">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        
        <table>
            <tr>
                <td>
                    <p> <span style="color: red; font-weight: bold;">* Required field</span></p>
                </td>
            </tr>

            <tr>
                <td><label for="name">Name:</label></td>
                <td>
                    <input type="text" id="name" name="name" required>
                    <span class="required" style="color: red;">*</span>
                    <?php echo $name ?>
                </td>
            </tr>

            <tr>
                <td><label for="email">Email:</label></td>
                <td>
                    <input type="email" id="email" name="email" required>
                    <span class="required" style="color: red;">*</span>
                    <?php echo $email ?>
                </td>
            </tr>

            <tr>
                <td><label for="website">Website:</label></td>
                <td>
                    <input type="url" id="website" name="website"> 
                    <?php echo $website ?>
                </td>
                
            </tr>

            <tr>
                <td><label for="Comment">Comment</label></td>
                <td>
                    <textarea id="comment" name="comment" rows="5" cols="40" style="resize: none;"></textarea>
                    <?php echo $comment ?>
                </td>
                
            </tr>

            <tr>
                <td><label>Gender:</label></td>
                <td>
                    <input type="radio" id="gender" name="gender" value="Male" required>
                    <label for="gender">Male</label>

                    <input type="radio" id="gender" name="gender" value="Female" required>
                    <label for="gender">Female</label>

                    <input type="radio" id="gender" name="gender" value="Others" required>
                    <label for="gender">Others</label>

                    <span class="required" style="color: red;">*</span>
                    <?php echo $gender ?>
                </td>
            </tr>

            <tr>
                <td><input type="submit" id="submit" name="submit" value="Submit"></td>
            </tr>

        </table>

    </form>
</body>

</html>