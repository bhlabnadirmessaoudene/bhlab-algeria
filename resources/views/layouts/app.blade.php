<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title>BH LAB</title>
    
  
    <!-- Scripts -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Fonts -->
    
    
    

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Styles -->
 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style type="text/css">



  
}
      #footer{background:rgb(19, 17, 17);position:relative}
      .footerLogo { font-size: 1.8em; font-weight: 600; color: rgb(250, 249, 249); margin-bottom: 22px; display: block; }
      #footer::before{content:"";background:linear-gradient(to right,rgb(235, 99, 9) 0,#c453f1 50%,#fff 100%);height:25px;width:100%;position:absolute}
      .footer-wrapper{padding:50px 0;float:left;width:100%}
      img.footer-logo{margin-bottom:20px}
      ul.social-icons{margin:0; padding: 0;}
      ul.social-icons li{background:#fff;width:30px;height:30px;border:1px solid #f1f2f2;border-radius:4px;margin:3px;text-align:center; display: inline-block;}
      ul.social-icons li a{color:#000000;font-size:25px;line-height:30px}
      ul.social-icons li a:hover{color:#e6af19;transition:all 1s}
      ul.footer-links { padding: 0;  list-style-type: none; position: relative;}
      ul.footer-links li{line-height:25px; padding-left: 15px; }
      ul.footer-links li:before { position: absolute; content: ; font-family: FontAwesome; left: 0;}
      ul.footer-links li a{color:#e0e3e9}
      ul.footer-links li a:hover{color:#e18127; text-decoration: none;}
      ul.contact{margin:0;padding:0}
      ul.contact li{list-style:none;padding:15px 0;border-bottom:1px solid #f1f2f2;font-size:13px;font-weight:600;line-height:15px;}
      ul.contact li i{font-size:18px;margin-right:20px;color:#27aae1} 
      ul.contact li a{color:#e0e3e9}
      ul.contact li a:hover{color:#e18127; text-decoration: none;}
      .copyright{background:#faf3f5;text-align:center;color:#fff;padding:12px 0 4px}


      
      .megamenu {
    background: #e7e2e2;
    z-index: 15;
  }

  .megamenu .navbar-brand {
  display: inline-block;
  padding-top: 0.32rem;
  padding-bottom: 0.32rem;
 margin-right: 15rem;
  font-size: 1.125rem;
  line-height: inherit;
  white-space: nowrap;
  
 
}


  .megamenu .megamenu-nav {
    padding: 0;
    margin: 0;
  }
  .megamenu .megamenu-nav .nav-item {
    display: block;
  }
  .megamenu .megamenu-nav .nav-item.is-open > .megamenu-content {
    visibility: visible;
    opacity: 1;
  }
  .megamenu .megamenu-nav .nav-item.is-open > .nav-link {
    background: rgb(0,168,186);
    
  }
  .megamenu .megamenu-nav .nav-link {
    color: rgb(36, 50, 136);
    padding: 15px 30px;
  }
  .megamenu .megamenu-nav .nav-link:hover {
    background: rgb(0,168,186);
    color: #333;
  }
  .megamenu .megamenu-content {
    margin-top: 50px;
    position: fixed;
    left: 0;
    right: 0;
    top: 64px;
    overflow: hidden;
    visibility: hidden;
    opacity: 0;
    z-index: 14;
    transition: all .3s ease-in-out;
  }
  .megamenu .megamenu-content .container {
    padding: 45px 15px;
  }
  .megamenu .megamenu-content .subnav {
    margin: 0;
    padding: 0;
  }
  .megamenu .megamenu-content .subnav-item {
    display: block;
  }
  .megamenu .megamenu-content .subnav-item .subnav-link {
    padding: 10px 0;
    display: block;
  }
  
  .megamenu-background {
    margin-top: 30px;
    background: #fff;
    position: absolute;
    left: 0;
    top: 54px;
    right: 0;
    height: 0;
    transition: all .3s ease-in-out;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
    z-index: 13;
  }
  
  .megamenu-dim {
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    left: 0;
    right: 0;
    bottom: 0;
    top: 54px;
    visibility: hidden;
    opacity: 0;
    z-index: -12;
    transition: all .3s ease-in-out;
  }
  body.megamenu-visible .megamenu-dim {
    z-index: 12;
    visibility: visible;
    opacity: 1;
  }

 
		.nav-item .submenu{ 
			display: none;
			position: absolute;
			left:100%; top:-7px;
		}
		.nav-item .submenu-left{ 
			right:100%; left:auto;
		}
    .dropdown-submenu {
                position: relative;
            }

            .dropdown-submenu> a:after {
                content: ">";
                float: right;
            }

            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: 0px;
                margin-left: 0px;
            }

            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }

			.column {
  float: left;
  width: 50%;
  padding: 10px;
  
      }

      .contain{
        overflow: hidden;
      }
  .filterDiv {
  
 

  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */


/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}
}

@media (max-width: 768px) {
    .fixed-top-sm {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
    }
}
      </style>

      
      
     
</head>
<body>
    <div id="app">
   
      <nav class="navbar navbar-expand-md fixed-top justify-content-start flex-nowrap bg-light navbar-dark">
       
        <ul class="navbar-nav ml-auto flex-row">
          <h4 class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone-forward mr-3" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm10.762.135a.5.5 0 0 1 .708 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 0 1-.708-.708L14.293 4H9.5a.5.5 0 0 1 0-1h4.793l-1.647-1.646a.5.5 0 0 1 0-.708z"/>
          </svg>(+213) 770001252</i></h4>
          <h4><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope mr-3 ml-4" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
          </svg>sav.bhlab@bhinvest.net </i></h4>

        
        </ul>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
     <nav class="megamenu navbar  fixed-top navbar-expand-md  mt-5 ">
     
      
              <!-- Right Side Of Navbar -->
             
              <div class="container">
               
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('image/lole.png') }}" style="height: 80%" >
                </a>
                  <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                
                      <ul class="navbar-nav ml-auto">
                        <ul class="megamenu-nav d-flex justify-content-center mr-auto">

              
            
                          <!-- Authentication Links -->
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                              
                              <i class="fa fa-home"></i>
                            </a>
                           </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{{ route('product') }}">{{ __('produits') }}</a>
                        </li>
                           <li class="nav-item is-parent">
                            <a class="nav-link" href="{{route('about')}}" id="megamenu-dropdown-1" aria-haspopup="true" aria-expanded="false">
                              Présentation<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="megamenu-content" aria-labelledby="megamenu-dropdown-1">
                              <div class="container">
                                <div class="row">
                                  <div class="col-7 pr-5">
                                    <h3 class="">À-propos de BH-LAB</h3>
                                    <hr>
                                   
                                      
                                       <h2>
                                         Avec plus de 12 ans d’expériences dans le domaine du diagnostic médical et forte de ses 60 employés, BH LAB s’impose comme un acteur majeur dans le marché algérien.
                                          Présente aussi bien chez les grands laboratoires privés qu’en milieu hospitalier, BH LAB séduit par la diversité des produits qu’elle propose.</h2>
                                          <h2 >
                                          Notre politique tend à répondre au maximum aux différents besoins de nos partenaires et cela au travers des différentes gammes que nous proposons.</p>
                                       </h2>
                                       <a href="{{route('about')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Aller plus loin</a>
                                        
                                      
                                      
                                    </div>
                                   
                                  
                                  <div class="col-5">
                                    <img src="{{ asset('image/pre.jpg') }}"  width="450" height="450" class=" mb-3" alt="test image">
                                  
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                           </li>
                           <li class="nav-item is-parent">
                            <a class="nav-link" href="{{route('fournisseur')}}" id="megamenu-dropdown-2" aria-haspopup="true" aria-expanded="false">
                              Fournisseur<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="megamenu-content" aria-labelledby="megamenu-dropdown-2">
                              <div class="container">
                                <div class="row">
                                  <div class="col-7 ">
                                    
                                    <div class="row">
                                      
                                      <div class="col-5">
                                        <h3 class="">Familles</h3>
                                        <hr>
                                        <ul class="subnav">
                                       
                                              <li class="subnav-item">
                                                <div  id="myBtnContainer">
                           
                            
                                                  <button class="btn btn-info dropdown-item   active " onclick="filterSelection('all')"> Show all</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Immuno Analyses')"> Immuno Analyses</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Chimie Clinique')"> Chimie Clinique</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Immuno Hémathologie')"> Immuno Hémathologie</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Auto Immunité')"> Auto Immunité</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Hémostase')"> Hémostase</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Acute Care')"> Acute Care (Gaz de sang)</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Consommables')"> Consommables</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Typage HLA')"> Typage HLA</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Bio moléculaire')"> Bio moléculaire</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Immuno chimie')"> Immuno chimie</button>
                                                  <button class="btn btn-info dropdown-item " onclick="filterSelection('Hémathologie')"> Hémathologie</button>
                                      
                                              
                                            </div>
                                            <a href="{{route('fournisseur')}}" class="btn btn-primary  active mt-4" role="button" aria-pressed="true">Nos Fournisseurs</a>
                                              </li>
                                             
                                        </ul>
                                      </div>
                                    
                                       <div class="col-5">
                                        <h3 class="">Fournisseurs</h3>
                                        <hr>
                                        <ul class="subnav">
                                       
                                          <li class="subnav-item">
                                            <div class="contain"> 
                                              <div class="filterDiv all"><a href="https://www.abbott.com/">abbott</a></div>
                                              <div class="filterDiv Immuno Analyses Chimie Clinique Immuno Hémathologie"><a href="https://www.orthoclinicaldiagnostics.com/">ORTHO CLINICAL DIAGNOSTICS</a></div>
                                              <div class="filterDiv Auto Immunité Hémostase Acute Care"><a href=" https://www.werfen.com/">Werfen</a></div>
                                              <div class="filterDiv Immuno Analyses"><a href="https://www.diasorin.com/">DIASORIN </a></div>
                                              <div class="filterDiv Consommables"><a href=" https://www.capp.dk/">CAPP APS</a></div>
                                              <div class="filterDiv Typage HLA"><a href="https://www.onelambda.com/">OneLambda</a></div>
                                              <div class="filterDiv Immuno Analyses Bio moléculaire"><a href="http://www.adaltis.net/">ADALTIS</a></div>
                                              <div class="filterDiv all"><a href="http://www.arkray.co.jp/">ARKRAY</a></div>
                                              <div class="filterDiv Bio moléculaire"><a href=" http://entrogen.com/web3/">ENTROGEN USA</a></div>
                                              <div class="filterDiv Immuno Hémathologie"><a href="https://www.merckgroup.com/">MERCK SARL</a></div>
                                              <div class="filterDiv Auto Immunité"><a href="http://www.d-tek.be/">D-TEK sa BELGIQUE</a></div>
                                              <div class="filterDiv Immuno chimie"><a href="https://www.bindingsite.com/">BINDING SITE</a></div>
                                              <div class="filterDiv Bio moléculaire"><a href="https://sacace.com/">SACACE BIOTECHNOLOGIES</a></div>
                                              <div class="filterDiv all"><a href="https://www.bio-rad.com/">BIO-RAD</a></div>
                                              <div class="filterDiv Hémathologie"><a href="https://www.horiba.com/"> HORIBA</a></div>
                                            </div>
                                          </li>
                                        </ul>
                                       </div>
                                          
                                        
                                      
                                    </div>
                                   
                                  </div>
                                 
                                  <div class="col-5">
                                    <img src="{{ asset('image/paa.png') }}"  width="600" height="450" class=" mb-3" alt="test image">
                                    <p>Plus de 15 marques pour répondre aux différents besoins de nos partenaire.</p>
                                   
                                  </div>
                                </div>
                              </div>
                            </div>
                           </li>
                           <li class="nav-item is-parent">
                            <a class="nav-link" href="{{route('contact')}}" id="megamenu-dropdown-3" aria-haspopup="true" aria-expanded="false">
                              Contact<i class="fa fa-angle-down"></i>
                            </a>
                            <div class="megamenu-content" aria-labelledby="megamenu-dropdown-3">
                              <div class="container">
                                <div class="row">
                                  <div class="col-7 pr-5">
                                    <h3>Information</h3>
                                    <hr>
                                    <h2> * Address </h2>
                                    <p>BH LAB sarl 130 Cité Cadat 16012, Rouïba</p>
                                    <div class="row">
                                        <div class="col-md-5">
                                             <h2>* Téléphone</h2>
                                             <p>+213 21 85 52 00</p>
                                        </div>
                                        <div class="col-md-5">
                                          <h2>* Fax</h2>
                                          <p>+213 21 85 52 20</p>
                                        </div>
                                    </div>
                                    <h2>* E-mail</h2>
                                    <p>abh.bhlab@bhinvest.net</p>
                                    <a href="{{route('contact')}}" class="btn btn-primary  active mt-4" role="button" aria-pressed="true">Contacter-nous</a>
                                  </div>
                                  <div class="col-5">
                                    <div class="map bo8 bo-rad-9 of-hidden">
                                      <!--data-pin="images/icons/icon-position-map.png" 
                                      
                                      class="contact-map size37" id="google_map" data-map-x="40.704644" data-map-y="-74.011987" data-scrollwhell="0" data-draggable="1"
                                  
                                  -->
                                      <div class="contact-map size37">
                                          
                                          <iframe  src="https://maps.google.com/maps?q=BH%20Lab%20Alg%C3%A9rie&t=&z=13&ie=UTF8&iwloc=&output=embed" width="600" height="450" frameborder="0" style="border:0; margin:0 auto;" allowfullscreen></iframe>
                                      </div>
                                  </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                           </li>
                           <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">
                              
                              Support technique
                            </a>
                           </li>
                           </ul>
                           @guest
                           @if (Route::has('login'))
                               <li class="nav-item " >
                                   <a class="nav-link"  href="{{ route('login') }}">{{ __('Connection') }}</a>
                               </li>
                           @endif
                           
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a class="nav-link" href="{{ route('register') }}">{{ __('inscription') }}</a>
                               </li>
                           @endif
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }}
                               </a>
                 
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>
                 
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                   </form>
                               </div>
                           </li>
                       @endguest
                 
                      </ul>
                  </div>
                </div>
              
             
                   <div class="megamenu-background" id="megamenu-background"></div>
                
              
              
                  
                     
                  

                  
  </nav>
              
             
      
        </div>
       
        
       
        <main class="py-4">
            @if(session('success'))
        <div class="alert alert-success mt-5">
            {{ session('success')}}
        </div>
        
          @endif
        
          @if(session('danger'))
        <div class="alert alert-danger">
            {{ session('danger')}}
        </div>
        
          @endif
            @yield('content')
       
        </main>
      
    
           
     <!-- Footer -->

 <!--===============================================================================================-->       
   
    
        <!-- Footer -->
       <!-- Footer -->
       <footer id="footer" class="" style="background-color: black">
        <div class="container">
                <div class="footer-wrapper">
            <div class="row">                    
              <div class="col-md-3 col-sm-3">
                <a href="" class="footerLogo">Company</a>
                <ul class="social-icons">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-xing"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
              
              <div class="col-md-2 col-sm-2">
                <h5 style="color: azure">About</h5>
                <ul class="footer-links">
                  <li><a href="">About us</a></li>
                  <li><a href="">Contact us</a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href="">Terms</a></li>
                  <li><a href="">Help</a></li>
                </ul>
              </div>
              <div class="col-md-3 col-sm-3">
                <h5 style="color: azure">Contact Us</h5>
                <ul class="contact">
                  <li ><a href="https://www.google.com/maps/place/BH+Lab+Alg%C3%A9rie/@36.7381177,3.2729815,17z/data=!3m1!4b1!4m5!3m4!1s0x128e45f00db49887:0x3d6679ffdc636f78!8m2!3d36.7381177!4d3.2751702" ><i class="fa fa-home"></i>BH LAB sarl 130 Cité Cadat 16012, Rouïba</a></li>
                  <li style="color: azure"><i class="fa fa-phone"></i>Phone : +213 21 85 52 00
                  <br>
                    <i class="fa fa-phone"></i> Fax: +213 21 85 52 20
                  </li>
                  <li style="color: azure"><i class="fa fa-envelope"></i>abh.bhlab@bhinvest.net </li>

                 
                </ul>
              </div>
            </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
          <p>Company © 2019. All rights reserved</p>
        </div>
          </footer>												                            
