<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/style.css">
<style>
    body{
    background-color:rgb(182, 237, 253) !important;
}
</style>
<body   >
    <div class="i-conteneur container-fluid"  >   
            
         <div  class="bar"> <h1 class="tr_list">bienvenu sur votre space de travail</h1></div>
                 
            <div class="row sou-content">
           
                <aside class=" col-lg-2   border-light aside   i-espacement1 "   >

                          <div  class="d-flex justify-content-center"> </div>  
                     
                           <div  class="i-espacement3">
                               <nav class=" i-navclass list-group " id="list-tab" role="tablist">
                                    
                                     <a class="  list-group-item-action" class="les_menus" id="list-home-list" href="index.php?page=ajoutmodifier" role="tab" aria-controls="ajouter" class="i-color">Ajouter</a> 
                                     <a class=" list-group-item-action" id="list-profile-list"   href="index.php?page=listeAdmin" role="tab" aria-controls="apprenants">Liste</a>    
                                     <a class=" list-group-item-action" id="list-profile-list"   href="index.php?page=user" role="tab" aria-controls=""> Admin++</a>    
                                     <a class=" list-group-item-action" id="list-profile-list"   href="" role="tab" aria-controls="apprenants">Deconnexion</a>    
                           
                              </nav>
                                       
                              </div>
                 
       
                        <div class="i-copyr d-flex justify-content-center"> Copyrigh 2020</div>

                 </aside>      
           
                 <div class="contenu col-lg-10 bg-light border border-light  " id="cont" >
    <?php include('ajoutModifier.vue.php')?> 
            </div> 
          
    </div>  
    
</div>
</body>
<script src="assets/js/bootstrap.min.js"></script>

</html>            
              
                  
           
    