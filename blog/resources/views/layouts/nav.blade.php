<div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('admin/assets/images/icon/logo.png')}}" alt="logo"></a>
                </div>
            </div>
			
                
					<nav>
    					<ul class="metismenu" id="menu">
        					<li class="{{ 'dashboard' == request()->path() ? 'active' : '' }}">
            					<a class="" href="/dashboard"><i class="fas fa-tachometer-alt"></i>
                                    <span>Dashboard</span>
            					</a>
        					</li>

                            <li class="{{ 'users' == request()->path() ? 'active' : '' }}">
                                <a class="" href="/users"><i class="fas fa-user"></i>
                                    <span>Users</span>
                                </a>
                            </li>

                            <li class="{{ 'categories' == request()->path() ? 'active' : '' }}">
                                <a class="" href="/categories"><i class="fas fa-tag"></i>
                                    <span>Categories</span>
                                </a>
                            </li>
                        
    					</ul>
					</nav>
				
            
</div>



