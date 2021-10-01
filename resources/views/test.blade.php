 <div class="app-content content">
        <div class="content-wrapper">
            
            <div class="content-body">
                
                <!-- Form wizard with icon tabs section end -->
                <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="font-weight: bold;">Demande de devis :</h4>
                                    <p>
                                        Trouvez la mutuelle santé qui répond à vos besoins.
                                    </p>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form action="#" method="post" class="steps-validation wizard-circle">
                                            @csrf
                                            <!-- Step 1 -->
                                            <h6>Etape 1</h6>
                                            <fieldset>
                                                <div class="row">
                                                     <div class="col-md-5 offset-4">
                                                         <div class="form-group">
                                                             <fieldset class="form-group">
                                                            <h1 style="font-size:25px;font-weight: bold;">Quelle est votre civilité? <span class="danger">*</span></h1>
                                                                <label class="btn">
                                                                <input type="checkbox" name="civilite" id="item5" value="femme" class="hidden">
                                                                <img src="femme.png" width="114px;" alt="..." class="img-thumbnail">
                                                                <h1 style="font-size:15px;font-weight: bold;">Femme</h1>
                                                            </label>
                                                            <label class="btn">
                                                                <input type="checkbox" name="civilite" id="item6" value="homme" class="hidden">
                                                                <img src="patron.png" alt="..." width="114px;"  class="check img-thumbnail">
                                                                <h1 style="font-size:15px;font-weight: bold;">Homme</h1>
                                                            </label>
                                                           
                                                            </fieldset>
                                                         </div>
                                                     </div>
                                                     <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label style="font-size:25px;font-weight: bold;" for="date1">Quelle est votre date de naissance ?  <span class="danger">*</span></label>
                                                              <input type="date" class="form-control" id="date1">
                                                            </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                         <div class="form-group">
                                                        <label style="font-size:25px;font-weight: bold;" for="eventLocation3">Quel est votre régime social ?  <span class="danger">*</span></label>
                                                          <div class="col-md-6 col-sm-12">
                                                            <fieldset>
                                                            <input type="checkbox" value="Salarié" name="regime" id="input-15">
                                                            <label for="input-15">Salarié</label>
                                                            </fieldset>
                                                            <fieldset>
                                                            <input type="checkbox" value="Sans emploi" id="input-16" checked>
                                                            <label for="input-16">Sans emploi</label>
                                                            </fieldset>
                                                            <fieldset>
                                                            <input type="checkbox"name="regime" value="Retraité ancien salarié" id="input-16" >
                                                            <label for="input-16">Retraité ancien salarié</label>
                                                            </fieldset>
                                                            
                                                             <fieldset>
                                                            <input type="checkbox"name="regime" value="Fonctionnaire d'état" id="input-16" >
                                                            <label for="input-16">Fonctionnaire d'état</label>
                                                            </fieldset>
                                                            <fieldset>
                                                            <input type="checkbox" name="regime" value="Etudiant" id="input-16" >
                                                            <label for="input-16">Etudiant</label>
                                                            </fieldset>
                                                            <fieldset>
                                                            <input type="checkbox" name="regime" value="Autre" id="input-16" >
                                                            <label for="input-16">Autre</label>
                                                            </fieldset>
                                                           
                                                            
                                                        </div>
                                                         </div>
                                                    </div>
                                                          <div class="col-md-12">
                                                    
                                                   
                                                    
                                                </div> 
                                                

                                                </div>
                                                <div class="col-md-6">
                                                      <div class="form-group">
                                                        <label style="font-size:25px;font-weight: bold;"  for="eventType3">
                                                            Qui souhaitez-vous assurer ? :
                                                            <span class="danger">*</span>
                                                        </label>
                                                        <select class="custom-select form-control required" id="eventType3" name="qui">
                                                            <option value="Vous">Vous</option>
                                                            <option value="Vous et votre conjoint">Vous et votre conjoint</option>
                                                            <option value="Vous et vos enfants">Vous et vos enfants</option>
                                                            <option value="Vous, votre conjoint et vos enfants">Vous, votre conjoint et vos enfants</option>
                                                        </select>
                                                </div> 
                                                     
                                                     
                                                   
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </fieldset>
                                            <!-- Step 2 -->
                                            <h6>Etape 2</h6>
                                            <fieldset>
                                            <div class="row">
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label style="font-size:25px;font-weight: bold;"  for="firstName3">
                                                              Quel est votre Nom? :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required"
                                                                id="firstName3" name="nom">
                                                        </div>
                                                </div>
                                                <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label style="font-size:25px;font-weight: bold;"  for="lastName3">
                                                            Quel est votre Prénom? :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <input type="text" class="form-control required"
                                                                id="lastName3" name="prenom">
                                                        </div>
                                                </div>
                                                 <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label style="font-size:25px;font-weight: bold;"  for="emailAddress5">
                                                                Quel est votre Email ?  :
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <p>Vous allez recevoir un email qui récapitule votre comparaison</p>
                                                           <div class="input-group">
                                                        <div class="input-group-prepend">
                                                        <span class="input-group-text" id="basic-addon3"><i class="la la-envelope"></i></span>
                                                        </div>
                                                       <input type="email" class="form-control required"
                                                                id="emailAddress5" name="emailAddress">
                                                    </div>
                                                        </div>
                                                </div>
                                                   <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label style="font-size:25px;font-weight: bold;"  for="phoneNumber3">Quel est votre numéro de téléphone ? <span class="danger">*</span></label>
                                                            
                                                            <p>Promis, votre numéro de téléphone sera transmis uniquement aux assureurs avec lesquels vous souhaitez être mis en relation.</p>
                                                            <div class="input-group">
                                                    <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="la la-phone-square"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" id="phoneNumber3">
                                                    <div class="input-group-append">
                                                    <span class="input-group-text"><i class="la la-mobile"></i></span>
                                                    </div>
                                                </div>
                                                        </div>
                                                      </div>
                                                       
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label style="font-size:25px;font-weight: bold;"  for="eventName3">
                                                                Dans quelle ville résidez-vous ?
                                                                <span class="danger">*</span>
                                                            </label>
                                                            <div class="input-group">
                                                            <div class="input-group-prepend">
                                                            <span class="input-group-text" id="basic-addon3"><i class="la la-map-marker"></i></span>
                                                            </div>
                                                           <input type="text" value="paris" class="form-control required"
                                                                id="eventName3" name="eventName">
                                                        </div>
                                                        
                                                    </div>
                                                    <label>
                                                    <input checked type="checkbox" value=""> J'accepte de recevoir des offres personnalisées d'Assurconsulting
                                                </label>
                                                <label>
                                                    <input checked required type="checkbox" value=""> J'accepte les Conditions Générales d'Utilisation et d'être contacté par nos partenaires assurance santé (uniquement si
                                                    je souhaite être mis en relation).
                                                </label>
                                                  
                                                
                                            </div>
                                                
                                            </fieldset>
                                            <!-- Step 3 -->
                                           
                                            
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with step validation section end -->
                <!-- Form wizard with vertical tabs section start -->
               
                <!-- Form wizard with vertical tabs section end -->
            </div>
        </div>
    </div-->