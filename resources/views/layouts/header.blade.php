<header>
    @include('layouts.nav-bar')
    <div class="jumbotron jumbotron-fluid jumbotron-main">
      <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
      <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
      <div id="particles-js">
        <canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
      </div>
      <div class="container center-vertically-holder" style="margin-top:-20px;">
          <div class="row center-vertically">
              <div class="col-md-8 col-xl-12 offset-sm-0 offset-md-2 offset-xl-0 text-center" style="margin-top: 100px;margin-bottom: 100px;">
                  <div class="row">
                      @yield('Name_header')
                  </div>
              </div>
          </div>
      </div>
    </div>
</header>
