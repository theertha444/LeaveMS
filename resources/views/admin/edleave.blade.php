<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
       * {
           box-sizing: border-box;
        
       }

       input[type=text],
       select,
       textarea {
           width: 50%;
           padding: 12px;
           border: none;

           border-radius: 8px;
           background-color: azure;

       }
       input[type=text],
       select,
       textarea {
           width: 50%;
           padding: 12px;
           border: none;

           border-radius: 8px;
           background-color: azure;

       }



       label {
           padding: 12px 12px 12px 0;
           display: inline-block;
           
       }

       .container {
           border-radius: 8px;
           background-color: #eeaeca;
           padding: 80px;
           margin-left: 300px;
          
           width: 50% ;


       }
       

       input[type=submit] {
           background-color: green;
           color: white;
           padding: 12px;
           border-radius: 8px;
           float: left;
           border:30px;
          
           
           margin-top: 20px;
       }

       /* .col-1 {
           float: left;
           width: 25%;
           margin-top: 6px;
           color: white;
       }

       .col-2 {
           float: left;
           width: 75%;
           margin-top: 6px;
           
       } */

       /* .row::after {
           content: "";
           display: table;
           clear: both;
       } */
       .Form{
        text-align:center;
        
       }
       </style>

</head>
<body>
<div class="container">
@foreach($result as $value)
<form action="/edleaveAction/{{$value->id}}" method="post" autocomplete="off">
    @csrf
    
            <div class="Form">
                <h1>Edit Page</h1>
 
            </div>
            <div class="row">
                <div class="col-1">
                    <lablel for="serialno">serialno</lablel>
                </div>
                <div class="col-2">
                    <input type="text" id="serialno" name="serialno" value="{{$value->serialno}}">
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <label for="leavetype">leavetype</label>
                </div>
                <div class="col-2">
                    <input type="text" id="leavetype" name="leavetype"  value="{{$value->leavetype}}">
                </div>
            </div>
            @endforeach

</form>

    
</body>
</html>