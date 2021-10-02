@extends('layout/main')

@section('title','about me')


@section('container')


  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Perkenalkan nama saya Ricky. Saya merupakan mahasiswa dari Bina Nusantara Bandung</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <img src="" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h3>Programmer</h3>
            <p class="fst-italic">
              Saya menyukai programmer dikarenakan saya suka mencari sesuatu yang melatih logika saya
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Birthday:</strong> 15 December 2000</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Website:</strong> www.example.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Phone:</strong>081224546889</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>City:</strong> City : Cirebon, Jawa Barat</li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-rounded-right"></i> <strong>Age:</strong> 20</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Degree:</strong> Undergreduate</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>PhEmailone:</strong> email@example.com</li>
                  <li><i class="bi bi-rounded-right"></i> <strong>Freelance:</strong> Available</li>
                </ul>
              </div>
            </div>
            <p>
                "Things work out best for those who make the best of how things work out." --John Wooden
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Hard Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hard Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

          
              @for ( $i=0;$i< count($hard_skill);$i++)
                  @if($i==0)
                    <div class="col-lg-6">
                    
                    
                  @endif
                  @if($i==count($hard_skill)/2)
                    </div>
                    <div class="col-lg-6">
                    
                    
                  @endif
                  <div class="progress">
                      <span class="skill">{{$hard_skill[$i]->skill}}<i class="val">{{$hard_skill[$i]->rate}}%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$hard_skill[$i]->rate}}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              @endfor

      

         </div> 
         
         

          

        </div>

      </div>
    </section>


    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Soft Skills</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row skills-content">

          
              @for ( $i=0;$i< count($soft_skill);$i++)
                  @if($i==0)
                    <div class="col-lg-6">
                    
                    
                  @endif
                  @if($i==count($soft_skill)/2)
                    </div>
                    <div class="col-lg-6">
                    
                    
                  @endif
                  <div class="progress">
                      <span class="skill">{{$soft_skill[$i]->skill}}<i class="val">{{$soft_skill[$i]->rate}}%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$soft_skill[$i]->rate}}" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                  </div>
              @endfor

      

         </div> 
         
         

          

        </div>

      </div>
    </section>

    <!-- ======= Facts Section ======= -->
    <!-- <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>

        </div>

      </div>
    </section>End Facts Section -->

    <!-- ======= Testimonials Section ======= -->
    

  </main><!-- End #main -->
@endsection