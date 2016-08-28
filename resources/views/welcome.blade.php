@extends('admin.template.main')

@section('title', 'Home')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h1>Hola esto es bootstrap</h1>

            <a href="" class="btn btn-success"> soy un boton</a>
        </div>

        <div class="col-md-6">
        <h1>Explicacion</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>


    </div>
@endsection

@section('biography')

    <div id="our_team" class="container">
            <div class="row team">
                <div class="col-md-3">
                    <img src="{{asset('img/team1.jpg')}}" class="img-responsive" alt="CEO">
                    <h4>RUTH WOODS</h4>
                    <h6 class="text-danger">FOUNDER CEO</h6>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <i class="fa fa-facebook fa-2x social"></i>
                    <i class="fa fa-twitter fa-2x social"></i>
                    <i class="fa fa-linkedin-square fa-2x social"></i>
                </div>

                <div class="col-md-3">
                    <img src="{{asset('img/team2.jpg')}}" class="img-responsive" alt="CEO">
                    <h4>RUTH WOODS</h4>
                    <h6 class="text-danger">CO-FOUNDER DEVELOPER</h6>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <i class="fa fa-facebook fa-2x social"></i>
                    <i class="fa fa-twitter fa-2x social"></i>
                    <i class="fa fa-linkedin-square fa-2x social"></i>
                </div>

                <div class="col-md-3">
                    <img src="{{asset('img/team3.jpg')}}" class="img-responsive" alt="CEO">
                    <h4>RUTH WOODS</h4>
                    <h6 class="text-danger">UI DESIGNER</h6>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <i class="fa fa-facebook fa-2x social"></i>
                    <i class="fa fa-twitter fa-2x social"></i>
                    <i class="fa fa-linkedin-square fa-2x social"></i>
                </div>

                <div class="col-md-3">
                    <img src="{{asset('img/team4.jpg')}}" class="img-responsive" alt="CEO">
                    <h4>RUTH WOODS</h4>
                    <h6 class="text-danger">DATA SCIENTS</h6>
                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <i class="fa fa-facebook fa-2x social"></i>
                    <i class="fa fa-twitter fa-2x social"></i>
                    <i class="fa fa-linkedin-square fa-2x social"></i>
                </div>

            </div>
        </div>

@endsection