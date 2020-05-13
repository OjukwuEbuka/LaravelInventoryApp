<!-- Site Header -->
<header>

    <!-- Nav Bar -->
    <div class="navbar-fixed">
        <nav style="background-color: {{ $school->themeColor }}">
            <div class="nav-wrapper">
                <!-- Nav Bar Logo -->
                <a href="/schools/{{ $school->id }}" class="">
                <img src="/storage/images/photo/school/{{$school->logo}}" id="schoolBadge" alt="logoImage" class="responsive-img circle" width="55px" height="55px" />
                </a>
                <a href="/schools/{{ $school->id }}" style="padding-left:60px" id="schoolName" class="brand-logo hide-on-med-and-down">{{ $school->name }}</a>

                <!-- Side nav Trigger -->
                <a data-target="mobile-demo" href="#" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <!-- Items on the nav bar -->
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="/schools/{{$school->id}}">Home</a>
                    </li>

                    <!-- <li>
                        <a href="/about">About Us</a>
                    </li>

                    <li>
                        <a href="/contact">Contact Us</a>
                    </li> -->
                </ul>

            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <ul class="sidenav" id="mobile-demo">
        <li>
            <a href="/schools/{{$school->id}}">Home</a>
        </li>

        <!-- <li>
            <a href="/about">About Us</a>
        </li>

        <li>
            <a href="/contact">Contact Us</a>
        </li> -->
    </ul>

    <div id="schoolInfo" class="colCode white-text lighten-5">
        <div style='float:left;'>
            <button id="menuSideBtn" class="btn colCode">MENU</button>
        </div>
        <span id="schoolCurrentTerm" data-id="{{$school->current_term_id}}">{{$school->Term($school->current_term_id)}},</span>
        <span id="schoolCurrentSession" data-id="{{$school->academic_session_id}}">{{$school->AcademicSession->sessionName}} Session</span>
    </div>

</header>

<ul id="menuSide" class="sidenav {{ $school->themeColor ?: 'blue' }}  lighten-4">
    {{--<li class="center" style="color: {{ $school->themeColor ?: 'blue' }}"><h6>MENU</h6></li>--}}
        
    <li class="no-padding">
    <ul class="collapsible collapsible-accordion ">
        <li class="{{ $school->themeColor ?: 'blue' }} lighten-4">
        <a class="collapsible-header ">Inventory Manager</a>
        <div class="collapsible-body">
            <ul>
            <li><a href="/{{$school->id}}/inventory/categories" >Manage Categories</a></li>
            <li><a href="/{{ $school->id }}/inventory/create" >Create New Item</a></li>
            <li><a href="/{{$school->id}}/inventory/sale" >Make A Sale</a></li>
            <li><a href="#" >Restock Item*</a></li>
            <li><a href="/{{$school->id}}/inventory/reports/index" >View Reports</a></li>
            </ul>
        </div>
        </li>
    </ul>
    </li>
    


</ul>
