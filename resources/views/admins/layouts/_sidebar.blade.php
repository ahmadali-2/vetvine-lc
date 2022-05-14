<ul class="nav navbar-nav">

    <li class="active">

        <a href="{{route('admindashboard')}}"> <i class="menu-icon fa fa-table"></i>Dashboard </a>

    </li>

<!--     <li class="menu-item-has-children dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>

        <ul class="sub-menu children dropdown-menu">

            <li><i class="fa fa-table"></i><a href="{{route('sampleform')}}">Sample Form</a></li>

            <li><i class="fa fa-table"></i><a href="{{route('sampletable')}}">Sample Table</a></li>

        </ul>

    </li> -->

    <li class="menu-item-has-children dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Ads</a>

        <ul class="sub-menu children dropdown-menu">

            <li><i class="fa fa-table"></i><a href="{{route('ads-campaign.index')}}">Manage Ads Campaigns</a></li>

            <li><i class="fa fa-table"></i><a href="{{route('ads-manage.index')}}">Manage Advertisement</a></li>

        </ul>

    </li>

    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                class="menu-icon fa fa-table"></i>Webinars</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-table"></i><a href="{{ route('webinars-category.index') }}">Add Category</a></li>
            <li><i class="fa fa-table"></i><a href="{{ route('webinars.index') }}">Post New Listing</a></li>
        </ul>
    </li>

    <li class="menu-item-has-children dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Forums</a>

        <ul class="sub-menu children dropdown-menu">

            <li><i class="fa fa-table"></i><a href="{{ route('forums.index') }}">Manage Forums</a></li>

        </ul>

    </li>
    <li class="menu-item-has-children dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Manage</a>
        <ul class="sub-menu children dropdown-menu">
            <li><i class="fa fa-table"></i><a href="{{route('announcements.index')}}">Announcement</a></li>
            <li><i class="fa fa-table"></i><a href="{{route('news.index')}}">News</a></li>
        </ul>
    </li>
    <li class="menu-item-has-children dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>

        <ul class="sub-menu children dropdown-menu">

            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>

            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>

            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>

        </ul>

    </li>

    <li class="menu-item-has-children dropdown">

        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Settings</a>

        <ul class="sub-menu children dropdown-menu">

            <li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('generalsetting')}}">General Settings</a></li>

        </ul>

    </li>

<li class="menu-item-has-children dropdown">

<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>MemberShip Plans</a>

<ul class="sub-menu children dropdown-menu">

<li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('membership-category.index')}}">Plan Category</a></li>

<li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('membership.index')}}">Plans</a></li>
<li><i class="menu-icon fa fa-sign-in"></i><a href="{{route('subscribed-users.index')}}">Subscribed Users</a></li>




</ul>

</li>

<li>

<a href="{{route('manageuser.index')}}"> <i class="menu-icon fa fa-user"></i>Manage Users </a>

</li>



</ul>

