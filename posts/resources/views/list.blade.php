<h1>Posts</h1>

<table  border =1>
    <tr>
        <td>Title</td>
        <td>Body</td>
        <td>Author</td>
        <td>Active</td>
        

    
    
    
    
    
    
    </tr>

    @foreach ($key as $k)
        <tr>
           
            <td>{{$k['title']}}</td>
            <td>{{$k['body']}}</td>
            <td>{{$k['author']}}</td>
            <td>{{$k['active']}}</td>
          
            

        
        
        
        </tr>
        

    @endforeach








</table>