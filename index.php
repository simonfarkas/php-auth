<?php
    include "components/head.php";
    include "logic/index.logic.php";
    global $result;
?>
<div class="mt-12">
    <h2 class="text-2xl">List of users:</h2>
    <ul>
            <?php
                while($row = mysqli_fetch_assoc($result)) {
                    $username = $row['username'];
                    $email = $row['email'];
                    echo "<li class='flex flex-row items-center justify-between bg-blue-600 text-white p-4 my-2'>
                        <span>$username</span>
                        <span>$email</span>
                    </li>";
                }
            ?>
    </ul>
</div>
<?php
    include 'components/footer.php'
?>
