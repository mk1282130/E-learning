
@section('content')
<style>
hr {
 height: 5px;
 background-color: gray;
 width: 60%;
 border: none;
}
</style>
<body>
    <div class="row">
        <div class="col-sm-1" style="background-color:cadetblue">.col-sm-4</div>
        <div class="col-sm-3 text-center" style="background-color:lightgray ">.profile
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="..." alt="image">
                <div class="card-body">
                    <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>
                        <h4>Last_name First_name</h4>
                        <button type="button" class="btn btn-outline-secondary">Edit Profile</button>
                        <hr>
                        <p>follow followed</p>
                        <button type="button" class="btn btn-outline-secondary">Follow</button>
                </div>
            </div>
        </div>
        <div class="col-sm-7" style="background-color:aquamarine">.activities
            <div class="card border-success mb-3" style="max-width: 65rem;">
                <div class="card-header">Activity Log</div>
                    <div class="card-body text-success">
                    </div>
            </div>
        </div>
        <div class="col-sm-1" style="background-color:cadetblue">.col-sm-4</div>
    </div>
    <div class="row">
        <div class="col-sm-1" style="background-color: antiquewhite">.col-sm-4</div>
            <div class="col-sm-10" style="background-color:lightgreen">
                <footer class="footer-container text-center">
                        <p class="float-right">
                            <a href="#">Back to Top</a>
                        </p>
                        <p>© All rights reserved.</p>
                </footer>
            </div>
        <div class="col-sm-1" style="background-color: antiquewhite">.col-sm-4</div>
    </div>

</body>

@endsection
