<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 *
 * Authors:     Liran Tal <liran@enginx.com>
 *
 * daloRADIUS edition - fixed up variable definition through-out the code
 * as well as parted the code for the sake of modularity and ability to
 * to support templates and languages easier.
 * Copyright (C) Enginx and Liran Tal 2007, 2008
 *
 *********************************************************************************************************
 */

echo <<<END

		</p>
<h4>Prepaid Vouchers</h4>

<div class="row">
   <div class="col-sm-3">
	<div class="card">
	 <center>
  	 <div class="card-header">
    		FREE 30-Minutes
  		</div>
  		<ul class="list-group list-group-flush">
    			<li class="list-group-item">For Customers</li>
  		</ul>
		<div>
	 </div>
	 </center>
	</div>
   </div>
   <div class="col-sm-3">
        <div class="card">
         <center>
         <div class="card-header">
                30-Minutes
                </div>
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">Php10.00</li>
                        <li class="list-group-item">Accumulate Time</li>
                </ul>
                <div>
         </div>
         </center>
        </div>
   </div>
   <div class="col-sm-3">
        <div class="card">
         <center>
         <div class="card-header">
                1-Hour
                </div>
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">Php15.00</li>
                        <li class="list-group-item">Accumulate Time</li>
                </ul>
                <div>
         </div>
         </center>
        </div>
   </div>
   <div class="col-sm-3">
        <div class="card">
         <center>
         <div class="card-header">
                2-Hours
                </div>
                <ul class="list-group list-group-flush">
                        <li class="list-group-item">Php20.00</li>
                        <li class="list-group-item">Accumulate Time</li>
                </ul>
                <div>
         </div>
         </center>
        </div>
   </div>

</div>

<br>
<p class="lead">Please contact us for long-term packages.</p>

		<h4>Free to access sites:</h4>
		<a href="http://wikipedia.com"><img src="template/images/wikipedia.jpg" alt="Wikipedia" class="img-thumbnail" width="100" target="_blank"></a>
		<a href="http://google.com"><img src="template/images/googlelogo.png"  alt="Google" class="img-thumbnail" width="100" target="_blank"/></a>
		<a href="#"><img src="template/images/portfolio3.jpg" alt="portfolio3" class="img-thumbnail" /></a>
		<a href="#"><img src="template/images/portfolio4.jpg" alt="portfolio4" class="img-thumbnail" /></a>
	</div>


		
	<div id="footer">Enginx&copy;2008 All Rights Reserved &bull; Enginx and daloRADIUS Hotspot Systems <br/>
		Design by <a href="http://templatefusion.org">TemplateFusion</a>
	</div>


</div>

</body>
</html>

END;



?>
