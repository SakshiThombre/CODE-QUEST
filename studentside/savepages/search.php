<script>
            $(document).ready(function()
            {
                $('#txtname').keyup(function(){
                    search_table($(this).val());
                  
                });
                $('#txtCname').keyup(function(){
                    search_table($(this).val()); 
                   
                });
                function search_table(value){
                    $('#display #t1').each(function(){
                        var found='false';
                        $(this).each(function()
                        {
                         
                            if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                            {
                                found='true';
                              
                            }
                        });
                        if(found=='true')
                        {
                            $(this).show();
                         
                             var values=[];
                             var count=0;
                             $(this).find("td").each(function(){
                                   values[count]=$(this).text();
                                   count++;
                            });     
                            $("#txtsaleman").val(values[4]);
                           
                        }
                        else
                        {
                            $(this).hide();
                         
                        }
                       
                    });
                }
               
            });

          
           
        </script>