<!-- Footer -->


  <!-- Back to top -->
  <div class="btn-back-to-top bg0-hov" id="myBtn">
      <span class="symbol-btn-back-to-top">
          <i class="fa fa-angle-double-up" aria-hidden="true"></i>
      </span>
  </div>


  <!-- Footer -->
</body>
<script type="text/javascript">
	$(".btn-group, .dropdown").hover(
                        function () {
                            $('>.dropdown-menu', this).stop(true, true).fadeIn("fast");
                            $(this).addClass('open');
                        },
                        function () {
                            $('>.dropdown-menu', this).stop(true, true).fadeOut("fast");
                            $(this).removeClass('open');
                        });
	</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.hoverintent/1.9.0/jquery.hoverIntent.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.11/lodash.min.js'></script>
<script type="text/javascript">
  /// some script
  
  // jquery ready start
  $(document).ready(function() {
    // jQuery code
  
    //////////////////////// Prevent closing from click inside dropdown
      $(document).on('click', '.dropdown-menu', function (e) {
        e.stopPropagation();
      });
  
      // make it as accordion for smaller screens
      if ($(window).width() < 992) {
        $('.dropdown-menu a').click(function(e){
          e.preventDefault();
            if($(this).next('.submenu').length){
              $(this).next('.submenu').toggle();
            }
            $('.dropdown').on('hide.bs.dropdown', function () {
           $(this).find('.submenu').hide();
        })
        });
    }
    
  }); // jquery end
  </script>
