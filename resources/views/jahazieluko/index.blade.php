@extends('layout.master')

@section('content')
    {{-- PROFILE - Picture, Intro and Contact  --}}
    <div class="row">
        <div class="col-sm-4">
            <div class="images">
                <img class="image" src="{{ asset('./images/photo.jpg') }}" alt="Hey" width="200px" height="200px">
            </div>
        </div>
        <div class="col-sm-4">
            <h1 class="text-center text-primary">Jahaziel B. Uko </h1>
            <p class="text-center">
                An intellectual human with dilligence and persistency to find solution or contribute to finding solution in a team environment. Always open to learning. Pragmatic, Optimistic, Open-minded, Curious-minded. 
            </p>
        </div>
        <div id="contact" class="col-sm-4">
            <h3 class="text-center">Contact Me</h3>

            <p class="text-center">Kilometer 12, Airport Road, Uyo - Akwa Ibom State, Nigeria.</p>

            <p class="text-center">Feel free to reach me on any of the handles below!</p>

            <li class="contact">
                Call on <a href="tel:+2348089810418">+234 808 981 0418</a> <br> <a href="tel:+2349057359168">+234 905 735 9168</a> 
            </li>
            <li class="contact">
                <i class="fab fa-whatsapp fa-lg fa-fw  "></i> <a target="_blank" href="https://wa.link/6kv12d">Send WhatsApp Message </a>
            </li>
            <li class="contact">
                 <a target="_blank" href="https://web.facebook.com/jahaziel.uko.1"> <i class="fab fa-facebook fa-lg fa-fw"></i> Jahaziel Uko</a>
            </li>
            <li class="contact">
                <a href=""><i class="fab fa-linkedin fa-lg fa-fw"></i></a> <a href="https://www.linkedin.com/in/jahaziel-uko">Jahaziel Uko</a>
            </li>
            <li class="contact">
                <i class="fab fa-github fa-lg fa-fw"></i> <a href="">JayBee Learn</a>
            </li>
           
           
        </div>
    </div>

    {{-- SKILLS - Programming,  --}}
    <div class="container m-2">
        <h2 class="text-center text-primary"> Programming Language Skills </h2> 
        <div class="row">
            
            <div class=" col-sm-3  PLSkills">
                    <div class="container text-center bg bg-light m-1 p-2 rounded ">
                        <h5 >HTML</h5>
                        <p >Years of Experience: <br>  <span class="bold"> 3+ </span></p> 
                        <p >Proficiency Level: <br> 
                            <progress value="98" max="100"> </progress>
                        {{-- <input type="range" name="" id="" value="100" readonly></p> --}}
                    </div>

            </div>
            <div class=" col-sm-3 PLSkills">
                <div class="container text-center  bg bg-light m-1 p-2 rounded ">
                        <h5 >CSS</h5>
                        <p >Years of Experience: <br>  <span class="bold"> 3+ </span></p> 
                        <p >Proficiency Level: <br> 
                            <progress value="88" max="100"> </progress>
                            {{-- <input type="range" name="" id="" value="85" readonly></p> --}}
                        <p >Framework: <br> <span class="bold">BootStrap</span></p>
                </div>
            </div>

            <div class=" col-sm-3  PLSkills">
                <div class="container text-center bg bg-light m-1 p-2 rounded">
                    <h5 >PHP</h5>
                    <p >Years of Experience: <br>  <span class="bold"> 2+ </span></p> 
                    <p >Proficiency Level: <br> 
                        
                        <progress value="78" max="100"> </progress>
                        {{-- <input type="range" name="" id="" value="75" readonly></p> --}}
                    <p >Framework: <br> <span class="bold">Laravel</span></p>
                </div>
            </div>

            <div class=" col-sm-3  PLSkills">
                <div class="container text-center bg bg-light m-1 p-2 rounded">
                    <h5 >JavaScript</h5>
                    <p >Years of Experience: <br>  <span class="bold"> 1+ </span></p> 
                    <p >Proficiency Level: <br> 
                        <progress value="65" max="100"> </progress>
                        {{-- <input type="range" name="" id="" value="60" readonly></p> --}}
                </div>
            
            </div>
            

        </div>
    </div>

    {{-- SKILLS - Computer and General --}}
    <div class="container my-2">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="text-center text-primary"> Other Computer Skills </h2>
                <ul>
                    <li>Microsoft Office <small>{All Package}</small></li>
                    <li>Corel Draw</li>
                    <li>Photoshop <small>{Basics}</small></li>
                    <li>Scratch</li>
                    <li>QBASICS</li>
                </ul>
            </div>
            <div class="col-sm-8">
                <h2 class="text-center text-primary">General Skills </h2>
               <ul>
                <li>Good and in office management and secretariat duties.</li>
                <li>Ability to organize meetings and events.</li>
                <li>Good keyboard skills.</li>
                <li>Ability to handle multi-tasking job.</li>
                <li>Ability to work with little or no supervision.</li>
                <li>Familiarity with words.</li>
                <li>Good in Graphics Design.</li>
                <li>Good in management and entrepreneur skills.</li>
                <li>Web Design and Management skills.</li>
                <li>Negotiation skills and techniques.</li>
               </ul>

            </div>
        </div>
    </div>


    {{-- PROJECTS, WORK EXPERIENCES, INTEREST --}}
    <div class="container my-2">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="text-center text-primary">Projects</h2>
                <table class="table table-bordered">
                    <tr>
                        <th> S/N </th>
                        <th>Project</th>
                    </tr>

                    <tr>
                       <td>1</td>
                        <td><a href="http://jbmanager.herokuapp.com" target="_BLANK">Appointment Manager</a></td>
                    </tr>

                     <tr>
                       <td>2</td>
                        <td><a href="http://javascript.netlify.com" target="_BLANK">JavaScript Playground</a></td>
                    </tr>

                     <tr>
                       <td>3</td>
                        <td><a href="http://danwimaproject.herokuapp.com" target="_BLANK">Advert Manager</a></td>
                    </tr>

                     <tr>
                       <td>4</td>
                        <td><a href="http://www.recipe.herokuapp.com" target="_BLANK">Dishes Recipe</a></td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-8">
                <h2 class="text-center text-primary">Work Experiences</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="work rounded p-2 m-2 container text-center">
                            <small>Place of Work</small>
                            <h5 class="text-info">Fastville International Place</h5>

                            <small>Position</small>
                            <h5 class="text-info">Computer Science Teacher and Management Staff</h5>

                            <small>Duration</small>
                            <h5 class="text-">Five (5) Years + <span class="bg bg-success rounded px-1 text-white">Active</span></h5>

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="work rounded p-2 m-2 container text-center">
                            <small>Place of Work</small>
                            <h5 class="text-info">Amabeth Cyber Café</h5>

                            <small>Position</small>
                            <h5 class="text-info">Computer Operator and Customer Assistant</h5>

                            <small>Duration</small>
                            <h5 class="text-">Less than One Year</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="work rounded p-2 m-2 container text-center">
                            <small>Place of Work</small>
                            <h5 class="text-info">Not Applicable</h5>

                            <small>Position</small>
                            <h5 class="text-info">Graphics Designer</h5>

                            <small>Duration</small>
                            <h5 class="text-">Five (5) Years + <span class="bg bg-success rounded px-1 text-white">Active</span></h5>

                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="work rounded p-2 m-2 container text-center">
                            <small>Place of Work</small>
                            <h5 class="text-info">Divine Essential School </h5>

                            <small>Position</small>
                            <h5 class="text-info">Classroom Teacher</h5>

                            <small>Duration</small>
                            <h5 class="text-">Less than One Year</h5>
                        </div>
                    </div>
                </div>
 
            </div>
           
        </div>

        
    </div>

    {{-- EDUCATIONAL QUALIFICATIONS AND CERTIFICATIONS  --}}

    <div class="container my-2">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="text-center text-primary">Educational Qualifications</h2>
                <div class="container school text-center">
                    <h5 class="text-info">B.Sc.(ED). Computer Science</h5 >
                    <p>National Open University of Nigeria</p>
                    <h6>2023</h6>
                </div>
            </div>
            <div class="col-sm-4">
                <h2 class="text-center text-primary">Certifications</h2>
                <ul>
                    <li><h6>Certificate in Data Processing and Computer Fundamentals</h6></li>
                    <li><h6>Certificate In Web Development</h6></li>
                    <li><h6>Microsoft Innovative Educator</h6></li>
                </ul>
            </div>
           
             <div class="col-sm-4">
                <h2 class="text-center text-primary">Interest</h2>
                 <ul>
                    <li><h6>Education</h6></li>
                    <li><h6>Teaching</h6></li>
                    <li><h6>Programming</h6></li>
                     <li><h6>Research and Development</h6></li>
                    <li><h6>Philosophy</h6></li>
                    <li><h6>Travelling</h6></li>
                </ul>
            </div>
        </div>

        
    </div>

    <footer >
       <div class="container mt-4 text-center">
        <a href="#contact" class="btn btn-primary"> Contact Me</a>

         

        {{-- <div class="container text-center mt-4">
            <button id="downloadBtn" class="btn btn-warning" onclick="downloadResume()">Download A Copy of Resumé</button>
        </div> --}}
       </div>
    </footer>

    
@endsection