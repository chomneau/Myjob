
                            <div class="well bs-component">
                                {{--<form class="form-horizontal" action="home/profile" method="post">--}}

                                {{--{!! Form::open( ['action' => 'ProfileController@store', 'class'=>'form-horizontal']) !!}--}}
                                <div class="bootstrap-iso">
                                <form action="{{ route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <fieldset>
                                        <legend>EDIT PROFILE</legend>

                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label class="control-label" for="firstName">First Name</label>
                                                <input type="text" name="firstName" value="{{ Auth::user()->profile->first_name}}" class="form-control" id="inputDefault" placeholder="First Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="lastName">Last Name</label>
                                                <input type="text" name="lastName" value="{{ Auth::user()->profile->last_name}}" class="form-control" id="inputDefault" placeholder="Last Name">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label" for="inputDefault">Sex*</label>
                                                <select class="form-control" id="select" name="sex">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="text" class="form-control" value="{{ Auth::user()->email}}" name="email" id="inputEmail" placeholder="Enter your Email">
                                            </div>

                                        </div>
                                        {{--end right columm--}}

                                        <div class="col-md-6 col-sm-12" style="padding-left: 2em">
                                             <div class="form-group">

                                                 <label class="control-label" for="birthday">Date Of Birth*</label>
                                                 <div class="input-group">
                                                     <input class="form-control" id="datepicker" value="{{ Auth::user()->profile->date_of_birth}}" name="date_of_birth" placeholder="MM/DD/YYYY" type="text"/>
                                                     <div class="input-group-addon">
                                                         <i class="fa fa-calendar">
                                                         </i>
                                                     </div>
                                                 </div>
                                             </div>

                                            <div class="form-group">
                                                <label class="control-label" for="address">Phone*</label>
                                                <input type="number" class="form-control" value="{{ Auth::user()->profile->phone}}" name="phone" id="phone" placeholder="Enter phone number">
                                            </div>

                                            <div class="form-group">
                                                  <label class="control-label" for="phone">Address*</label>
                                                  <input type="TEXT" class="form-control" value="{{ Auth::user()->profile->address}}" name="address" id="address" placeholder="Enter address">
                                            </div>

                                            <div class="form-group">
                                                    <label class="control-label" for="location">City / Province*</label>
                                                    <div class="form-group">
                                                        <select class="form-control" id="select" name="location">
                                                            <option value="Banteay Meanchey">Banteay Meanchey</option>
                                                            <option value="Battambang">Battambang</option>
                                                            <option value="Kampong Cham">Kampong Cham</option>
                                                            <option value="Kampong Chhnang">Kampong Chhnang</option>
                                                            <option value="Kampong Speu">Kampong Speu</option>
                                                            <option value="Kampong Thom">Kampong Thom</option>
                                                            <option value="Kampot">Kampot</option>
                                                            <option value="Kandal">Kandal</option>
                                                            <option value="Kep">Kep</option>
                                                            <option value="Koh Kong">Koh Kong</option>
                                                            <option value="Kratié">Kratié</option>
                                                            <option value="Mondulkiri">Mondulkiri</option>
                                                            <option value="Oddar Meanchey">Oddar Meanchey</option>
                                                            <option value="Pailin">Pailin</option>
                                                            <option value="Phnom Penh" selected >Phnom Penh</option>
                                                            <option value="Preah Sihanouk">Preah Sihanouk</option>
                                                            <option value="Preah Vihear">Preah Vihear</option>
                                                            <option value="Pursat">Pursat</option>
                                                            <option value="Prey Veng">Prey Veng</option>
                                                            <option value="Ratanakiri">Ratanakiri</option>
                                                            <option value="Siem Reap">Siem Reap</option>
                                                            <option value="Stung Treng">Stung Treng</option>
                                                            <option value="Svay Rieng">Svay Rieng</option>
                                                            <option value="Takéo">Takéo</option>
                                                            <option value="Tboung Khmum">Tboung Khmum</option>

                                                        </select>
                                                    </div>

                                                </div>
                                            </div>

                                        <div class="form-group">
                                            <label for="name">Upload new photo</label>
                                            <input type="file" id="BSbtninfo" name="avatar" class="form-control">

                                            <script>
                                                $('#BSbtninfo').filestyle({
                                                    buttonName : 'btn-info',
                                                    buttonText : ' Select a File'
                                                });
                                            </script>
                                        </div>


                                        <div style="margin-top: 40px">
                                            <label for="textArea" class="col-lg-6 text-left">About me</label>

                                        </div>

                                            <div class="col-lg-12 ">
                                                <textarea class="form-control" rows="5" name="bio" id="textArea" required autofocus>{{ Auth::user()->profile->bio}}</textarea>
                                                {{--{{Form::bsTextArea('about me','',['placeholder' => 'About the Company'])}}--}}
                                                <span class="help-block">Describe about yourself</span>
                                            </div>

                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-1">


                                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                                                {{--{{Form::bsSubmit('submit', ['class'=>'btn btn-primary pull-right'])}}--}}
                                            </div>
                                        </div>

                                    </fieldset>

                                </form>
                             </div>
                                {{--end of bootstrap-iso--}}
                            </div>


                            @section('styles')
                                <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
                            @endsection

                            @section('scripts')
                                <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        $('#textArea').summernote();
                                    });
                                </script>






