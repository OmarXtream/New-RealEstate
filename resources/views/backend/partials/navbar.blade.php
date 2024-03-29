<nav class="navbar">
    <div class="container-fluid">

        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">روشم</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">


                <!-- Notifications -->
                <li class="dropdown">
                    <ul class="dropdown-menu">
                        <li class="header">الرسائل</li>
                        <li class="body">
                            <ul class="menu">
                                @foreach($navbarmessages as $message)
                                <li>
                                    <a href="{{route('admin.message.read',$message->id)}}">
                                        <div class="icon-circle bg-light-green">
                                            <i class="material-icons">message</i>
                                        </div>
                                        <div class="menu-info">
                                            <h4>{{ str_limit($message->message,30) }}</h4>
                                            <p>
                                                <i class="material-icons">access_time</i>
                                                {{ $message->created_at->diffForHumans() }}
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="{{ route('admin.message') }}">مشاهدة جميع الرسائل</a>
                        </li>
                    </ul>
                </li>
                <!-- #END# Notifications -->
                

                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        {{-- <img src="{{Storage::url('users/'.auth()->user()->image)}}" alt="{{ auth()->user()->name }}" width="24" height="24"> --}}
                        <span class="label uppercase">{{ strtok(Auth::user()->name, " ") }}</span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="{{route('admin.profile')}}"><i class="material-icons">person</i>الملف الشخصي</a>
                        </li>

                        <li role="seperator" class="divider"></li>
                        <li>
                            <a href="{{ route('admin.message') }}"><i class="material-icons">message</i>الرسائل</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.changepassword') }}"><i class="material-icons">lock</i>كلمة المرور</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}" target="_blank"><i class="material-icons">home</i>زيارة الموقع</a>
                        </li>
                        <li role="seperator" class="divider"></li>

                        <li>
                            <a class="dropdownitem" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="material-icons">input</i> تسجيل الخروج
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>