<script type="text/javascript">
	/// some script
	
	// jquery ready start
	const $megamenuParentListItem = $('.megamenu-nav > li.is-parent');

const $megamenuBackground = $('#megamenu-background');

const isTouch = 'ontouchstart' in window || !!navigator.msMaxTouchPoints;

const handleMenuItemOpenState = elem => {
  elem.addClass('is-open');
  elem.find('a').first().attr('aria-expanded', true);
};

const handleMenuItemCloseState = elem => {
  elem.removeClass('is-open');
  elem.find('a').first().attr('aria-expanded', false);
};

const openMegamenu = (bgElem, heightVal) => {
  $('body').addClass('megamenu-visible');
  bgElem.height(heightVal);
};

const closeMegamenu = (bgElem, heightVal) => {
  $('body').removeClass('megamenu-visible');
  bgElem.height(heightVal);
};

const $megamenuContentElem = $('.megamenu-nav .megamenu-content');

const getTallestMenuHeight = () => {
  let maxHeight = 0;
  $megamenuContentElem.each((index, item) => {
    if ($(item).outerHeight() > maxHeight) {
      maxHeight = $(item).outerHeight();
    }
  });
  return maxHeight;
};

const debouncedClose = _.debounce(closeMegamenu, 400);
const throttledContentHeightCount = _.throttle(getTallestMenuHeight, 100);

