@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">

        <!-- Donation Summary -->
        <div class="col-md-12">
<div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                        <div style="font-size:1.2em;color:white;"><b>Donation Summary</b></div>
                    </div>

                     <div class="panel-body">


                        <p>Bar Chart of Donation by Months</p>  
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<div id="container"></div>
<button id="plain">Plain</button>
<button id="inverted">Inverted</button>
<button id="polar">Polar</button>
</div>
        </div>
        </div>
        </div>

<br>



<!-- Donation Reports -->
            
             
             <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#5cb85c !important;">
                    <div class="pull-right">
                            <form action="{{ url('/reports/download/donation') }}" method="GET">
                                <button type="submit" id="download" class="btn btn-default">Export To Excel</button>
                            </form>
                        </div>
                        <div style="font-size:1.2em;color:white;"><b>Donation Report</b></div>
                    </div>
                    <br>
                 
     


    
                    <div class="panel-body">
                        @if (count($donors) > 0)
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead>
                                    <th>Name</th><th>Amount</th><th>Status</th><th>Date</th>

                                    </thead>
                                    <tbody> <!-- Table Body -->
                                   @foreach($donors as $donor)
                    

                    <tr>
                                            <td class="table-text"><div>{{$donor->firstname}} {{$donor->lastname}}</div></td>
                                            <td class="table-text"><div>${{number_format($donor->amount,2)}}</div></td>
                                            <td class="table-text"><div>{{$donor->status}}</div></td>
                                            <td class="table-text"><div>{{ date('F d, Y', strtotime($donor->created_at)) }}</div></td>
                                        </tr>

                  @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="panel-body"><h4>No Donation Records found</h4></div>
                        @endif
                    </div>
                </div>
                </div>
 </div>

@endsection



@section('footer')
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }


   
    </style>

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );

        /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

// Bar Chart for Donations
$(function () {
    // var chart_results = {{$chart_results}};
    //   var chart_months = {{$chart_months}};

    var chart = Highcharts.chart('container', {

        title: {
            text: 'Donation Chart'
        },

        subtitle: {
            text: ''
        },

        xAxis: {
             categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            //categories: chart_months
        },

        series: [{
            type: 'column',
            colorByPoint: true,
            name: 'Donations',
            // data: chart_results,
            data: [71,42,53,34,65,56,37,78,59,98,12,12],
            showInLegend: false
        }]

    });


    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Plain'
            }
        });
    });

    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });

});
    </script>
@endsection