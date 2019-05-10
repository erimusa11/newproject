
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.css">

    <!---Jquery-->
    <script src="js/jquery.min.js"></script>
    <script src="js/moment.min.js"></script>

    <!--- Full calendar -->
    <link rel="stylesheet" href="css/fullcalendar.min.css">
    <script src="js/fullcalendar.js"></script>
    <script src="js/it.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
    
    <script src="js/bootstrap-clockpicker.js"> </script>
    <link rel="stylesheet" href="css/bootstrap-clockpicker.css">
    <script>
 
    </script>
    
    <style>
        .fc th{
            padding: 10px 0px;
            vertical-align: middle;
            background: #EDECDE;
        }
        .fc{
            width: auto;
        }
    
        .fc-unthemed td.fc-sun{
            background: #C9FFBF;
        }
        
        .fc-state-default {
            background: black;
             border-color: black;
            color: white;
            padding: 5px 5px;
  
         text-align: center;
             outline: none;
             font-family: "Times New Roman", Times, serif;

        }
        .fc-state-default:active{
    background:#9c9c9c;
}
    
      
    </style>

<script>
     
 



        $(document).ready(function() {
            $('#myCalendar').fullCalendar({
                header: {
                    left: 'today,prev,next,myCustomButton',
                    center: 'title',
                    right: 'month,basicweek,basicDay,agendaWeek,agendaDay'
                } , selectable:true,  selectHelper:true,
              /*  customButtons: {
                    myCustomButton: {
                        text: 'custom!',
                        click: function() {
                            alert('clicked the custom button!');
                        }
                    }
                }, */
                    columnFormat:'dddd', 
                    

                select: function(date, end, jsEvent, view ) {
              
                    $( "div.demo-container" ).html();
                    $('#btnAdd').prop('disabled',false);
                    $('#btnModify').prop('disabled',true);
                    $('#btnDelete').prop('disabled',true);
                    
                    emptyFormular();
                   
                    $('#txtDate').val(moment(date).format('YYYY-MM-DD'))
                  
                    $('#txtDateEnd').val(moment(end).format('YYYY-MM-DD'));
                    $('#eventModal').modal();
                },  

                plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
                timeZone: 'UTC',
                editable: true,
                eventLimit: true,
               events: 'http://localhost/newproject/calendar/eventpdo.php',

                eventClick: function(calEvent,jsEvent,view){
                    
                    $('#btnAdd').prop('disabled',true);
                    $('#btnModify').prop('disabled',false);
                    $('#btnDelete').prop('disabled',false);
                    
                    
                    
                    //H2
                    $('#eventTitle').html(calEvent.title);
                    
                    //show info of events on input
                    $('#txtDescription').val(calEvent.description);
                    $('#txtID').val(calEvent.id);
                    $('#txtTitle').val(calEvent.title);
                    $('#txtColor').val(calEvent.color);
                    
                    DayHour = calEvent.start._i.split("  ");
                     $('#txtDate').val(DayHour[0]);
                     $('#txtDateEnd').val(DayHour[0])
                     
      
                    $('#eventModal').modal();
                },
                
                editable: true,
                eventDrop: function(calEvent){
                    $('#txtID').val(calEvent.id);
                    $('#txtTitle').val(calEvent.title);
                    $('#txtColor').val(calEvent.color);
                    $('#txtDescription').val(calEvent.description);
                    
                    
                    var dayHour = calEvent.start.format().split("T");
                    $('#txtDate').val(dayHour[0]);
                    $('#txtHour').val(dayHour[1]);
                    $('#txtDateEnd').val(dayHour[0]);
                    $('#txtHourEnd').val(dayHour[1]);
                    
                    
                    reuseFunction();
                    sendInformation('modify',newEvent,true); 
                },eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

edit(event);

}
            });

        });
 
   </script>

 
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12"> <br><br>
                <div id="myCalendar"></div>
            </div>
            
        </div>
    </div>


     <!-- Modal (add, modify, delete)-->
    <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-body">
                   <div id="eventDescription"></div>
                   
                   
                  <div class="form-row">
                     <div class="form-group col-md-4" hidden>
                    <label for="txtID">ID:</label>
                    <input type="text" id="txtID" name="txtID" class="form-control"  placeholder="Event's ID">
                    </div>
                    <div class="form-group col-md-12">
                    <label for="txtTitle">Titolo:</label>
                    <input type="text" id="txtTitle" class="form-control" placeholder="Event's Title"> 
                    </div>
                    </div>
          
                    <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="txtDate">Data Inizio:</label>
                    <input type="date" id="txtDate" name="txtDate" class="form-control" value=""/>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="txtHour">Ora inizio:</label>
                    <div class="input-group clockpicker" data-autoclose="true">
                    <input type="time" id="txtHour" value="01:00:00" class="form-control">
                    </div>
                    </div>
                    </div>
                   

                    <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="txtDateEnd">Data fine:</label>
                    <input type="date" id="txtDateEnd" name="txtDateEnd" class="form-control" value=""/>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="txtHour">Ora fine:</label>
                    <div class="input-group clockpicker" data-autoclose="true">
                    <input type="time" id="txtHourEnd" value="23:59:00" class="form-control">
                    </div>
                    </div>
                    </div>
                   



                   
                    <div class="form-group">
                    <label for="txtDescription">Descrizione:</label>
                    <textarea type="text" id="txtDescription" rows="5" class="form-control"> </textarea>
                    </div>
                    
                    <div class="form-group">
                    <label for="txtColor">Colore:</label>
                    <input type="color" id="txtColor" value="ff0000"  class="form-control" style="height:36"> <br/>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" id="btnAdd" class="btn btn-success">Crea Ecento</button>
                    <button type="button" id="btnModify" class="btn btn-secondary">Modifica</button>
                    <button type="button" id="btnDelete" class="btn btn-danger">Elimina</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Anula</button>
                </div>
            </div>
        </div>
    </div>
    
    
    <script>
        
         var newEvent;
    //jquery add button function
    $('#btnAdd').click(function(){
    reuseFunction();
    sendInformation('add',newEvent);  
    });
        
 
    //jquery delete button function    
    $('#btnDelete').click(function(){
    reuseFunction();
    sendInformation('delete',newEvent); 
    });
        
        
    //jquery modify button function
    $('#btnModify').click(function(){
    reuseFunction();
    sendInformation('modify',newEvent);  
    });  
        
        function reuseFunction(){
             newEvent ={
           id:$('#txtID').val(),
           title:$('#txtTitle').val(),
           start:$('#txtDate').val()+" "+$('#txtHour').val(),
           color:$('#txtColor').val(),
           description:$('#txtDescription').val(),
           textColor:"#FFFFFF",
           end:$('#txtDateEnd').val()+" "+$('#txtHourEnd').val()
           
                };
            
        }
        
        
        function sendInformation(get,objEvent,modal){
            $.ajax({
                type:'POST',
                url: 'calendar/eventpdo.php?get='+get,
                dataType : "json",
                data: objEvent,
                success: function(msg){
                    if(msg){
                         $('#myCalendar').fullCalendar('refetchEvents');
                         if(!modal){
                         $('#eventModal').modal('toggle');
                        }
                    }
                },
                erro:function(){
                    alert("Error!!");
                }
            });
        }
        
        
        $('.clockpicker').clockpicker();
        
        function emptyFormular(){
             $('#txtID').val('');
             $('#txtTitle').val('');
             $('#txtColor').val('');
             $('#txtDescription').val('');
             $('#txtID').val('');
            
        }
        
    </script>

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

</body>

</html>