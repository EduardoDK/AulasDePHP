<style>
  
        nav{
            background-color:salmon;
            padding:20px;
           
        }
        a{
            margin-left:40px;
            padding:10px;
            text-decoration:none;
            color:white; 
            font-size:17px;
        }
        a:hover{
            font-size:18px;
        }
     

</style>
<div>
        <nav>
            <?php
                 session_start();

                if($_SESSION['login'] == "false"){
                    include('logado.php');
                }
                else{
                    
                    include('deslogado.php');
                }

            ?>
        </nav>
    </div>