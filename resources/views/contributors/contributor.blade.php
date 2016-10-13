@extends('layouts.app')

@section('content')

    <style xmlns:align="http://www.w3.org/1999/xhtml">

        .glyphicon{font-size:30px;
            float:left;
            margin-right:20px;
            color:green;}

        h4{
            margin-right: 20px;
            color:green;
        }
        .fa_custom {
            color: #9ACD40;
        }


        .fa-4x     {
            font-size: 3.5em;
        }

        .program-description {
            font-family: "Calibri Light";
            font-size: 18px;
            font-weight: 500;
            color: #6d6d6d;
            text-align: center;
            margin-left: 3%;
            margin-right: 3%;
            line-height:1.5;
        }


        .program-title {
            font-family: Helvetica;
            font-size:14px;
            font-weight: 500;
        }
        .btn {
            padding: 18px 18px;
            border: 0 none;
            font-weight: 300;
            font-size: 11pt;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .btn-primary {
            background: #9ACD50;
            color: #ffffff;
            border-radius: 0%;
        }
        .btn-primary:hover,.btn-primary:focus, .btn-primary:active:focus {
            background: #4CBB17 !important;
        }

    </style>

    <div class="container-fluid" ID="1" style="background-color:rgb(245,245,245)">
        <div class="container"  ID="2">
            <br>
            <br>
            <br>
            <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
            <h2 class="text-center"  ID="3">PARTNERING WITH JUNIOR ACHIEVEMENT</h2>
            <br>
            <br>
            <div class="row"  ID="4">
                <div class="col-md-6"  ID="5">
                    <img class="img-responsive" alt="Educator with Junior Achievement" src="https://www.juniorachievement.org/documents/20009/1817412/about-pg.png" width="100%" height="auto"  ID="6"/>
                </div>
                <div class="col-md-6"  ID="7">

                    <p style="font-size: 16px"  ID="8"> Is your company looking to partner with an organization that makes a difference in the lives of youth in your community? Junior Achievement provides programs that are delivered to students in the classroom or in a simulated community (depending on the location). JA programs are developed with a focus on several different critically needed areas; STEM, building Leadership Skills, Uplifting At-Risk Communities, Work Readiness and Soft Skills, Business Ethics, College Readiness, Career and Technical Education (CTE), Industry Focus (Manufacturing/Health), and Financial Literacy.</p>
                    <br>
                    <div>
                        <div class="col-md-1"><span class="glyphicon glyphicon-gift"  ID="9"></span> </div>
                        <div class="col-md-11"  ID="10"><h4>YOUR DONATION HELPS JA REACH STUDENTS</h4>
                            <p style="font-size:16px"  > JA inspires and prepares young people to succeed in the global economy. By partnering with JA, you will empower young people to own their economic success.</p>
                            <br></div>
                    </div>

                    <div>
                        <div class="col-md-1"  ID="12"><span class="glyphicon glyphicon-grain"   ID="13"></span> </div>
                        <div class="col-md-11"  ID="14"> <h4>JA WILL HELP PREPARE YOUR FUTURE WORKFORCE</h4>
                            <p style="font-size: 16px"> JA will help you develop leaders with the critical skills and the character necessary to succeed in your 21st century workplace.</p>
                            <br></div>
                    </div>

                    <div>
                        <div class="col-md-1"  ID="15"><span class="glyphicon glyphicon-heart-empty" ></span> </div>
                        <div class="col-md-11"  ID="16"> <h4>JA PROVIDES AN ENRICHING VOLUNTEER EXPERIENCE FOR YOUR EMPLOYEES</h4>
                            <p style="font-size: 16px"  ID="17"> JA will empower your employees with quality, skills-based volunteering experiences in the community using proven programs that change young peoples' lives.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <br>
            <div class="row">

                <!-- Program 1 Donor.  -->
                <h2 class="text-center"  ID="3">Ways to Donate</h2>
                <br>
                <br>
                <div class="col-sm-6">
                    <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                        <div class="program">
                            <br>
                            <br>
                            <p align="center">
                                <span class="fa fa-lightbulb-o fa_custom fa-4x" data-animation="bounceIn"></span>
                            </p>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <h4 class="program-title" align="center"> Donate Directly</h4>
                            <br>
                            <p class="program-description"> Every single dollar makes a difference. Donating to JA Omaha will help to continually evolve JA's enriching programs, or
                                donating directly to a JA Omaha will help JA reach more students.</p>
                            <br>
                            <br>
                            <div class="closing-buttons" align="center" id="button-donate">
                                <a class="btn btn-lg btn-primary" href="{{ url('/contributors') }}">Learn More</a>
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program 2 Volunteer. -->

                <div class="col-sm-6">
                    <div class="col-sm-12" style="background-color:rgb(255,255,255)">
                        <div class="program">
                            <br>
                            <br>
                            <p align="center">
                                <span class="fa fa-heart-o fa_custom fa-4x" data-animation="bounceIn"></span>
                            </p>
                            <br>
                            <h4 class="program-title" align="center"> Donate through Campaigns</h4>
                            <br>
                            <p class="program-description"> For larger donations, you can be a part of the JA campaigns. Any person can create campaign and add team member</p>

                            <br>
                            <br>
                            <div class="closing-buttons" align="center" id="button-volunteer">
                                <a class="btn btn-lg btn-primary" href="/volunteers/introduction">Learn More</a>
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                            <div class="hidden-sm clear"> &nbsp;
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Programs end here --> <div class="entry-links"> </div>

            </div>
            <br>

        <div class="container" ID="26">

            <h2 class="text-center" ID="27"> Watch the Video</h2>

            <div align:"center"  class="col-md-3 style="align: center" ID="28"></div>
            <div align:"center"  class="col-md-6 style="align: center" ID="29" >
                <br>
                <div class="embed-responsive embed-responsive-16by9 text-center" ID="30" >
                    <div class="video-embed" style="text-align:center" ID="31">
                    <iframe allowfullscreen="" frameborder="0" height="100" src="https://www.youtube.com/embed/nTmryDIQq6s" width="300" ID="32"></iframe>
                    </div>
                </div>
                <div align:"center"  class="col-md-3 style="align: center" ID="33"></div>
            </div>
        </div>
    <br>
    </div>


    </div>


@endsection
@section('footer')
    <script>
        jQuery(function() {
            jQuery('#container').highcharts(
                    {!! json_encode($chartArray)!!}
            )
        });
    </script>
@endsection