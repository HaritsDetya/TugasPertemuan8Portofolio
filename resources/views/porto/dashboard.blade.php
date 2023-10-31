@extends('porto.main')

@section('content')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
  </head>
  <body>
    <div class="home">
      <div class="home-child"></div>
      <div class="home-item"></div>
      <div class="home-inner"></div>
      <div class="bagian-4">
        <div class="get-in-touch">
          <div class="get-in-touch-child"></div>
          <div class="get-in-touch1">Get in Touch</div>
        </div>
        <div class="email2">
          <div class="email3">
            <div class="haritsirawan2118gmailcom">
              haritsirawan2118@gmail.com
            </div>
            <div class="email4">Email</div>
          </div>
          <img class="vector-icon" alt="" src="./public/vector.svg" />
        </div>
        <div class="phone">
          <div class="phone1">
            <div class="phone2">Phone</div>
            <div class="div">0838-6226-1188</div>
          </div>
          <img class="vector-icon1" alt="" src="./public/vector1.svg" />
        </div>
      </div>
      <div class="bagian-3">
        <div class="high-school">
          <div class="graduated-from-jetis">
            Graduated from Jetis Public High School as average student.
          </div>
          <div class="jetis-public-high-school-parent">
            <div class="jetis-public-high">Jetis Public High School</div>
            <div class="now">2019-2022</div>
          </div>
        </div>
        <div class="university">
          <div class="i-started-my">
            I started my studies at Universitas Gadjah Mada, specifically in the
            Faculty of Vocational School, majoring in Software Engineering, with
            the expectation of graduating on time.
          </div>
          <div class="university-of-gadjah-mada-parent">
            <div class="jetis-public-high">University of Gadjah Mada</div>
            <div class="now">2022-now</div>
          </div>
        </div>
        <div class="bagian-3-child"></div>
        <div class="my-educational-history">My Educational History</div>
      </div>
      <div class="bagian-2">
        <img
          class="tools-and-skills"
          alt=""
          src="./public/tools-and-skills.svg"
        />

        <div class="tools-and-skills1">Tools and Skills</div>
      </div>
      <div class="bagian-1">
        <div class="content">
          <div class="software-engineer">Software Engineer</div>
          <div class="muhammad-harits-detya">Muhammad Harits Detya Irawan</div>
          <div class="content-child"></div>
          <div class="someone-who-is">
            Someone who is enthusiastic about seeking new experiences and
            learning new things. Interested in learning about web development
            and design.
          </div>
        </div>
        <div class="find-me">
          <img class="wa-icon" alt="" src="./public/wa.svg" />

          <img class="instagram-icon" alt="" src="./public/instagram.svg" />

          <img class="linkedln-icon" alt="" src="./public/linkedln.svg" />

          <div class="find-me1">
            <div class="find-me-child"></div>
            <div class="find-me-on">Find Me On</div>
          </div>
        </div>
      </div>
      <div class="dashboard2">
        <div class="harits2">Harits</div>
        <div class="dashboard3">
          <div class="about">About</div>
          <div class="skills">Skills</div>
          <div class="studies">Studies</div>
          <div class="contact">Contact</div>
        </div>
        <img class="group-icon" alt="" src="./public/group.svg" />
      </div>
    </div>
  </body>
</html>


    <!-- <div class="home">
      <div class="bagian-4">
        <div class="get-in-touch">
          <div class="get-in-touch-child"></div>
          <div class="get-in-touch1">Get in Touch</div>
        </div>
        <div class="email2">
          <div class="email3">
            <div class="haritsirawan2118gmailcom">
              haritsirawan2118@gmail.com
            </div>
            <div class="email4">Email</div>
          </div>
          <img class="vector-icon" alt="" src="{{asset('Image/email1.svg')}}" />
        </div>
        <div class="phone">
          <div class="phone1">
            <div class="phone2">Phone</div>
            <div class="div">0838-6226-1188</div>
          </div>
          <img class="vector-icon1" alt="" src="{{asset('Image/Phone1.svg')}}" />
        </div>
      </div>
      <div class="bagian-3">
        <div class="high-school">
          <div class="graduated-from-jetis">
            Graduated from Jetis Public High School as average student.
          </div>
          <div class="jetis-public-high-school-parent">
            <div class="jetis-public-high">Jetis Public High School</div>
            <div class="now">2019-2022</div>
          </div>
        </div>
        <div class="university">
          <div class="i-started-my">
            I started my studies at Universitas Gadjah Mada, specifically in the
            Faculty of Vocational School, majoring in Software Engineering, with
            the expectation of graduating on time.
          </div>
          <div class="university-of-gadjah-mada-parent">
            <div class="jetis-public-high">University of Gadjah Mada</div>
            <div class="now">2022-now</div>
          </div>
        </div>
        <div class="bagian-3-child"></div>
        <div class="my-educational-history">My Educational History</div>
      </div>
      <div class="bagian-2">
        <img
          class="tools-and-skills"
          alt=""
          src="{{asset('Image/ToolsSkills.svg')}}"
        />

        <div class="tools-and-skills1">Tools and Skills</div>
      </div>
      <div class="bagian-1">
        <div class="bagian-1-child"></div>
        <div class="bagian-1-item"></div>
        <div class="content">
          <div class="software-engineer">Software Engineer</div>
          <div class="muhammad-harits-detya">Muhammad Harits Detya Irawan</div>
          <div class="content-child"></div>
          <div class="someone-who-is">
            Someone who is enthusiastic about seeking new experiences and
            learning new things. Interested in learning about web development
            and design.
          </div>
        </div>
        <div class="find-me">
          <img class="wa-icon" alt="" src="{{asset('Image/WA.svg')}}" />

          <img class="instagram-icon" alt="" src="{{asset('Image/Instagram.svg')}}" />

          <img class="linkedln-icon" alt="" src="{{asset('Image/Linkdln.svg')}}" />

          <div class="find-me1">
            <div class="find-me-child"></div>
            <div class="find-me-on">Find Me On</div>
          </div>
        </div>
      </div>
      <div class="dashboard1">
        <div class="dashboard-child"></div>
        <div class="harits1">Harits</div>
        <div class="about">About</div>
        <div class="skills">Skills</div>
        <div class="studies">Studies</div>
        <div class="contact">Contact</div>
      </div>
    </div> -->
@endsection