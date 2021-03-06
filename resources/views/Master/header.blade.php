
    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
		<!--
        <div class="input-group hidden-xs-down wd-170 transition">
          <input id="searchbox" type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
          </span>
        </div> 
		-->
		
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-email-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Messages</label>
                <a href="">+ New Message</a>
              </div><!-- d-flex -->

              <div class="media-list ">
                <!-- loop starts here -->
                <a href="message" class="media-list-link">
                  <div class="media">
                    <img src="img/user-3ajjad.png" alt="">
                    <div class="media-body">
                      <div>
                        <p>Sajjad Rafie</p>
                        <span>July 19</span>
                      </div><!-- d-flex -->
                      <p>Whiteboard Request</p>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <div class="dropdown-footer">
                  <a href="message"><i class="fa fa-angle-down"></i> View All Messages </a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline tx-24"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
            <div class="dropdown-menu dropdown-menu-header">
              <div class="dropdown-menu-label">
                <label>Notifications</label>
                <a href="">Notification</a>
              </div><!-- d-flex -->

              <div class="media-list">
                <!-- loop starts here -->
                <a href="notice" class="media-list-link read">
                  <div class="media">
                    <div class="media-body">
                      <p class="noti-text">New Project Defined.</p>
						<span><small>May 06</small></span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <div class="dropdown-footer">
                  <a href="notice"><i class="fa fa-angle-down"></i> View All Notifications</a>
                </div>
              </div><!-- media-list -->
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Ali Fatemi</span>
              <img src="img/user-blank.png" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-250">
              <div class="tx-center">
                <h6 class="logged-fullname">Ali Fatemi</h6>
                <p>Management Unit</p>
              </div>
              <hr>
              <ul class="list-unstyled user-profile-nav">
                <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li><a href=""><i class="icon ion-locked"></i> Change Password</a></li>
                <li><a href=""><i class="icon ion-help-buoy"></i> Support Request</a></li>
                <li><a href="logout"><i class="icon ion-power"></i> Logout</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        <div class="navicon-right">
          <a id="btnRightMenu" href="" class="pos-relative">
            <i class="icon ion-ios-chatboxes-outline"></i>
          </a>
        </div><!-- navicon-right -->
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->