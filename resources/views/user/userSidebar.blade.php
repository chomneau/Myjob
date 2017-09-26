
<div class="photo-profile">
    <img src="http://placehold.it/360x240" alt="" class="img-circle thumbnail">
    <h4 class="text-center text-uppercase" style="color: #F8F4F4">{{ Auth::user()->name }}</h4>
    <p class="text-center text-info" style="color: #69EDF2">Web Developer at Toll Free Telecom(Cambodia)</p>
</div>
    <div class="panel panel-default" style="margin-top: -7em">
        <div class="panel-heading" style="background-color: #0DC2C9; margin-top: 1em">

        </div>
        <div class="panel-body" style="background-color: #0DC2C9">
            <ul id="item-list" style="padding-left: 5px">
                <li>
                        <a href="#">
                            </a></li>
                <li>
                <li>
                    <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i>
                        Edit Profile</a></li>
                <li>
                    <a href="#"><i class="fa fa-address-book-o" aria-hidden="true"></i>
                        Build Resume</a></li>
                <li><a href="{{ route('home.jobform') }}"><i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                        Create CV</a></li>
            </ul>
        </div>
    </div>
