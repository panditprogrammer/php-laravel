{{-- extend the main layouts  --}}
@extends('frontend.layouts.main')




{{-- parse this section in frontend main layouts  --}}
@section('main-body')



<!-- top header -->
  <div class="bg-light text-dark text-center container my-4 ">
    <div class="container p-4">
      <h2 class="display-3 p-2">Coding and programming !</h2>
      <b>
        <p class="p-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea veritatis nesciunt ut beatae,
          officiis atque quod dolore blanditiis veniam accusantium necessitatibus est!
        </p>
      </b>
      <h3 class="text-center text-dark">Join Our best coding and programming course for free.</h3>

    </div>
  </div>
  <!-- top header ends here  -->


  <!-- services body starts here -->

  <div class="container">
    <h2 class="text-center text-info my-4 ">Our Best Courses</h2>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-4">
        <div class="card">
          <img src="images/C.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">C C++</h5>
            <p class="card-text">A successor to the programming language B, C was originally developed at Bell Labs by
              Dennis Ritchie between 1972 and 1973 to construct utilities running on Unix. It was applied to
              re-implementing the kernel of the Unix operating system.[6] During the 1980s, C gradually gained
              popularity.
              c most widely used programming languages,
              available for the majority of existing computer architectures and operating systems. C has been
              standardized
              by the ANSI since 1989 (ANSI C) and by the International Organization for Standardization (ISO). As of
              September 2020, C is the most popular programming language.[9].</p>
            <button class="btn btn-success my-1">Explore more</button>
            <button class="btn btn-success my-1">Join Course</button>
          </div>
        </div>
      </div>


      <div class="col mb-4">
        <div class="card">
          <img src="images/python.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Python</h5>
            <p class="card-text">Python is a general-purpose programming language. That means it was designed and
              developed to write software for a wide variety of disciplines. Python has been used to
              write applications to solve problems in biology, chemistry, financial analysis, numerical
              analysis, robotics, and many other fields. It language for
              use by computer administrators, who use it to capture and replay sequences of computer
              commands.
              The key things
              that you learn about—variables, assignment statements, if statements, while loops,
              function calls—are all concepts that are easily transferable to any other programming
              language</p>
            <button class="btn btn-success my-1">Explore more</button>
            <button class="btn btn-success my-1">Join Course</button>
          </div>
        </div>
      </div>


      <div class="col mb-4">
        <div class="card">
          <img src="images/html.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">HTML CSS JAVASCRIPT</h5>
            <p class="card-text">Web development is the work involved in developing a Web site for the Internet (World
              Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single
              static page of plain text to complex Web-based Internet applications (Web apps), electronic businesses,
              and social network services. A more comprehensive list of tasks to which Web development commonly refers,
              may include Web engineering, Web design, Web content development, client liaison, client-side/server-side
              scripting, Web server and network security configuration, and e-commerce development.</p>
            </p>
            <button class="btn btn-success my-1">Explore more</button>
            <button class="btn btn-success my-1">Join Course</button>
          </div>
        </div>
      </div>


      <div class="col mb-4">
        <div class="card">
          <img src="images/android.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">JAVA / Android</h5>
            <p class="card-text">Android Developer Days, or ADD, is an open conference held at various locations
              worldwide each year. The Android Developer Days conference is a growing organization that allows
              developers of various software and applications to showcase, observe,The Android Developer Days conference
              is a growing organization that allows developers of various software and applications to showcase,
              observe, and participate in Android Developing events, such as informational lectures, workshops,
              entertainment activities, panel discussions, and networking opportunities make up a majority of the
              Android Developer Days.</p>
            <button class="btn btn-success my-1">Explore more</button>
            <button class="btn btn-success my-1">Join Course</button>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <img src="images/android.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">PHP</h5>
            <p class="card-text">Android Developer Days, or ADD, is an open conference held at various locations
              worldwide each year. The Android Developer Days conference is a growing organization that allows
              developers of various software and applications to showcase, observe,The Android Developer Days conference
              is a growing organization that allows developers of various software and applications to showcase,
              observe, and participate in Android Developing events, such as informational lectures, workshops,
              entertainment activities, panel discussions, and networking opportunities make up a majority of the
              Android Developer Days.</p>
            <button class="btn btn-success my-1">Explore more</button>
            <button class="btn btn-success my-1">Join Course</button>
          </div>
        </div>
      </div>
      <div class="col mb-4">
        <div class="card">
          <img src="images/android.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">DBMS MYSQL</h5>
            <p class="card-text">Android Developer Days, or ADD, is an open conference held at various locations
              worldwide each year. The Android Developer Days conference is a growing organization that allows
              developers of various software and applications to showcase, observe,The Android Developer Days conference
              is a growing organization that allows developers of various software and applications to showcase,
              observe, and participate in Android Developing events, such as informational lectures, workshops,
              entertainment activities, panel discussions, and networking opportunities make up a majority of the
              Android Developer Days.</p>
            <button class="btn btn-success my-1">Explore more</button>
            <button class="btn btn-success my-1">Join Course</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- services body ends here  -->

  <div class="container ">
    <div class="row">
      <div class="col-md-12">
        <div class=" text-center  my-4 ">
          <div class="container bg-light text-dark p-4">
            <h1 class="display-5">Explore Our Upcoming Courses</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque provident voluptatum est earum ipsum
              illo repellendus maiores itaque ex. Inventore dolor similique, voluptate mollitia ipsam consequatur
              accusantium facilis numquam, ipsa, temporibus facere iusto fugiat ipsum assumenda at in incidunt. Minima
              cupiditate nesciunt expedita dolorem.
            </p>
            <button class="btn btn-success my-1">coming soon</button>
            <button class="btn btn-success my-1">Latest Courses</button>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-4 ">
    <h2 class="text-center py-2">Explore more Here</h2>
    <div class="card-group">
      <div class="card mx-2">
        <img src="images/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Latest Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem, repellat commodi
            nemo neque ipsam. Voluptates aliquam consequatur, deleniti eos soluta ipsam nobis voluptate voluptatum unde
            a, accusantium mollitia qui?</p>

        </div>
      </div>
      <div class="card mx-2">
        <img src="images/4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Trending Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel mollitia asperiores
            pariatur eius distinctio explicabo, aspernatur eveniet tempore quibusdam sed non quo eos veniam quos omnis
            laborum qui vero voluptates..</p>
        </div>
      </div>
      <div class="card">
        <img src="images/3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Up Coming Courses</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum perferendis iure ex,
            deleniti earum ullam odit quibusdam obcaecati fugit, commodi eos? Error illo est quaerat laudantium nisi
            debitis, veniam aut.</p>
        </div>
      </div>
    </div>
  </div>

@endsection