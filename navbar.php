    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean">
        <div class="container-fluid"><a class="navbar-brand" href="#"><i class="fa fa-bank" style="margin-right:8px;"></i>BANKIFSCMICR<font color="#0099FF">CODE.NET.IN</font></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation" <?php if($page=='bankname') echo'style="background-color: rgba(0,0,0,0.11);"'; ?>> <a class="nav-link <?php if($page=='bankname') echo "active"; ?>" href="bankname.php">Search By Bank</a></li>
					<li class="nav-item" role="presentation" <?php if($page=='ifsc') echo'style="background-color: rgba(0,0,0,0.11);"'; ?>> <a class="nav-link <?php if($page=='ifsc') echo "active"; ?>" href="ifsc.php">Search By IFSC</a></li>
                    <li class="nav-item" role="presentation" <?php if($page=='micr') echo'style="background-color: rgba(0,0,0,0.11);"'; ?>> <a class="nav-link <?php if($page=='micr') echo "active"; ?>" href="micr.php">Search By MICR</a></li>
                    
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">More </a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" <?php if($page=='about') echo'style="background-color: rgba(0,0,0,0.11);"'; ?> href="about.php">About Us</a>
                        <a class="dropdown-item" role="presentation" <?php if($page=='contact') echo'style="background-color: rgba(0,0,0,0.11);"'; ?>  href="contact.php">Contact Us</a>
						
                        <a class="dropdown-item" role="presentation" <?php if($page=='disclaimer') echo'style="background-color: rgba(0,0,0,0.11);"'; ?> href="disclaimer.php">Disclaimer</a>
						<a class="dropdown-item" role="presentation" <?php if($page=='terms') echo'style="background-color: rgba(0,0,0,0.11);"'; ?> href="terms.php">Terms</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>