
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
        
    
    </style>

<script>
        $(document).ready(function() {
            $('#myCalendar').fullCalendar({
                header: {
                    left: 'today,prev,next,myCustomButton',
                    center: 'title',
                    right: 'month,basicweek,basicDay,agendaWeek,agendaDay'
                },
              /*  customButtons: {
                    myCustomButton: {
                        text: 'custom!',
                        click: function() {
                            alert('clicked the custom button!');
                        }
                    }
                }, */

                dayClick: function(date, jsEvent, view) {
                    
                    $('#btnAdd').prop('disabled',false);
                    $('#btnModify').prop('disabled',true);
                    $('#btnDelete').prop('disabled',true);
                    
                    emptyFormular();
                    $('txtDate').val(date.format());
                    $('#eventModal').modal();
                },
               events: 'http://localhost/calendar/eventpdo.php',

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
                    
                    
                    reuseFunction();
                    sendInformation('modify',newEvent,true); 
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
                <div class="modal-header">
                    <h5 class="modal-title" id="eventTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                   <div id="eventDescription"></div>
                   
                   
                    <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="txtID">ID:</label>
                    <input type="text" id="txtID" name="txtID" class="form-control"  placeholder="Event's ID">
                    </div>
                    <div class="form-group col-md-8">
                    <label for="txtTitle">Title:</label>
                    <input type="text" id="txtTitle" class="form-control" placeholder="Event's Title"> 
                    </div>
                    </div>
          
                    <div class="form-row">
                    <div class="form-group col-md-8">
                    <label for="txtDate">Date:</label>
                    <input type="date" id="txtDate" name="txtDate" class="form-control" value=""/>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="txtHour">Hour:</label>
                    <div class="input-group clockpicker" data-autoclose="true">
                    <input type="time" id="txtHour" value="" class="form-control">
                    </div>
                    </div>
                    </div>
                   
                   
                    <div class="form-group">
                    <label for="txtDescription">Description:</label>
                    <textarea type="text" id="txtDescription" rows="5" class="form-control"> </textarea>
                    </div>
                    
                    <div class="form-group">
                    <label for="txtColor">Color:</label>
                    <input type="color" id="txtColor" value="ff0000"  class="form-control" style="height:36"> <br/>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" id="btnAdd" class="btn btn-success">Add</button>
                    <button type="button" id="btnModify" class="btn btn-secondary">Modify</button>
                    <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
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
           end:$('#txtDate').val()+" "+$('#txtHour').val()
           
                };
            
        }
        
        
        function sendInformation(get,objEvent,modal){
            $.ajax({
                type:'POST',
                url: '/calendar/eventpdo.php?get='+get,
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