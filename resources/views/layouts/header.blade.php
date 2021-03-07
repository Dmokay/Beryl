<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">

                    <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('contact')}}">Contact</a>
                            </li>
                        </ul>

                        <div id="search-wrapper">
                            <form action="index.html#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>


