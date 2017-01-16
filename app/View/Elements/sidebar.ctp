             <?php
            $dash = $this->Html->url(
                    array(
                        'controller' => 'dashboards',
                        'action' => 'index',
                        'full_base' => true
                    )
            );
            $comp = $this->Html->url(
                    array(
                        'controller' => 'computers',
                        'action' => 'index',
                        'full_base' => true
                    )
                    );
			$client = $this->Html->url(
					array (
						'controller' => 'clients',
						'action' => 'index',
						'full_base' => true,
						)
					);
            ?>
 
 <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title logo" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-desktop"></i> <span>EPIC</a></span></a>
            </div>

            <div class="clearfix"></div>

    <br><br></br></br>




<?php
$active = $this->params['controller'];
?>


<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
				 <li <?php if ($active === 'dashboards') {
                echo "class='active'";
            } ?>><a href="<?php echo $dash; ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
			<li <?php if ($active === 'computers') {
                echo "class='active'";
            } ?>><a href="<?php echo $comp; ?>"><i class="fa fa-desktop"></i> Computers </a></li>
			<li <?php if ($active === 'clients') {
                echo "class='active'";
            } ?>><a href="<?php echo $client; ?>"><i class="fa fa-user"></i> Clients</a></li>
			<li class='dropdown'><a href="#"><i class="fa fa-object-group"></i> Groups <span class="fa fa-chevron-down"></span></a>
						<?php
						  $navList = $this->requestAction(
							'groups/getNav'
						  );
						  
						?>
 					
						<ul class="nav child_menu">
						<?php foreach ($navList as $group): ?>
							  <li><?php echo $this->Html->link($group['Group']['Name'], array('controller' => 'Groups', 'action' => 'viewGroup', $group['Group']['GroupID'])); ?>
							  
							  
							  </li>
						<?php endforeach; ?>
						</ul>
			
			</li>
			
			<li><a href="#"><i class="fa fa-file-code-o"></i> Scripts</a></li>
			<li><a href="#"><i class="fa fa-file-text-o"></i> Reporting</a></li>
                  <li class='dropdown'><a><i class="fa fa-lock"></i> Admin <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <li><a href="index.html">User Management</a></li>
                      <li><a href="index2.html">Templates</a></li>
                      <li><a href="index3.html">Schedule</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Stuff</h3>
                <ul class="nav side-menu">
                  <li class="dropdown"><a><i class="fa fa-bug"></i> Bug Report<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">EDF's</a></li>
                      <li><a href="#">Dashboard</a></li>
                      <li><a href="#">Other?</a></li>>
                    </ul>
                  </li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->
			
			            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="fa fa-gear" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="fa fa-desktop" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="fa fa-lock" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="fa fa-power-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
<!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $this->Session->read('Username'); ?><small>- <?php echo $this->Session->read('Email'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><?php echo $this->Html->link("Edit Profile",
                            array('controller' => 'Users', 'action' => 'profile',
                        $_SESSION['Userid'])); ?></li>
                    <li><i class="fa fa-sign-out pull-right"></i><?php echo $this->Html->link("Logout",
                            array('controller' => 'Users', 'action' => 'logout')); ?></li>
                  </ul>
                </li>
                   
                  
                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<?php 

?>
