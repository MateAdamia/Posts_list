<a href={{"list"}}>list</a>
<table  border =1>
    <tr>
        
        <td>title</td>
        <td>body</td>
        <td>author</td>
        <td>active</td>
        
        @foreach ($lm as $k)
        <tr>
           
            <td>{{$k->title}}</td>
            <td>{{$k->body}}</td>
            <td>{{$k->author}}</td>
            <td>{{$k->active}}</td>
            

        
        
        
        </tr>
        

    @endforeach






    
    
    
    
    
    
    </tr>

  








</table>