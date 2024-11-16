<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us | EZ park</title>
        <link rel="stylesheet" href="contactUs.css">
        <script>
            function enableButton() {
                alert("Successfully Sent");
            }
        </script>
    </head>
    <body>
        <h1>Contact Us</h1>
        <hr>
        <form method="post" action="insert_conus.php">
            <fieldset>
                <div class="label">
                    <label style="color: #f8acac;" for="name">Name :</label><br>
                    <input type="text" id="name" name="name"><br><br>
                    <label style="color: #f8acac;" for="vno">Vehicle No :</label><br>
                    <input type="text" id="vno" name="vno"><br><br>
                    <label style="color: #f8acac;" for="Telephone">Phone No:</label><br>
                    <input type="num" id="Telephone" name="phone"><br><br>
                    <label style="color: #f8acac;" for="eadd">Email Address:</label><br>
                    <input type="email" id="eadd" name="eadd"><br><br>
                    <label style="color: #f8acac;" for="meg">Message :</label><br>
                    <textarea name="meg" cols="50" rows="8" placeholder="Enter your problem here" required></textarea>
                    <br><br>
                    <button class="center-button" type="submit" name="subbut" onclick="enableButton()">Send</button>
                </div>
            </fieldset>
        </form>
    </body>
</html>