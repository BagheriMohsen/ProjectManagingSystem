
    
    <div class="br-sideright">
      <ul class="nav nav-tabs sidebar-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i class="icon ion-ios-contact-outline tx-24"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i class="icon ion-ios-calendar-outline tx-24"></i></a>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane pos-absolute a-0 mg-t-60 contact-scrollbar active" id="contacts" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Users</label>
          <div class="contact-list pd-x-10">
            <a href="message" class="contact-list-link new">
              <div class="d-flex">
                <div class="pos-relative">
                  <img src="img/user-3ajjad.png" alt="">
                  <div class="contact-status-indicator bg-warning"></div>
                </div>
                <div class="contact-person">
                  <p>Sajjad Rafie</p>
                  <span>Web Unit</span>
                </div>
              </div>
            </a>
          </div>

        </div>

		<div class="tab-pane pos-absolute a-0 mg-t-60 schedule-scrollbar" id="calendar" role="tabpanel">
          <label class="sidebar-label pd-x-25 mg-t-25">Date & Times</label>
          <div class="pd-x-25">
			<h2 class="tx-roboto tx-white-8" id="show_time_sideright">
				<script language="JavaScript">
					function show_time_sideright(){
					 d=new Date();
					 H=d.getHours();H=(H<10)?"0"+H:H;
					 i=d.getMinutes();i=(i<10)?"0"+i:i;
					 s=d.getSeconds();s=(s<10)?"0"+s:s;
					 document.getElementById('show_time_sideright').innerHTML=H+" : "+i+" : "+s;
					 setTimeout("show_time_sideright()",1000);/* 1 sec */
					} show_time_sideright();
				</script>
			</h2>
			<h6 id="geodate" class="tx-roboto tx-white-8">
				<script>
							var d = new Date();
							document.getElementById("geodate").innerHTML = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();
							</script>
			</h6>
          </div>

        </div>
		 
      </div>
    </div>