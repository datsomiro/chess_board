<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .board .row {
            width: 24;
            display: flex;

        }

        .board .row > td {
            width: 3em;
            height: 3em;
        }

        .board .white {
            background-color: #c2c2c2;
            border:1px solid black;
        }

        .board .black {
            background-color: #525252;
        }
    </style>
        <table class="board">
            <?php
                for($row = 1; $row <= 8; $row++){
                    
                echo "<tr class= 'row'>";
                for($column = 1; $column <= 8; $column++)
                {
                    if(($row+$column)%2===0){
                        echo "<td class='black'></td>";
                    }else{
                        echo "<td class= 'white'></td>"; 
                        }   
                        }
                echo "</tr>";
                };
                
                
                
            ?>;
            
            
        </table>
    </body>
     //   <?php
     //   
     //   $background_url = "img/king.png";
//
     //   if ($row=4||$column=2)
     //   {
     //       echo "<div style=" url('img/king.png')">",
     //   }
     //   ?>
    </body>
    </html>

    