let megamenuContentMaxHeight = 0;

window.onresize = () => {
  megamenuContentMaxHeight = throttledContentHeightCount();
};

$(() => {
  megamenuContentMaxHeight = getTallestMenuHeight();

  $megamenuParentListItem.each((index, item) => {
    if (!isTouch) {
      $(item).hoverIntent({
        sensitivity: 10,
        interval: 50,
        over: () => {
          debouncedClose.cancel();
          $megamenuParentListItem.removeClass('is-open');
          handleMenuItemOpenState($(item));
          openMegamenu($megamenuBackground, megamenuContentMaxHeight);
        },
        out: () => {
          handleMenuItemCloseState($(item));
          debouncedClose($megamenuBackground, 0);
        } });

    }

    $(item).find('a').first().on('click touch', () => {
      if (!$(item).hasClass('is-open')) {
        $megamenuParentListItem.removeClass('is-open');
        handleMenuItemOpenState($(item));
        openMegamenu($megamenuBackground, megamenuContentMaxHeight);
      } else {
        handleMenuItemCloseState($(item));
        closeMegamenu($megamenuBackground, 0);
      }
    });
  });

  $('#megamenu-dim').on('click touch', e => {
    if ($('body').hasClass('megamenu-visible')) {
      e.preventDefault();
      $megamenuParentListItem.removeClass('is-open');
      closeMegamenu($megamenuBackground, 0);
    }
  });
});
	</script>


    <script>
        filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
    </script>

</html>
