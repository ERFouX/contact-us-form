<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Us Form</title>
</head>
<body>
    <div class="background">
        <div class="container">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <a href="closed.php"><div class="screen-header-button close"></div></a>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>CONTACT</span>
                            <span>US</span>
                        </div>
                        <div class="app-contact">CONTACT INFO : <a class="app-contact" style="text-decoration: none;" href="mailto:ERFouX@Gmail.com">ERFOUX@GMAIL.COM</a></div>
                    </div>
                    <div class="screen-body-item">
                        <div class="app-form">
                            <form method="POST" action="submited.php">
                                <div class="app-form-group">
                                    <input name="name" type="text" class="app-form-control" placeholder="NAME" required>
                                </div>
                                <div class="app-form-group">
                                    <input name="email" type="email" class="app-form-control" placeholder="EMAIL" required>
                                </div>
                                <div class="app-form-group">
                                    <input name="mobile" type="tel" class="app-form-control" placeholder="MOBILE" pattern="09\d{9}" title="Enter a valid 11-digit mobile number starting with 09" inputmode="numeric">
                                </div>
                                <div class="app-form-group message">
                                    <input name="message" class="app-form-control" placeholder="MESSAGE" required>
                                </div>
                                <div class="app-form-group buttons">
                                    <button type="submit" name="submit" class="app-form-button">SEND</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
