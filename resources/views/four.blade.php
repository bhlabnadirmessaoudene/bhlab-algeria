@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">
</head>
@section('content')
    

<body>
    <style>
          
        .container {
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
    </style>
    

  

        <div style="background: url(https://i.postimg.cc/3N7wnb75/background.jpg)" class="jumbotron bg-cover text-white">
            <div class="container py-5 text-center">
                <h1 class="display-4 font-weight-bold">Découvrez nos partenaires</h1>
               
             
            </div>
        </div>
   
    <main >

        
      
      
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        
      
        <div class="container marketing ">
      <div class="row">
          <!-- Three columns of text below the carousel -->
          <div class="col-lg-3">
            <div class="content-intro  p-t-77 p-b-133" style="background-color: rgb(241, 241, 241)">
                <h3>Familles</h3>
          <div  id="myBtnContainer">
                   
                    
            <button class="btn  active dropdown-item" onclick="filterSelection('all')"> Show all</button>
            <button class="btn dropdown-item" onclick="filterSelection('Immuno Analyses')"> Immuno Analyses</button>
            <button class="btn dropdown-item" onclick="filterSelection('Chimie Clinique')"> Chimie Clinique</button>
            <button class="btn dropdown-item" onclick="filterSelection('Immuno Hémathologie')"> Immuno Hémathologie</button>
            <button class="btn dropdown-item" onclick="filterSelection('Auto Immunité')"> Auto Immunité</button>
            <button class="btn dropdown-item" onclick="filterSelection('Hémostase')"> Hémostase</button>
            <button class="btn dropdown-item" onclick="filterSelection('Acute Care')"> Acute Care (Gaz de sang)</button>
            <button class="btn dropdown-item" onclick="filterSelection('Consommables')"> Consommables</button>
            <button class="btn dropdown-item" onclick="filterSelection('Typage HLA')"> Typage HLA</button>
            <button class="btn dropdown-item" onclick="filterSelection('Bio moléculaire')"> Bio moléculaire</button>
            <button class="btn dropdown-item" onclick="filterSelection('Immuno chimie')"> Immuno chimie</button>
            <button class="btn dropdown-item" onclick="filterSelection('Hémathologie')"> Hémathologie</button>

        
      </div>
            </div>
          </div>
          <!-- START THE FEATURETTES -->
      
<div class="col-lg-9">
          <section class="section-intro">
           
    
            <div class="content-intro  p-t-77 p-b-133" style="background-color: rgb(241, 241, 241)">
            
              
                
                <div class="container">
                    <div class="row">
                      
                        <div class="col-md-4 p-t-30 filterDiv all ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                   <a href="https://www.abbott.com/"> <img class="shadow" src="{{ asset('image/abbott.jpg') }}" alt="IMG-INTRO"><a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.abbott.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                   ABBOTT
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Immuno Analyses Chimie Clinique Immuno Hémathologie ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.orthoclinicaldiagnostics.com/"><img class="shadow" src="{{ asset('image/ortho.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.orthoclinicaldiagnostics.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    OCD ORTHO CLINICAL DIAGNOSTICS
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Auto Immunité Hémostase Acute Care ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="	
                                   https://www.werfen.com/"> <img class="shadow" src="{{ asset('image/werfen.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="	
                                  https://www.werfen.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                  WERFEN
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Immuno Analyses ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="	
                                   https://www.diasorin.com/"><img class="shadow" src="{{ asset('image/diasorin.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="	
                                  https://www.diasorin.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    DIASORIN SPA ITALIE
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Consommables ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="	
                                   https://www.capp.dk/"><img class="shadow" src="{{ asset('image/capp.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="	
                                  https://www.capp.dk/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    CAPP APS
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Typage HLA">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.onelambda.com/"><img class="shadow" src="{{ asset('image/one.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.onelambda.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    ONELAMBDA
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Immuno Analyses Bio moléculaire ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://www.adaltis.net/"><img class="shadow" src="{{ asset('image/adaltis.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="http://www.adaltis.net/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    ADALTIS
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv all ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://www.arkray.co.jp/"><img class="shadow" src="{{ asset('image/arkray.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="http://www.arkray.co.jp/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    ARKRAY
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 p-t-30 filterDiv Bio moléculaire ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="	
                                    http://entrogen.com/web3/"><img class="shadow" src="{{ asset('image/e.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="http://entrogen.com/web3/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    ENTROGEN USA
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Immuno Hémathologie">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.merckgroup.com/"><img class="shadow" src="{{ asset('image/merck.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.merckgroup.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    MERCK
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Auto Immunité ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="http://www.d-tek.be/"><img class="shadow" src="{{ asset('image/dtek.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="http://www.d-tek.be/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    D-TEK sa BELGIQUE
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Immuno chimie">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.bindingsite.com/"><img class="shadow" src="{{ asset('image/site.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.bindingsite.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    BINDING SITE
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Bio moléculaire">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://sacace.com/"><img class="shadow" src="{{ asset('image/sacace.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://sacace.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    SACACE BIOTECHNOLOGIES
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv all ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.bio-rad.com/"><img class="shadow" src="{{ asset('image/biorad.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.bio-rad.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    BIO-RAD
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 p-t-30 filterDiv Hémathologie ">
                            <!-- Block1 -->
                            <div class="blo1 ">
                                <div class="wrap-pic-blo1 bo-rad-10 hov-img-zoom shadow-lg">
                                    <a href="https://www.horiba.com/"><img class="shadow" src="{{ asset('image/horiba.jpg') }}" alt="IMG-INTRO"></a>
                                </div>
    
                                <div class="wrap-text-blo1 p-t-35">
                                   <a href="https://www.horiba.com/"><h4 class="txt5 color0-hov trans-0-4 m-b-13">
                                    HORIBA
                                	</h4></a>
    
                                    
    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        </div>
        </div>
    
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
</body>
@endsection
</html>