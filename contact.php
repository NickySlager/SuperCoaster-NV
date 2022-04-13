
<?php require_once "head.php"?>
<?php require_once "header.php"?>
<body>
<div class="contact-container">
<form>
<form action="backendcontact.php" method="POST">
    <div class="form-group">
        <label>Naam:</label>
        <input type="text" name="name" >
    </div>
    <div class="form-group">
        <label>Tel Nummer:</label>
        <input type="tel" name="phoneNumber">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email">
    </div>
    <input type="submit" value="verzend_formulier">
</form>
</div>

</form>
</body>

