<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Yam<span>Yam</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">  
        <ul class="nav">  
            <li class="nav-item nav-category">Main</li>  
            <li class="nav-item">  
                <a href="{{ route('admin.dashboard') }}" class="nav-link">  
                    <i class="link-icon" data-feather="box"></i>  
                    <span class="link-title">Dashboard</span>  
                </a>  
            </li>  
  
            <li class="nav-item nav-category">RealEstate</li>  
  
            <li class="nav-item">  
                <a class="nav-link" data-bs-toggle="collapse" href="#propertyType" role="button" aria-expanded="false"  
                    aria-controls="propertyType">  
                    <i class="link-icon" data-feather="home"></i>  
                    <span class="link-title">Property Type</span>  
                    <i class="link-arrow" data-feather="chevron-down"></i>  
                </a>  
                <div class="collapse" id="propertyType">  
                    <ul class="nav sub-menu">  
                        <li class="nav-item">  
                            <a href="{{ route('all.type') }}" class="nav-link">All Type</a>  
                        </li>  
                        <li class="nav-item">  
                            <a href="{{ route('add.type') }}" class="nav-link">Add Type</a>  
                        </li>  
                    </ul>  
                </div>  
            </li>  
  
            <li class="nav-item nav-category">Amenities</li>  
            <li class="nav-item">  
                <a class="nav-link" data-bs-toggle="collapse" href="#amenities" role="button" aria-expanded="false"  
                    aria-controls="amenities">  
                    <i class="link-icon" data-feather="layers"></i>  
                    <span class="link-title">Amenitie Type</span>  
                    <i class="link-arrow" data-feather="chevron-down"></i>  
                </a>  
                <div class="collapse" id="amenities">  
                    <ul class="nav sub-menu">  
                        <li class="nav-item">  
                            <a href="{{ route('all.amenitie') }}" class="nav-link">All Amenitie</a>  
                        </li>  
                        <li class="nav-item">  
                            <a href="{{ route('add.amenities') }}" class="nav-link">Add Amenitie</a>  
                        </li>  
                    </ul>  
                </div>  
            </li>  
  
  
      
        <li class="nav-item">
          <a href="pages/apps/calendar.html" class="nav-link">
            <i class="link-icon" data-feather="calendar"></i>
            <span class="link-title">Calendar</span>
          </a>
        </li>
        <li class="nav-item nav-category">Components</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="feather"></i>
            <span class="link-title">UI Kit</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="uiComponents">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="pages/ui-components/accordion.html" class="nav-link">Accordion</a>
              </li>
              <li class="nav-item">
                <a href="pages/ui-components/alerts.html" class="nav-link">Alerts</a>
              </li>
           
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Role & Permission</li>

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
            <i class="link-icon" data-feather="anchor"></i>
            <span class="link-title">Role & Permission</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="advancedUI">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="{{route('all.permission')}}" class="nav-link">All Permission</a>
              </li>
              
            </ul>
          </div>
        </li>


    
        <li class="nav-item nav-category">Docs</li>
        <li class="nav-item">
            <i class="link-icon" data-feather="hash"></i>
            <span class="link-title">Documentation</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
