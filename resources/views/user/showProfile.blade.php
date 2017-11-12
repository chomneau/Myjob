<div class="well bs-component">
    {{--<form class="form-horizontal" action="home/profile" method="post">--}}

    {!! Form::open( ['action' => 'ProfileController@store', 'class'=>'form-horizontal']) !!}
    <fieldset>
        <legend>MY PROFILE</legend>
        <div class="container">
            <div class="row">
              {{--Left side--}}
                <div class="col-lg-4 col-sm-12">
                    <div class="panel-body" >
                        <ul id="item-list" style="padding-left: 5px; ">
                        {{--@if($user->count()>0)--}}
                            {{--@foreach($user as $users)--}}
                                    <li><a href="#" class="text-capitalize" style="font-size:20px "><i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }}</a></li>
                                    <li>
                                        <a href="#">
                                            {{--Sex : {{ $users->profile->first_name }}--}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">

                                            {{--Age : {{$user->name}}--}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">

                                            Email :
                                        </a>
                                    </li>
                                {{--@endforeach--}}
                            {{--@endif--}}
                        </ul>
                    </div>

                </div>
            {{--Right side--}}
                <div class="col-lg-4 col-sm-12">
                    <div class="panel-body" >
                        <ul id="item-list" style="padding-left: 5px; ">
                            <li><a href="#" class="text-capitalize" style="font-size:20px ">Contact</a></li>
                            <li>
                                <a href="{{route('user.profile')}}">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                    :
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    menchomneau@gmail.com
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.create') }}">
                                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                                    #54, St. 43, Phnom Penh, Cambodia
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </fieldset>

</div>



@component('components.who')
@endcomponent


