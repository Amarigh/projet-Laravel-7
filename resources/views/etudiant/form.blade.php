
           
      
          
         
       
            
            <div class="row">
                <div class="col-2 ">Nom</div>	
                   <div class="col"><input type="text" class="form-control" name="nom" placeholder="votre nom"   value=" {{old('nom',$etudiant->nom ?? null)}} " required> </div> 
                        
            </div>
                  
                    <hr>



             <div class="row">
                   <div class="col-2 ">Prenom</div>	
                      <div class="col"><input type="text" name="prenom"    class="form-control"  value=" {{old('nom',$etudiant->prenom ?? null)}} " required></div> 
                        
            </div>
                  
                    <hr>



             <div class="row">
                   <div class="col-2 ">CIN</div>	
                      <div class="col"><input type="text" name="cin"  class="form-control"  value=" {{old('nom',$etudiant->cin ?? null)}} " required> </div> 
                        
            </div>
                  
                    <hr>

                 
             <div class="row">
                   <div class="col-2 ">CNE</div>	
                  <div class="col"><input type="text" name="cne"   class="form-control" value=" {{old('nom',$etudiant->cne ?? null)}} " required> </div> 
                        
            </div>
                  
                    <hr>


                    <div class="row">
                        <div class="col-2 ">Date de Naissance</div>	
                       <div class="col"><input type="date" name="naissance"   class="form-control" value=" {{$etudiant->naissance}} " required> </div> 
                             
                 </div>
                       
                         <hr>


           <div class="row">
                   <div class="col-2 ">SEX</div>	
                    <div class="col"><input type="text" name="sex"   class="form-control"  value=" {{old('nom',$etudiant->sex ?? null)}} " required> </div> 
                        
            </div>
                  
                    <hr>

            
                 
             <div class="row">
                <div class="col-2 ">Diplome</div>	
                 <div class="col"> <input type="text" name="diplome"  class="form-control"   value=" {{old('nom',$etudiant->diplome ?? null)}} " ></div>  
                     
         </div>
               
                 <hr>
                 
            
           


            <div class="row">
                   <div class="col-2 ">Tel</div>	
                     <div class="col"><input type="text" name="tel"  class="form-control"  value=" {{old('nom',$etudiant->tel ?? null)}} " required> </div> 
                        
            </div>
                  
                    <hr>
            <div class="row">
                   <div class="col-2 ">Email</div>	
                    <div class="col"> <input type="email" name="email"   class="form-control"   value=" {{old('nom',$etudiant->email ?? null)}} " required></div>  
                        
            </div>
                  
                <hr>

         

                                     
                                  
                                   


                  
