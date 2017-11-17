
    <div class="step1" style="margin-top: -20px">
            <div class="row">
                <div class="col-md-6 {{ $errors->has('companyName') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" name="companyName" class="form-control" value="{{ $company->companyName }}" required autofocus id="exampleInputEmail1" placeholder="company Name">
                </div>
                <div class="col-md-6 {{ $errors->has('logo') ? ' has-error' : '' }}">
                    <label for="logo">Company Logo</label>
                    <input type="file" name="logo" class="form-control" value="{{ $company->logo }}" placeholder="logo">
                </div>

            </div>
            <div class="row">
                <div class="col-md-6 {{ $errors->has('contactPerson') ? ' has-error' : '' }}">
                    <label for="contactPerson">Contact person</label>
                    <input type="text" name="contactPerson" class="form-control" value="{{ $company->contactPerson }}" required autofocus placeholder="Contact person">
                </div>

                <div class="col-md-6 {{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Type</label>
                    <select name="type" id="" class="form-control" required>
                        <option value="">--select company type--</option>
                        <option value="Private">Private limited</option>
                        <option value="Non-government Organization">Non-government Organization</option>
                        <option value="Government">Government</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 {{ $errors->has('industryType') ? ' has-error' : '' }}">
                    <label for="industryType">Industry type</label>
                    <select name="industryType" id="" class="form-control" required>
                        <option value="">--select job Category--</option>
                        <option value="IT/Software">IT/Software</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Telecommunication">Telecommunication</option>
                    </select>
                </div>
                <div class="col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{ $company->email }}" required autofocus placeholder="Email" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 {{ $errors->has('employeeSize') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Number of Employees</label>
                    <select name="employeeSize" id="" class="form-control" required>
                        <option value="">--select employee size--</option>
                        <option value="1-19">1-19 employees</option>
                        <option value="20-49">20-49 employees</option>
                        <option value="50-99">50-99 employees</option>
                        <option value="100-199">100-199 employees</option>
                        <option value="200-499">200-499 employees</option>
                        <option value="500-up">500-up employees</option>
                    </select>
                </div>

                <div class="col-md-6 {{ $errors->has('location') ? ' has-error' : '' }}">
                    <label for="location">Company location</label>
                    <select name="location" id="" class="form-control" required>
                        <option value="">--select location--</option>
                        <option value="Phnom Penh">IT/Software</option>
                        <option value="Kompot">Kompot</option>
                        <option value="Svey Reing">Kompot</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 {{ $errors->has('employeeSize') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="number" name="phone" class="form-control" value="{{ $company->phone }}" required autofocus placeholder="Phone" required>
                </div>
                <div class="col-md-6 {{ $errors->has('website') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Website (url)</label>
                    <input type="url" name="website" class="form-control" value="{{ $company->website }}" required autofocus placeholder="company website (url)">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 {{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $company->address }}" required autofocus placeholder="Company address">
                </div>
            </div>

        <div class="row">
            <div class="col-md-12 {{ $errors->has('about') ? ' has-error' : '' }}">
                <label for="exampleInputEmail1">About Company</label>
                <textarea name="about" id="" cols="15" rows="8" class="form-control" required autofocus>{{ $company->about }}</textarea>
            </div>
        </div>
    </div>
{{--end step 1--}}
        <div class="step-22">

        </div>

