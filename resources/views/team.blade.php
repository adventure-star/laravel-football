@extends('layouts.app')

@section('content')

<!-- Page Banner Area Start -->
<div id="page-banner-area" class="page-banner-area section">
    <div class="container">
        <div class="row">
            <div class="page-banner-title text-center col-xs-12">
                <h2>team</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Banner Area End -->

<!-- Staff Area Start -->
<div id="staff-area" class="staff-area section pb-90 pt-120">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <!-- Staff Tab List -->
                <ul class="staff-tab-list nav nav-tabs text-center" role="tablist">
                    <li class="active"><a href="#managers" data-toggle="tab">Managers</a></li>
                    <li><a href="#first-team" data-toggle="tab">First Team</a></li>
                    <li><a href="#academy" data-toggle="tab">academy</a></li>
                </ul>
            </div>
            <!-- Staff Tab panes -->
            <div class="tab-content">
                <!-- Manager Tab -->
                <div role="tabpanel" class="tab-pane active" id="managers">
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/manager/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Juan Graham</a></h4>
                                <p>Coach</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/manager/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Donald Collins</a></h4>
                                <p>Coach</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/manager/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Ronald Gray</a></h4>
                                <p>Coach</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/manager/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">William Mendez</a></h4>
                                <p>Coach</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- First Team Tab -->
                <div role="tabpanel" class="tab-pane" id="first-team">
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Jeffrey Moore</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Bryan Parker</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Juan Wood</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Ethan Barrett</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Peter Day</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Tyler Evans</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Willie Henry</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Terry Barnes</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Roger Garza</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Carl Perez</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">David Davis</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Peter Castro</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Jordan Diaz</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Dylan George</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Mark Riley</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/player/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Paul Hall</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                </div>
                <!-- Academy Tab -->
                <div role="tabpanel" class="tab-pane" id="academy">
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Carl Hill</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">John Ward</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">David Bates</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Carl Stanley</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Randy Bates</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">James Turner</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Roger Brooks</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Billy Weber</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Albert Green</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Terry Gray</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Kyle Ruiz</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Kevin Miller</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/1.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Roy Curtis</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Jose Bailey</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Scott Russell</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                    <!-- Single Stuff -->
                    <div class="staff-item col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-30">
                        <div class="image"><img src="{{asset('img/staff/academy/4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="details">
                                <h4><a href="#">Willie Elliott</a></h4>
                                <p>Midfielder</p>
                            </div>
                            <h2 class="num">14</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Staff Area End -->

@include('layouts.breakingnews')

@endsection