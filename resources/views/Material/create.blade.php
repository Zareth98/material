<html>
    <head>
        <title>Nuevo libro</title>
    </head>
    <body>
        <h1>Nuevo libro</h1>
        <form method="post" action="Insertar.jsp">
        <table cellpadding="2" cellspacing="2"  
                   width="80%">
    
    <tr>
                <th>Nombre:</th>
                <td><input name="name" type="text"></td>
         <tr>
                <th>Autor:</th>
                <td><input name="year" type="text"></td>
            </tr>
            </tr>
            <tr>
                <th>ISBN:</th>
                <td><input name="isbn" type="text"></td>
            </tr>
            <tr>
                <th>Año:</th>
                <td><input name="year" type="text"></td>
            </tr>
    
            <tr>
                <th>Páginas:</th>
                <td><input name="paginas" type="text"></td>
            </tr>

              </table>
       <br> 


<button name="button">			
    <a href="https://twitter.com/ney01010">
        <img class="button-img" src="Image/NekoGrande1.png">
    </a>
</button>
        <br>
          <br>
            <input name="pagemode" type="hidden" value="submit">
            <input type="submit" type= "center" value="Añadir el nuevo libro">

            
        
    </body>
</html>