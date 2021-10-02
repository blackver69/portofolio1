<section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>@yield('title-skill')</h2>
          <p>@yield('title-description')</p>
        </div>

        <div class="row skills-content">

            <div class="col-lg-6">

                @yield("skill-left")
            </div>

          <div class="col-lg-6">

            @yield("skill-right")

          </div>

        </div>

      </div>
    </section>