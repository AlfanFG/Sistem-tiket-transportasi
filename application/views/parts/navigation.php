                        <div class="sidebar-user-info">

                <div class="sui-normal">
                    <a href="#" class="user-link">
                        <img src="<?php echo base_url() ?>assets/images/thumb-1@2x.png" width="55" alt="" class="img-circle" />

                        <span>Welcome,</span>
                        <strong><?php echo $user; ?></strong>
                    </a>
                </div>

                <div class="sui-hover inline-links animate-in"><!-- You can remove "inline-links" class to make links appear vertically, class "animate-in" will make A elements animateable when click on user profile -->
                    <a href="#">
                        <i class="entypo-pencil"></i>
                        New Page
                    </a>

                    <a href="mailbox.html">
                        <i class="entypo-mail"></i>
                        Inbox
                    </a>

                    <a href="extra-lockscreen.html">
                        <i class="entypo-lock"></i>
                        Log Off
                    </a>

                    <span class="close-sui-popup">&times;</span><!-- this is mandatory -->              </div>
            </div>
          
                                    
            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                <li class="opened active">
                    <?php echo anchor('Home','<i class="entypo-gauge"></i>
                        <span class="title">Home</span>')  ?>
                 </li>   
                <li class="has-sub" disabled="disabled">
                    <a href="#">
                        <i class="entypo-list"></i>
                        <span class="title">Data</span>
                    </a>
                    <ul>
                       
                        <li>
                            <?php echo anchor('User','<span class="title">User</span>')  ?>
                                
                            
                        </li>

                        <li>
                            <?php echo anchor('Customer','<span class="title">Customer</span>')  ?>
                        </li>

                        <li>
                            <?php echo anchor('Transportation','<span class="title">Transportation</span>')  ?>
                        </li>

                        <li>
                            <?php echo anchor('Transp_type','<span class="title">Transportation type</span>')  ?>
                        </li>

                        
                        <li class="has-sub">
                            <a href="layout-page-transition-fade.html">
                                <span class="title">Rute</span>
                            </a>
                            <ul>
                                <li>
                                    <?php echo anchor('Rute_Pesawat','<span class="title">Rute Pesawat</span>')  ?>
                                </li>

                                <li>
                                    <?php echo anchor('Rute','<span class="title">Rute Kereta</span>')  ?>
                                </li>
                            </ul>
                        </li>
                        <li>

                            <?php echo anchor('Stasiun','<span class="title">Stasiun</span>')  ?>
                        </li>

                        <li>
                            <?php echo anchor('Bandara','<span class="title">Bandara</span>')  ?>
                        </li>

                        
                    </ul>
                </li>
                <li class="has-sub">
                    <a href="index.html" target="_blank">
                        <i class="glyphicon glyphicon-usd""></i>
                        <span class="title">Transaksi</span>
                    </a>

                    <ul>
                         <li>
                            <?php echo anchor('Reservation','<span class="title">Pemesanan Tiket</span>')  ?>
                        </li>

                       
                    </ul>

                </li>
                <li class="has-sub">
                    <a href="ui-panels.html">
                        <i class="entypo-print"></i>
                        <span class="title">Report</span>
                    </a>
                    <ul>
                         <li>
                            <?php echo anchor('Report','<span class="title">Data Master</span>')  ?>
                        </li>

                        <li>
                            <?php echo anchor('Report/jadwal','<span class="title">Jadwal Keberangkatan</span>')  ?>
                       

                        <li>
                            <?php echo anchor('Report/jadwal_P','<span class="title">Jadwal Keberangkatan Pesawat</span>')  ?>
                        </li>

                        <li>
                            <?php echo anchor('Report/pendapatan','<span class="title">Pendapatan</span>')  ?>
                        </li>


                       
                    </ul>
                </li>
                
                      
                    </ul>
                
            
        </div>

    </div>



    <div class="main-content">
                
        <div class="row">
        
            <!-- Profile Info and Notifications -->
            <div class="col-md-6 col-sm-8 clearfix">
        
                <ul class="user-info pull-left pull-none-xsm">
        
                    
                <ul class="user-info pull-left pull-right-xs pull-none-xsm">
        
                    <!-- Raw Notifications -->
                    <li class="notifications dropdown">
        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-attention"></i>
                            <span class="badge badge-info">6</span>
                        </a>
        
                        <ul class="dropdown-menu">
                            <li class="top">
                                <p class="small">
                                    <a href="#" class="pull-right">Mark all Read</a>
                                    You have <strong>3</strong> new notifications.
                                </p>
                            </li>
                            
                            <li>
                                <ul class="dropdown-menu-list scroller">
                                    <li class="unread notification-success">
                                        <a href="#">
                                            <i class="entypo-user-add pull-right"></i>
                                            
                                            <span class="line">
                                                <strong>New user registered</strong>
                                            </span>
                                            
                                            <span class="line small">
                                                30 seconds ago
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="unread notification-secondary">
                                        <a href="#">
                                            <i class="entypo-heart pull-right"></i>
                                            
                                            <span class="line">
                                                <strong>Someone special liked this</strong>
                                            </span>
                                            
                                            <span class="line small">
                                                2 minutes ago
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="notification-primary">
                                        <a href="#">
                                            <i class="entypo-user pull-right"></i>
                                            
                                            <span class="line">
                                                <strong>Privacy settings have been changed</strong>
                                            </span>
                                            
                                            <span class="line small">
                                                3 hours ago
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="notification-danger">
                                        <a href="#">
                                            <i class="entypo-cancel-circled pull-right"></i>
                                            
                                            <span class="line">
                                                John cancelled the event
                                            </span>
                                            
                                            <span class="line small">
                                                9 hours ago
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="notification-info">
                                        <a href="#">
                                            <i class="entypo-info pull-right"></i>
                                            
                                            <span class="line">
                                                The server is status is stable
                                            </span>
                                            
                                            <span class="line small">
                                                yesterday at 10:30am
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="notification-warning">
                                        <a href="#">
                                            <i class="entypo-rss pull-right"></i>
                                            
                                            <span class="line">
                                                New comments waiting approval
                                            </span>
                                            
                                            <span class="line small">
                                                last week
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="external">
                                <a href="#">View all notifications</a>
                            </li>
                        </ul>
        
                    </li>
        
                    <!-- Message Notifications -->
                    <li class="notifications dropdown">
        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-mail"></i>
                            <span class="badge badge-secondary">10</span>
                        </a>
        
                        <ul class="dropdown-menu">
                            <li>
                                <form class="top-dropdown-search">
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search anything..." name="s" />
                                    </div>
                                    
                                </form>
                                
                                <ul class="dropdown-menu-list scroller">
                                    <li class="active">
                                        <a href="#">
                                            <span class="image pull-right">
                                                <img src="assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" />
                                            </span>
                                            
                                            <span class="line">
                                                <strong>Luc Chartier</strong>
                                                - yesterday
                                            </span>
                                            
                                            <span class="line desc small">
                                                This ain’t our first item, it is the best of the rest.
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li class="active">
                                        <a href="#">
                                            <span class="image pull-right">
                                                <img src="assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" />
                                            </span>
                                            
                                            <span class="line">
                                                <strong>Salma Nyberg</strong>
                                                - 2 days ago
                                            </span>
                                            
                                            <span class="line desc small">
                                                Oh he decisively impression attachment friendship so if everything. 
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">
                                            <span class="image pull-right">
                                                <img src="assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />
                                            </span>
                                            
                                            <span class="line">
                                                Hayden Cartwright
                                                - a week ago
                                            </span>
                                            
                                            <span class="line desc small">
                                                Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
                                            </span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#">
                                            <span class="image pull-right">
                                                <img src="assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" />
                                            </span>
                                            
                                            <span class="line">
                                                Sandra Eberhardt
                                                - 16 days ago
                                            </span>
                                            
                                            <span class="line desc small">
                                                On so attention necessary at by provision otherwise existence direction.
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="external">
                                <a href="mailbox.html">All Messages</a>
                            </li>
                        </ul>
        
                    </li>
        
                    <!-- Task Notifications -->
                    <li class="notifications dropdown">
        
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="entypo-list"></i>
                            <span class="badge badge-warning">1</span>
                        </a>
        
                        <ul class="dropdown-menu">
                            <li class="top">
                                <p>You have 6 pending tasks</p>
                            </li>
                            
                            <li>
                                <ul class="dropdown-menu-list scroller">
                                    <li>
                                        <a href="#">
                                            <span class="task">
                                                <span class="desc">Procurement</span>
                                                <span class="percent">27%</span>
                                            </span>
                                        
                                            <span class="progress">
                                                <span style="width: 27%;" class="progress-bar progress-bar-success">
                                                    <span class="sr-only">27% Complete</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="task">
                                                <span class="desc">App Development</span>
                                                <span class="percent">83%</span>
                                            </span>
                                            
                                            <span class="progress progress-striped">
                                                <span style="width: 83%;" class="progress-bar progress-bar-danger">
                                                    <span class="sr-only">83% Complete</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="task">
                                                <span class="desc">HTML Slicing</span>
                                                <span class="percent">91%</span>
                                            </span>
                                            
                                            <span class="progress">
                                                <span style="width: 91%;" class="progress-bar progress-bar-success">
                                                    <span class="sr-only">91% Complete</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="task">
                                                <span class="desc">Database Repair</span>
                                                <span class="percent">12%</span>
                                            </span>
                                            
                                            <span class="progress progress-striped">
                                                <span style="width: 12%;" class="progress-bar progress-bar-warning">
                                                    <span class="sr-only">12% Complete</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="task">
                                                <span class="desc">Backup Create Progress</span>
                                                <span class="percent">54%</span>
                                            </span>
                                            
                                            <span class="progress progress-striped">
                                                <span style="width: 54%;" class="progress-bar progress-bar-info">
                                                    <span class="sr-only">54% Complete</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="task">
                                                <span class="desc">Upgrade Progress</span>
                                                <span class="percent">17%</span>
                                            </span>
                                            
                                            <span class="progress progress-striped">
                                                <span style="width: 17%;" class="progress-bar progress-bar-important">
                                                    <span class="sr-only">17% Complete</span>
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class="external">
                                <a href="#">See all tasks</a>
                            </li>
                        </ul>
        
                    </li>
        
                </ul>
        
            </div>
        
        
            <!-- Raw Links -->
            <div class="col-md-6 col-sm-4 clearfix hidden-xs">
        
                <ul class="list-inline links-list pull-right">
        
                    <!-- Language Selector -->
                    <li class="dropdown language-selector">
        
                        Language: &nbsp;
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
                            <img src="assets/images/flags/flag-uk.png" width="16" height="16" />
                        </a>
        
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/flag-de.png" width="16" height="16" />
                                    <span>Deutsch</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">
                                    <img src="assets/images/flags/flag-uk.png" width="16" height="16" />
                                    <span>English</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/flag-fr.png" width="16" height="16" />
                                    <span>François</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/flag-al.png" width="16" height="16" />
                                    <span>Shqip</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/flag-es.png" width="16" height="16" />
                                    <span>Español</span>
                                </a>
                            </li>
                        </ul>
        
                    </li>
        
                    <li class="sep"></li>
        
                    
                    <li>
                        <a href="#" data-toggle="chat" data-collapse-sidebar="1">
                            <i class="entypo-chat"></i>
                            Chat
        
                            <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
                        </a>
                    </li>
        
                    <li class="sep"></li>
        
                    <li>
                        <?php echo anchor('Login/logout','Log Out <i class="entypo-logout right"></i>') ?>
                    </li>
                </ul>
        
            </div>
        
        </div>
        
        <hr />