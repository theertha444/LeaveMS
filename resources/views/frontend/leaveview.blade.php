<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        table,th,td{
           
            border-collapse:collapse;
            width:50%;
            border-bottom: 1px solid #ddd;
           
            padding: 10px;
  text-align: left;
           


        }
        /* th{
            background-color:skyblue;
            color:white;
        } */
        table.center{
            margin-left: auto; 
            margin-right: auto;
            margin-top:50px;

        }
        .log{
            width:8%;
            border:30px;
            padding:10px;
            margin-top:20px;
             border-radius:5px;
            /* box-shadow:10px 5px 5px lightgrey; */
            /* background-color:grey;
            margin-left:300px; */ 
            text-align:center;
            margin-left:300px;
            background-color:green;
            
            
            color:white;

        }
        tr:hover {background-color: coral;}
        </style>
        </head>
        <body>
            <table class="center">
          
            
                
               
               
                <thead>
              
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>leavetype</th>
                        <th>fromdate</th>
                        <th>todate</th>
                        <th>description</th>
                        
                        <!-- <th>status</th> -->
    </tr>
   
    </thead>
    <tr>
    @foreach($contents as $value)
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->leavetype}}</td>
        <td>{{$value->fromdate}}</td>
        <td>{{$value->todate}}</td>
        <td>{{$value->description}}</td>
        
        <!-- <td>{{$value->status}}</td>
        <td><a href="/approve/{{$value->id}}">Approve</a></td>
       <td><a href="/decline/{{$value->id}}">Decline</a></td>  -->
    </tr>
    
    
    @endforeach
    </table>
    <div class="log">
    <td><a style="text-decoration:none; color:white;" href="login">Logout</a></td> 
    </div>
    </body>
    </html>

