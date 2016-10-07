@extends('layouts.app')  
@section('content')  

<style> 
/*Styles for  buttons, grid views and the icons*/
    .fa_custom {
        color: #9ACD40;
    }
    .fa-4x     {
        font-size: 3.5em;
    }
    .team-description {
        font-family: "Calibri Light";
        font-size: 20px;
        font-weight: 500;
        color: #1a1a1a;
        text-align: left;
        margin-left: 10%;
        margin-right: 7%;
        line-height:1.0;
        padding:0px;
    }
    .team-title {
        font-family: Helvetica;
        font-size:30px;
        font-weight: 500;
        margin-left: 10%;
        margin-right: 10%;
        padding:0px;
    }
    .btn {
        padding: 10px 10px;
        border: 0 none;
        font-weight: 800;
        font-size: 11pt;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin:13px;
    }
    .btn-primary {
        background: #9ACD50;
        color: #ffffff;
        border-radius: 0%;
    }
    .btn-primary:hover,.btn-primary:focus, .btn-primary:active:focus {
        background: #4CBB17 !important;
    }
/*underline the heading*/
    h3 {
        text-decoration:underline;
        padding:0px;
    }
    h2{
        padding:0px;
    }
/*style for table*/
    table{
        border: 1px solid darkgrey;
         width: 100%;
        margin-left: 0%;
        margin-right: 0%;
    }
    th{
        background-color: #4CAF50;
         color: white;
        height: 50px;
        text-align: left;
        padding: 15px;
        border-bottom: 1px solid #ddd;
    }
    td{
        height: 50px;
        vertical-align: bottom;
         padding: 15px;
        border-bottom: 1px solid #ddd;
    }
    tr:nth-child(even){background-color: #f2f2f2}
/*style for thermometer*/
    body {
        font-family: Helvetica;
    }

    .donation-meter {
        margin-left: 30px;
        width: 100px;
    }
    .glass {
        background: #b3b3b3;
        border-radius: 100px 100px 0 0;
        display: block;
        height: 300px;
        margin: 0 35px 10px;
        padding: 5px;
        position: relative;
        width: 20px;
    }
    .amount {
        background: #2db92d;
        border-radius: 100px;
        display: block;
        width: 20px;
        position: absolute;
        bottom: 5px;
    }
    strong { display: block; text-align: center; }
    .goal {
        font-size: 30px;
    }
    .total {
        font-size: 16px;
        position: absolute;
        right: 35px;
    }
    .bulb {
        background: #2db92d;
        border-radius: 100px;
        display: block;
        height: 50px;
        margin: 0 35px 10px;
        padding: 5px;
        position: relative;
        top: -20px;
        right: 15px;
        width: 50px;
    }
    .red-circle {
        background: #2db92d;
        border-radius: 100px;
        display: block;
        height: 50px;
        width: 50px;
    }
    .filler {
        background: #2db92d;
        border-radius: 100px 100px 0 0;
        display: block;
        height: 30px;
        width: 20px;
        position: relative;
        top: -65px;
        right: -15px;
        z-index: 30;
    }

</style> 


<div class="container-fluid" style="background-color:rgb(245,245,245)">
    <div class="container">
        <div class="row"> <!-- Create row for content-->  
            <div class="col-md-10" > <!--   Create column within the row--> 

                <!-- Create Heading of the team page-->
                <br> 
                <h2 class="team-title text-center" id = "team_title"> WELCOME TO OUR TEAM</h2> 
                <p style="color: #9d9d9d"  align="center">__________________________________________________________________________</p> 



                <!-- Create Text for the team--> 
                <p class="team-description" id = "team_greeting"> Hello everyone!</p>  
                <p class="team-description" id = "team_description"> We are team Union. Our goal is to raise $3000 for the Golf campaign 2016. The raised
                    amount will be donated to Junior Achievements on January 2, 2017. You can join our team and participate in collecting the fund.Or simply
                    just donate. Click any of the link below!
                    We appreciate your help and participation. Thank you!</p>
                <br> 

                <!-- Create buttons  -->  
                <div class="closing-buttons" align="center" id="button-donate"> 
                    <a class="btn btn-lg btn-primary" href="/donation/donate" id = "team_join">Join our team</a> 
                    <a class="btn btn-lg btn-primary" href="/donation/donate" id = "team_donate">Donate to our team</a>  
                </div><!-- end of class buttons --> 

                <!-- Current team member table-->  
                <!--Create Heading-->
                <h3 class="team title text-center" id = "team_subtitle" >Our Team Members</h3>  
                <!-- Create Table-->
                <div align="center"><table> 
                        <tr> 
                            <th>Rank</th> 
                            <th>Team member</th> 
                            <th>Amount Raised</th> 
                            <th>Goal</th> 
                            <th>% Raised</th>
                        </tr>
                        <td align="center">1</td> 
                        <td align="center"><a href="/campaign/teammember">Jill Smith</a></td> 
                        <td align="center">$200</td> 
                        <td align="center">$500</td> 
                        <td align="center">40%</td> 
                        </tr>

                        </tr>
                        <td align="center">2</td> 
                        <td align="center"><a href="/campaign/teammember">Keisha Peters</a></td> 
                        <td align="center">$50</td> 
                        <td align="center">$200</td> 
                        <td align="center">25%</td> 
                        </tr>

                        </tr>
                        <td align="center">2</td> 
                        <td align="center"><a href="/campaign/teammember">Min Hui</a></td> 
                        <td align="center">$25</td> 
                        <td align="center">$100</td> 
                        <td align="center">25%</td> 
                        </tr>

                    </table><!-- end of table-->
                </div> <!-- end of table alignment--> 
            </div><!-- end of first column-->



            <!--Create thermometer-->
            <div class="col-md-2" > <!--second column-->
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="donation-meter">
                    <strong>Our Goal</strong>
                    <strong class="goal">$3000</strong>
                    <span class="glass">
                        <strong class="total" style="bottom: 30%">$275</strong>
                    <span class="amount" style="height: 30%"></span>
                    </span>
                    <div class="bulb">
                        <span class="red-circle"></span>
                        <span class="filler">
                            <span></span>
                        </span>
                    </div><!--end of class bulb-->
                </div><!--end of class donation meter-->
            </div><!--end of class col-->
        </div> <!-- end of class row--> 
    </div> <!-- end of class container-->
</div> <!-- end of class container fluid-->

@endsection
