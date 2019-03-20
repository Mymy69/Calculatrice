<?php
include("header.html")

?>
    <style>
        
        
    </style>
    
</head>
<body>
    
    <!-- CONTENT START -->
    
    <div class="container">
        <div class="row">
            <div class="col-4">
                
                <input type="text" id="resultat" class="w-100">
              
                <table class="table table-dark">
                        <thead>
                            <tr>
                                <td><button  type="button" class="btn btn-dark" onclick="calcul('M+');">M+</button></td>
                                <td><button  type="button" class="btn btn-dark" onclick="calcul('M-');">M-</button></td> 
                                <td><button  type="button" class="btn btn-dark" onclick="calcul('/');">/</button></td>
                                <td><button  type="button" class="btn btn-dark" onclick="calcul('%');">%</button></td>
                            </tr>
                        </thead>
                        <tr>
                            <td><button type="button" class="btn btn-dark" onclick="calcul('7');">7</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('8');">8</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('9');">9</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('*');">*</button></td>
                        </tr>
                        <tr>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('4');">4</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('5');">5</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('6');">6</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('-');">-</button></td>
                        </tr>
                        <tr>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('1');">1</button></td>
                            <td><button  type="button" class="btn btn-dark"onclick="calcul('2');">2</button></td>
                            <td><button type="button" class="btn btn-dark" onclick="calcul('3');">3</button></td>
                            <td><button type="button" class="btn btn-dark" onclick="calcul('+');">+</button></td>
                        </tr>
                        <tr>
                            <td><button  type="button" class="btn btn-dark" id="clearDisplay" value="clear" onclick="clearDisplay();">C</button></td>
                                <td><button type="button" class="btn btn-dark" onclick="calcul('0');">0</button></td>
                                <td><button type="button" class="btn btn-dark" onclick="calcul('.');">.</button></td>
                                <td><button  type="button" class="btn btn-dark"  onclick="result('=')" ;> = </button></td>
                            </tr>
                        </table>
                        
                        

                        
                                                                                                                                              
                      
                        
                    </div>
                </div>
            </div>
            
                <script>
                   
                    // converti la chaine + produit le resultat
                    function result(){ 
                        resultat = document.getElementById('resultat').value;
                        resultatEval = eval(resultat);
                        document.getElementById('resultat').value = resultatEval;

                        // console.log(eval(document.getElementById('resultat').value))
                    }

                    function calcul(variable){ // fait la concatenation de la chaine 
                        document.getElementById('resultat').value += variable ;

                    }
                
                    function clearDisplay(){

                        document.getElementById('resultat').value = "";
                    }
                
                </script>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
    
    <?php
include("footer.html")

?>