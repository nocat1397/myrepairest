
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
  
    <title>MyRepairest(Admin panel)</title>
    <link rel="shortcut icon" type="image/png" href="{{url('images/logo1-top.png')}}" />
<link rel="apple-touch-icon" href="{{url('images/logo1-top.png')}}" />
  
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    



<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    
    <script>
      $(document).ready(function(){
    
        $(".loader").fadeOut(); 
      $("#preloder").delay(400).fadeOut("slow");
      });
    </script>
    <script>

      $(document).ready(function(){
          $('#amcerror').delay(5000).fadeOut(); 
      });
  </script>
    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
      .btn-primary{
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
      }
      body::-webkit-scrollbar-track {
  
        background: transparent;
      }

      body::-webkit-scrollbar {
        transition: all .5s;
        width: 8px;
        height: 1px;
      }
      .modal-backdrop{
        display: none;
      }
      .sidebar::-webkit-scrollbar-thumb {
        background: darkgray;
      }

      .sidebar::-webkit-scrollbar-track {
  
      background: transparent;
      }

      .sidebar::-webkit-scrollbar {
        transition: all .5s;
        width: 5px;
        height: 1px;
        border-radius: 20px;
      }

      .sidebar::-webkit-scrollbar-thumb {
        background: darkgray;
      }
     .icon{
      margin-left: -5px!important;
     } 
    .p-cont{
      margin-left: -2px!important;
     }
     .icon2{
      margin-left: 3px!important;
     } 
    .p-cont2{
      margin-left: 7px!important;
     }
     .btn-add{
        background-color: #a05535!important;
        color: white;
        transition-duration: 0.6s!important;
        padding: 5px;
        padding-left: 5px;
        padding-right: 10px;
        border-radius: 5px;
        text-decoration: none!important;
     }
     .btn-add:hover{
        background-color: #bc7509!important;
        transition-duration: 0.6s!important;
        color: #fff!important;
     }
    /* .over{
      overflow: hidden;
    } */
    .btn-cyan{
       background-color: #a05535!important;
       border-color: #a05535!important;
       color:whitesmoke!important;
     }
     .color{
      color: #484242;
     }
     .searchbar-corner{
       margin-left: 75%;
     }
     .btn-delete{
      padding: 1px;
      padding-right: 5px;
      padding-left: 5px;
      border-radius: 5px;
      color: white!important;
      background-color: rgb(236, 16, 16)
     }
     .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #a05535;
    border-color: #a05535;
     }

     .report-bt {
        
        font-size: 12px;
        cursor: pointer;
        -webkit-animation: report 1500ms infinite;
     }

     @-webkit-keyframes report {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes report {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes report {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes report {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}
/* .bg{
  background-color: #0373f9;
  color: white;
  clip-path: polygon(0 0, 100% 0, 100% 100%, 29% 100%, 0 64%);


}
.profile{
  background-color: white;
  border-color: antiquewhite!important;
  box-shadow: 0vmin!important;
} */
.profile {
  border: 5px solid white!important;
  margin-top: -6rem;
  margin-bottom: 1rem;
  max-width: 9rem;
  margin-right: 20px;
}

.repeat-bt {
        
        font-size: 12px;
        cursor: pointer;
        -webkit-animation: glowing 1500ms infinite;
     }

     @-webkit-keyframes glowing {
  0% { background-color: #fff; -webkit-box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #fff; -webkit-box-shadow: 0 0 3px #fff; }
}

@-moz-keyframes glowing {
  0% { background-color: #fff; -moz-box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #fff; -moz-box-shadow: 0 0 3px #fff; }
}

@-o-keyframes glowing {
  0% { background-color: #fff; box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #fff; box-shadow: 0 0 3px #fff; }
}

@keyframes glowing {
  0% { background-color: #fff; box-shadow: 0 0 3px #fff; }
  50% { border-color: #FF0000; color: #FF0000; box-shadow: 0 0 10px #FF0000; }
  100% { background-color: #fff; box-shadow: 0 0 3px #fff; }
}
    .undo{
      top: 80%;
      right:0;
      transform: translateY(-20%);
      position: fixed;
      z-index: 1050;
    }
    .datepicker table tr td.active{
      background-image: linear-gradient(to bottom, #bc7509, #a05535)!important;
      /* background-color: #bc7509!important; */
      
    }
    .datepicker table tr td span.active{
      background-image: linear-gradient(to bottom, #bc7509, #a05535)!important;
      /* background-color: #bc7509!important; */
      
    }
    .datepicker-switch{
      color: #a05535;
    }
    .message-bt {
        
        font-size: 12px;
        
        -webkit-animation: messaging 1500ms infinite;
     }

     @-webkit-keyframes messaging {
  0% { background-color: #fff; -webkit-box-shadow: 0 0 3px #fff; }
  50% { border-color: #419aee; color: #419aee; -webkit-box-shadow: 0 0 40px #419aee; }
  100% { background-color: #fff; -webkit-box-shadow: 0 0 3px #fff; }
}

@-moz-keyframes messaging {
  0% { background-color: #fff; -moz-box-shadow: 0 0 3px #fff; }
  50% { border-color: #419aee; color: #419aee; -moz-box-shadow: 0 0 40px #419aee; }
  100% { background-color: #fff; -moz-box-shadow: 0 0 3px #fff; }
}

@-o-keyframes messaging {
  0% { background-color: #fff; box-shadow: 0 0 3px #fff; }
  50% { border-color: #419aee; color: #419aee; box-shadow: 0 0 40px #419aee; }
  100% { background-color: #fff; box-shadow: 0 0 3px #fff; }
}

@keyframes messaging {
  0% { background-color: #fff; box-shadow: 0 0 3px #fff; }
  50% { border-color: #419aee; color: #419aee; box-shadow: 0 0 10px #419aee; }
  100% { background-color: #fff; box-shadow: 0 0 3px #fff; }
}
table.dataTable.dtr-column>tbody>tr>td.dtr-control, table.dataTable.dtr-column>tbody>tr>th.dtr-control, table.dataTable.dtr-column>tbody>tr>td.control, table.dataTable.dtr-column>tbody>tr>th.control {
    position: relative;
    cursor: pointer;
}
.dtr-data{
  border-bottom: 1px #444;
  margin-left: 20px;
  text-align: center;
  display: flex;
  
  
}
.dtr-details li {
  margin-bottom: 5px;
}
table.dataTable.dtr-column>tbody>tr.parent td.dtr-control:before, table.dataTable.dtr-column>tbody>tr.parent th.dtr-control:before, table.dataTable.dtr-column>tbody>tr.parent td.control:before, table.dataTable.dtr-column>tbody>tr.parent th.control:before {
    content: '-';
    background-color: #d33333;
}
table.dataTable.dtr-column>tbody>tr>td.dtr-control:before, table.dataTable.dtr-column>tbody>tr>th.dtr-control:before, table.dataTable.dtr-column>tbody>tr>td.control:before, table.dataTable.dtr-column>tbody>tr>th.control:before {
    top: 50%;
    left: 50%;
    height: 0.8em;
    width: 0.8em;
    margin-top: -0.5em;
    margin-left: -0.5em;
    display: block;
    position: absolute;
    color: white;
    border: 0.15em solid white;
    border-radius: 1em;
    box-shadow: 0 0 0.2em #444;
    box-sizing: content-box;
    text-align: center;
    text-indent: 0 !important;
    font-family: 'Courier New', Courier, monospace;
    line-height: 1em;
    content: '+';
    background-color: #31b131;
}
table.dataTable>tbody>tr.child ul.dtr-details {
    display: inline-block;
    list-style-type: none;
    margin: 0;
    padding: 0;
}
table.dataTable>tbody>tr.child span.dtr-title {
    display: inline-block;
    min-width: 75px;
    font-weight: bold;
}

.adminTR {
  display: block; 
  border: 0.5px solid lightgray;
  width: auto;
}
.adminTR td {
  border: none!important;
}
td.break {
  float: left!important;
  /* text-align: center; */
  line-height: 22px;
}

.steps-td {
             clip-path: polygon(100% 0%, 100% 74%, 49% 96%, 0 75%, 0 0);
             background-color: #bc7509;
             color: #fff;

}
.steps-shadow {

  filter: drop-shadow(-1px 6px 3px rgba(50, 50, 0, 0.5));
}
#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #fff;
}

.loader {
	width: 30px;
	height: 30px;
	border: 3px solid #a05535;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	border-left-color: transparent;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
	}

@keyframes loader {
	0% {
		transform: rotate(0deg);
	}
	50% {
		transform: rotate(180deg);
	}
	100% {
		transform: rotate(360deg);
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
	}
	50% {
		-webkit-transform: rotate(180deg);
	}
	100% {
		-webkit-transform: rotate(360deg);
	}
}


</style>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.21/api/sum().js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.21/sorting/stringMonthYear.js"></script> --}}
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
  
  </head>
