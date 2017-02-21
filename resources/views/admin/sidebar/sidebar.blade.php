 <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="{!!url('/dashboard')!!}">
                          <i class="icon_house_alt" style="color: #E75A3A;"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt" style="color: white;"></i>
                          <span>Registrations</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{!!url('/dashboard/stdn_form')!!}"><span class="label label-primary"><i class="icon_group "></i></span> Student Reg</a>
                          </li>                          
                          <li><a class="" href="{!!url('/dashboard/under_constraction')!!}"><span class="label label-primary">  <i class="icon_profile" ></i> </span>Teacher Reg</a></li>
                      </ul>
                  </li> 

                  <li>
                      <a class="" href="{!!url('/dashboard/stdn_show')!!}">
                          <i class="icon_desktop" style="color: #FF00FF;"></i>
                          <span>View Students</span>
                      </a>
                  </li> 
                  <li>
                      <a class="" href="{!!url('/dashboard/alert')!!}">
                          <i class="icon_error-triangle" style="color: yellow;"></i>
                          <span>Student Alert</span>
                      </a>
                  </li>     
                  
                  
                  <li>                     
                      <a class="" href="{!!url('/dashboard/under_constraction')!!}">
                          <i class="icon_piechart" style="color: #1287DF"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li>


                             
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table" style="color: #FED189"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="{!!url('/dashboard/alert')!!}">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_tools" style="color: #01FCC7"></i>
                          <span>Admin Options</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="{!!url('/dashboard/under_constraction')!!}" style="color: yellow;">Profile</a></li>
                          <li><a class="" href="{!!url('/dashboard/under_constraction')!!}" style="color: yellow;"><span>Login Page</span></a></li>
                          <li><a class="" href="{!!url('/dashboard/under_constraction')!!}"style="color: yellow;"> Blank Page</a></li>
                          <li><a class="" href="{!!url('/dashboard/under_constraction')!!}" style="color: yellow;">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>