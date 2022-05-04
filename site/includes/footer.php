</main>

    <footer>
        <p>Site desenvolvido como exemplo</p>
    </footer>
    <?php    
  $fuzo = new DateTimeZone ("america/sao_paulo");
  $DateAndTime = new DateTime("now",$fuzo);  
  echo $DateAndTime  -> format("d/m/Y H:i"); 
  ?>  
    </body>


</html>