	<footer>
        <div class="container-fluid">
            <div class="footer_content row">
			
                <div class="col-md-6">
                    <span class="copyright">Today Total Login attempts:
					<?php 
						
						if(isset($_SESSION['attempts'])){ echo $_SESSION['attempts']; }else{ echo "0";} 
					?>
					</span>
                </div>
                
                <div class="col-md-6">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
		
            </div>
        </div>
    </footer>
	
	
</body>
</html>