<style>
.logo{
    width : 300px;
    height : 70px;
    display : block;
    margin-left: 570px;
    
}
footer {
  background-color: #333333  ;
  padding: 1rem 0.5rem 2rem;
  position:absolute;
  bottom:0;
  width:100%;
  color : white;
}
footer a:hover{
    color : red;

}
</style>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyParking</title>

        

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.css"  />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       
</head>




    <body>

        <nav class="navbar is-dark">
            <div class="navbar-menu">
                <div class="navbar-start">
                    <a href="/"><img class="logo" src="image/logo.png" alt=""></a>
                </div>
                <div class="navbar-end">
                    @if(auth()->check())
                        <a href="/compte-admin" class="navbar-item {{(request()->is('mon-compte')) ? 'is-active' : '' }}  "><i class="fa fa-user-circle-o" style="font-size:24px"></i></i>Mon espace</a>
                        <a href="/deconnexion" class="navbar-item ">Déconnexion<i class="fa fa-sign-out" style="font-size:24px"></i></a>
                    @else
                        <a href="/inscription" class="navbar-item">Inscription<i class="fa fa-mouse-pointer {{(request()->is('inscription')) ? 'is-active' : '' }} " style="font-size:24px"></i></a>
                        <a href="/connexion" class="navbar-item {{(request()->is('connexion')) ? 'is-active' : '' }} ">Connexion<i class="fa fa-sign-in" style="font-size:24px"></i></a>
                    @endif
                    
                </div>
            </div>
        </nav>
            


            <div class="container">
                </br>
                @include('flash::message')
                @yield('contenu')
            </div>
    </body>
    

    <footer>
        <div class="content has-text-centered">
            <p>
            <strong class="stg" style="color : white;">MyParking</strong> 
            </p>
        </div>
    </footer>


    
             
</html>

