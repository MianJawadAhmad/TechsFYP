<?php
$query=mysqli_query($conn, "select * from contact");
$fetch=mysqli_fetch_assoc($query);

?>


<div class="header" id="home">
    <div class="container">
        <ul>
            <li> <a href="sign_in.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Sign In </a></li>
            <li> <a href="register.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Create Account Eshop </a></li>
            <li><i class="fa fa-user-o" aria-hidden="true"></i> WELCOME :
                <b><?php
                echo  @$_SESSION['customer_name'];


                ?></b></li>
            <li>
                <a href="">
					<?php
					if(@$_SESSION['customer_email'])
					{
						
					
					?>
                    <a href="logout.php"> <button class="btn btn-danger btn-sm">Logout</button></a> <?php } else{ ?>
					
					          <a href="sign_in.php"> <button class="btn btn-success btn-sm">Login</button></a> <?php }  ?>
					
					
                </a>

            </li>

        </ul>
    </div>
</div>