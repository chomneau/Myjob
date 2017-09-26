                            <div class="well bs-component">
                                <form class="form-horizontal">
                                    <fieldset>
                                        <legend>EDIT PROFILE</legend>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="inputFirstname" class="col-lg-6 text-left">First Name*</label>
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" name="firstName" id="inputEmail" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputLastname" class="col-lg-6 text-left">Last Name*</label>
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" name="lastName" id="inputLastname" placeholder="Last Name">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPhone" class="col-lg-6 text-left">Phone*</label>
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" name="phone" id="inputLastname" placeholder="Phone number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="inputEmail" class="col-lg-6 text-left">Email*</label>
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputDateBirth" class="col-lg-6 text-left">Date Of Birth*</label>
                                                <div class="col-lg-12">
                                                    <input type="DATE" class="form-control" name="dateOfBirth" id="inputDateBirth" placeholder="Date Of Birth">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputEducation" class="col-lg-6 text-left">Last Education*</label>
                                                <div class="col-lg-12">
                                                    <input type="text" class="form-control" name="Education" id="inputEducation" placeholder="Last Education">
                                                </div>
                                            </div>
                                        </div>

                                        <label for="inputAddress" class="col-lg-6 text-left">Address*</label>
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" name="dateOfBirth" id="inputDateBirth" placeholder="Address">
                                        </div>
                                    {{--Text area--}}
                                        <div style="margin-top: 40px">
                                            <label for="textArea" class="col-lg-6 text-left">About Yourself</label>
                                        </div>

                                            <div class="col-lg-12 ">
                                                <textarea class="form-control" rows="3" id="textArea"></textarea>
                                                <span class="help-block">Describe about yourself</span>
                                            </div>


                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <button type="submit" class="btn btn-primary pull-right">Save</button>
                                            </div>
                                        </div>



                                    </fieldset>
                                </form>
                            </div>



                        @component('components.who')
                        @endcomponent


