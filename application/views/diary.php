<html>
    <head>
        <title>
            My Diary
        </title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
    </script>        
    </head>
    <body>
        
<table bgcolor="#ffdab9" width="80%" border="1" cellspacing="0" cellpadding="5" bordercolor="#ff0000">
   <tr><td bgcolor="#fafad2" align="center">
<b>10:00</b></td>
<td bgcolor="#fafad2" align="center">
<b>12:00</b></td>
<td bgcolor="#fafad2" align="center">
<b>02:00</b></td>
<td bgcolor="#fafad2" align="center">
<b>04:00</b></td>
<td bgcolor="#fafad2" align="center">
<b>06:00</b></td>
<td bgcolor="#fafad2" align="center">
<b>08:00</b></td>
<td bgcolor="#fafad2" align="center">
<b>10:00</b></td>
</tr>
<tr>
<td class="day_num" width="85" height="60">
    <b class="day_num">1</b>
    <b class="content1" ><?php echo $d1;?></b>
</td>
<td class="day_num" width="85" height="60">
<b class="day_num">2</b>
<b class="content1" ><?php echo $d2;?></b></td>
<td class="day_num" width="85" height="60">
<b class="day_num">3</b>
<b class="content1" ><?php echo $d3;?></b></td>
<td class="day_num" width="85" height="60">
<b class="day_num">4</b>
<b class="content1" ><?php echo $d4;?></b></td>
<td class="day_num" width="85" height="60">
<b class="day_num">5</b>
<b class="content1" ><?php echo $d5;?></b></td>
<td class="day_num" width="85" height="60">
<b class="day_num">6</b>
<b class="content1" ><?php echo $d6;?></b></td> 
<td class="day_num" width="85" height="60">
<b class="day_num">7</b></td>
</tr>

</table><script type="text/javascript">
           $(document).ready(function()
           {    $('.day_num').click(function(){
               day_num=$(this).find('.day_num').html();
               //day_num=$dt;
               alert(day_num);
               day_data=prompt("Enter Stuff",$(this).find('.content1').html()); 
               if(day_data != null)
               {
                   $.ajax({
                      url: window.location,
                     
                      type: 'POST',

                      
                      data: {
                          day: day_num,
                          data: day_data               
                      },
                      success: function(msg)
                      {
                        location.reload();
                     }

                   });
               }
           }     
            
            );
           });
    </script>
</body>
</html>
