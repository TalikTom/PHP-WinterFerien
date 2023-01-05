<?php require 'partials/header.php'; ?>
<?php require 'partials/nav.php'; ?>



<form>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-6 cell">
                <label>Name
                    <input type="text" placeholder=".medium-6.cell">
                </label>
            </div>
            <div class="medium-6 cell">
                <label>Email
                    <input type="text" placeholder=".medium-6.cell">
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">

            <div class="medium-6 cell">
                <label>Subject
                    <input type="text" placeholder=".medium-6.cell">
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">

            <div class="medium-6 cell">
                <label>
                    What books did you read over summer break?
                    <textarea placeholder="None"></textarea>
                </label>
            </div>
        </div>
    </div>
</form>
<?php require 'partials/footer.php'; ?>

