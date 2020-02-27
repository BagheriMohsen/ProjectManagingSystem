    
    <div class="br-sideleft sideleft-scrollbar">
		<div class="tx-center side-logged-name-wr">
    <a href="#"><img src="{{asset('panel/img/user-blank.png')}}" class="rounded-circle mg-t-20" style="width:70%; height:auto;"></a>
			<h4 class="logged-fullname color-eee">Ali Fatemi</h4>
			<p class="color-eee">Manager</p>
		</div>
      <label class="sidebar-label pd-x-10 mg-t-20 op-3"></label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{url('/')}}" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-keypad tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
        <li class="br-menu-item">
            <a href="{{route('timeline.index')}}" class="br-menu-link">
            <i class="menu-item-icon icon ion-coffee tx-24"></i>
            <span class="menu-item-label">Timeline</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="calendar" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-calendar-outline tx-24"></i>
            <span class="menu-item-label">Calendar</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="message" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-email-outline tx-24"></i>
            <span class="menu-item-label">Messages</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="notice" class="br-menu-link">
            <i class="menu-item-icon icon ion-radio-waves tx-24"></i>
            <span class="menu-item-label">Notices</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-gear tx-20"></i>
            <span class="menu-item-label">Projects</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item">
              <a href="{{route('project.index')}}" class="sub-link">
                Projects List
              </a>
            </li>
            <li class="sub-item">
              <a href="{{route('project.create')}}" class="sub-link">
                New Project
              </a>
            </li>
          </ul>
        </li>
        <li class="br-menu-item">
          <a href="time-sheet" class="br-menu-link">
            <i class="menu-item-icon icon ion-android-alarm-clock tx-20"></i>
            <span class="menu-item-label">Works Times</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="reports" class="br-menu-link">
            <i class="menu-item-icon icon ion-stats-bars tx-20"></i>
            <span class="menu-item-label">Reports</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="notes" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-paper-outline tx-20"></i>
            <span class="menu-item-label">Notes (Private)</span>
          </a>
        </li>
        <li class="br-menu-item">
          <a href="todo-list" class="br-menu-link">
            <i class="menu-item-icon icon ion-android-checkbox-outline tx-20"></i>
            <span class="menu-item-label">Todo List (Private)</span>
          </a>
        </li>
        

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
            <span class="menu-item-label">Users</span>
          </a>
          <ul class="br-menu-sub">
            <li class="sub-item">
              <a href="{{route('users.unit.index')}}" class="sub-link">
                Unit
              </a>
            </li>
            <li class="sub-item">
              <a href="{{route('users.group.index')}}" class="sub-link">
                Group
              </a>
            </li>
            <li class="sub-item">
              <a href="{{ route("users.index") }}" class="sub-link">
                Users
              </a>
            </li>
          </ul>
        </li>


      </ul>
      <br>
    </div>
