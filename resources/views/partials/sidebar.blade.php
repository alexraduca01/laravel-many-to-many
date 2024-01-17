@auth
    <div class="text-white bg-dark d-flex flex-column justify-content-between py-3" style="position: fixed; top: 100px; left: 0; height: calc(100vh - 100px); width: 150px;">
        <div>
            <div class="text-center mb-5">
                <h5>Projects</h5>
                <a class="text-primary text-decoration-none " href="{{ route('admin.projects.index')}}">Control Panel</a>
            </div>
            <div class="text-center mb-5">
                <h5>Categories</h5>
                <a class="text-primary text-decoration-none " href="{{ route('admin.categories.index')}}">Control Panel</a>
            </div>
        </div>
        <div>
            <div class="text-center">
                <h5><a href="{{ route('home') }}" class="text-white text-decoration-none"><i class="fa-solid fa-house"></i></a></h5>
            </div>
        </div>
    </div>
@endauth
