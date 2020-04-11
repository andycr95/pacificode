<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Perfil de usuario</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Perfil de usuario</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Perfil de usuario</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-header end -->

                    <!-- Page-body start -->
                    <div class="page-body">
                        <!--profile cover start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cover-profile">
                                    <div class="profile-bg-img">
                                        <img class="profile-bg-img img-fluid" style="height: 200px;" v-bind:src="user.photo_pro" alt="bg-img">
                                        <div class="card-block user-info">
                                            <div class="col-md-12">
                                                <div class="media-left">
                                                    <a @click="showModal2" class="profile-image">
                                                        <img class="user-img img-radius" style="width:150px" v-bind:src="user.photo_profile" alt="user-img">
                                                        <div class="middle">
                                                            <div class="text">Actualizar</div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="media-body row">
                                                    <div class="col-lg-12">
                                                        <div class="user-title">
                                                            <h2>{{user.name}}</h2>
                                                            <span class="text-white">{{user.position}}</span>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="pull-right cover-btn">
                                                            <button type="button" class="btn btn-primary m-r-10 m-b-5" @click="showModal3"><i class="icofont icofont-plus"  ></i> Editar portada</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--profile cover end-->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- tab header start -->
                                <div class="tab-header card">
                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Información personal</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Proyectos a cargo</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Tickets</a>
                                            <div class="slide"></div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Servicio a clientes</a>
                                            <div class="slide"></div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- tab header end -->
                                <!-- tab content start -->
                                <div class="tab-content">
                                    <!-- tab panel personal start -->
                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                        <!-- personal card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Información personal</h5>
                                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right" @click="showModal"><i class="icofont icofont-edit"></i></button>
                                            </div>
                                            <div class="card-block">
                                                <div class="view-info">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="general-info">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table m-0">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Nombres</th>
                                                                                        <td>{{user.name}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Genero</th>
                                                                                        <td v-if="user.gender == 1">Masculino</td>
                                                                                        <td v-if="user.gender == 2">Femenino</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Fecha de nacimiento</th>
                                                                                        <td>{{user.birth_date}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Estado civil</th>
                                                                                        <td>{{user.marital_status}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Dirección</th>
                                                                                        <td>{{user.address}}</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                    <div class="col-lg-12 col-xl-6">
                                                                        <div class="table-responsive">
                                                                            <table class="table">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <th scope="row">Correo electronico</th>
                                                                                        <td>{{user.email}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Teléfono</th>
                                                                                        <td>{{user.phone}}</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Twitter</th>
                                                                                        <td><a v-bind:href="user.twitter" target="_blank">{{user.twitter}}</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Facebook</th>
                                                                                        <td><a v-bind:href="user.facebook" target="_blank">{{user.facebook}}</a></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th scope="row">Linkedin</th>
                                                                                        <td><a v-bind:href="user.linkedin" target="_blank">{{user.linkedin}}</a></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end of table col-lg-6 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of general info -->
                                                        </div>
                                                        <!-- end of col-lg-12 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                            </div>
                                            <!-- end of card-block -->
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Descripción</h5>
                                                        <button id="edit-info-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right" @click="EditDesc"><i class="icofont icofont-edit"></i></button>
                                                    </div>
                                                    <div class="card-block user-desc">
                                                        <div v-if="!showDesc" class="view-desc">
                                                            <p>{{user.description}}</p>
                                                        </div>
                                                        <div v-if="showDesc" class="view-desc">
                                                            <textarea class="form-control max-textarea" v-model="description" maxlength="255" rows="4"></textarea>
                                                            <a @click="EditDesc" style="color:white" class="btn btn-danger">Cancelar</a>
                                                            <a @click="updateUserDescription" style="color:white" class="btn btn-success">Guardar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- personal card end-->
                                    </div>
                                    <!-- tab pane personal end -->
                                    <!-- tab pane info start -->
                                    <div class="tab-pane" id="binfo" role="tabpanel">
                                        <!-- info card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Proyectos a cargo</h5>
                                            </div>
                                            <div class="card-block">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="card b-l-success business-info services m-b-20">
                                                            <div class="card-header">
                                                                <div class="service-header">
                                                                    <a href="#">
                                                                        <h5 class="card-header-text">Shivani Hero</h5>
                                                                    </a>
                                                                </div>
                                                                <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                                                <div class="dropdown-menu dropdown-menu-right b-none services-list">
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i> Edit</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i> Delete</a>
                                                                    <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i> View</a>
                                                                </div>
                                                            </div>
                                                            <div class="card-block">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <p class="task-detail">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incidi dunt ut labore et.Lorem ipsum dolor sit amet, consecte.</p>
                                                                    </div>
                                                                    <!-- end of col-sm-8 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            <!-- end of card-block -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Profit</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="main" style="height:300px;width: 100%;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- info card end -->
                                    </div>
                                    <!-- tab pane info end -->
                                    <!-- tab pane contact start -->
                                    <div class="tab-pane" id="contacts" role="tabpanel">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- contact data table card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Tickes</h5>
                                                    </div>
                                                    <div class="card-block contact-details">
                                                        <div class="data_table_main table-responsive dt-responsive">
                                                            <table id="simpletable" class="table  table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobileno.</th>
                                                                        <th>Favourite</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Garrett Winters</td>
                                                                        <td><a href="/cdn-cgi/l/email-protection.htm" class="__cf_email__" data-cfemail="bbdad9d88a8988fbdcd6dad2d795d8d4d6">[email&#160;protected]</a></td>
                                                                        <td>9989988988</td>
                                                                        <td><i class="fa fa-star" aria-hidden="true"></i></td>
                                                                        <td class="dropdown">
                                                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></button>
                                                                            <div class="dropdown-menu dropdown-menu-right b-none contact-menu">
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-edit"></i>Edit</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-delete"></i>Delete</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>View</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-tasks-alt"></i>Project</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-ui-note"></i>Notes</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-eye-alt"></i>Activity</a>
                                                                                <a class="dropdown-item" href="#!"><i class="icofont icofont-badge"></i>Schedule</a>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Email</th>
                                                                        <th>Mobileno.</th>
                                                                        <th>Favourite</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- contact data table card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab pane contact end -->
                                    <div class="tab-pane" id="review" role="tabpanel">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-header-text">Review</h5>
                                            </div>
                                            <div class="card-block">
                                                <ul class="media-list">
                                                    <li class="media">
                                                        <div class="media-left">
                                                            <a href="#">
                                                                <img class="media-object img-radius comment-img" src="/files/assets/images/avatar-1.jpg" alt="Generic placeholder image">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="media-heading">Sortino media<span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                            <div class="stars-example-css review-star">
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                                <i class="icofont icofont-star"></i>
                                                            </div>
                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                            <div class="m-b-25">
                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                            </div>
                                                            <hr>
                                                            <!-- Nested media object -->
                                                            <div class="media mt-2">
                                                                <a class="media-left" href="#">
                                                                    <img class="media-object img-radius comment-img" src="/files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                                </a>
                                                                <div class="media-body">
                                                                    <h6 class="media-heading">Larry heading <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                    <div class="stars-example-css review-star">
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                        <i class="icofont icofont-star"></i>
                                                                    </div>
                                                                    <p class="m-b-0"> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                    <div class="m-b-25">
                                                                        <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                    </div>
                                                                    <hr>
                                                                    <!-- Nested media object -->
                                                                    <div class="media mt-2">
                                                                        <div class="media-left">
                                                                            <a href="#">
                                                                                <img class="media-object img-radius comment-img" src="/files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="media-body">
                                                                            <h6 class="media-heading">Colleen Hurst <span class="f-12 text-muted m-l-5">Just now</span></h6>
                                                                            <div class="stars-example-css review-star">
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                                <i class="icofont icofont-star"></i>
                                                                            </div>
                                                                            <p class="m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                                                                            <div class="m-b-25">
                                                                                <span><a href="#!" class="m-r-10 f-12">Reply</a></span><span><a href="#!" class="f-12">Edit</a> </span>
                                                                            </div>
                                                                        </div>
                                                                        <hr>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Right addon">
                                                    <span class="input-group-addon"><i class="icofont icofont-send-mail"></i></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tab content end -->
                            </div>
                        </div>
                        <b-modal ref="modal-user" hide-backdrop content-class="shadow" title="Registrar usuario" hide-footer>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" >
                                        <label for="" >Nombres</label>
                                        <input class="form-control" :class="{ 'form-control-error': $v.name.$error }" v-model.trim="name" placeholder="Cosme fulanito">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" >Correo</label>
                                        <input type="email" :class="{ 'form-control-error': $v.email.$error }" class="form-control" v-model.trim="email" id="email" name="email" placeholder="ejemplo@pacificode.co">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" >Teléfono</label>
                                        <input type="phone" class="form-control" :class="{ 'form-control-error': $v.phone.$error }" v-model.trim="phone" id="phone" name="phone" placeholder="ejemplo@pacificode.co">
                                    </div>
                                    <div class="form-group">
                                        <label for="birth_date">Fecha de nacimiento</label>
                                        <datepicker :format="customFormatter" :language="es" v-model="birth_date" :bootstrap-styling="true">
                                        </datepicker>
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Genero</label>
                                        <select v-model.trim="gender" :class="{ 'form-control-error': $v.gender.$error }" class="form-control" name="gender">
                                            <option value="0">Seleccione una opción</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="" >Cargo</label>
                                        <input type="text" class="form-control" v-model.trim="position" :class="{ 'form-control-error': $v.position.$error }" id="position" name="position" placeholder="Desarrollador">
                                    </div>
                                    <div class="form-group">
                                        <label for="marital_status">Estado civíl</label>
                                        <select v-model.trim="marital_status" :class="{ 'form-control-error': $v.marital_status.$error }" class="form-control" name="marital_status">
                                            <option value="0">Seleccione una opción</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Soltero">Solterp</option>
                                            <option value="Union libre">Union libre</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" >Dirección</label>
                                        <input type="address" class="form-control" v-model.trim="address" :class="{ 'form-control-error': $v.address.$error }" id="address" name="address" placeholder="*******">
                                    </div>
                                    <div class="form-group">
                                        <label for="" >Contraseña</label>
                                        <input type="password" class="form-control" v-model="password" id="password" name="password" placeholder="*******">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                <div class="form-group" >
                                    <label for="" >Twitter</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#1DA1F2;" id="basic-addon1"><i class="ti-twitter"></i></span>
                                        <input type="text" class="form-control"  v-model="twitter" placeholder="https://twitter.com/cosmefulanito">
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-group" >
                                    <label for="" >Facebook</label>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="background-color:#3B5998;" id="basic-addon1"><i class="ti-facebook"></i></span>
                                        <input type="text" class="form-control"  v-model="facebook" placeholder="https://www.facebook.com/cosme-fulanito">
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="form-group" >
                                    <label for="" >Linkeind</label>
                                    <div class="input-group">
                                        <span style="background-color: #2867B2;" class="input-group-addon" id="basic-addon1"><i class="ti-linkedin"></i></span>
                                        <input type="text" class="form-control" :class="{ 'form-control-error': $v.linkedin.$error }" v-model.trim="linkedin" placeholder="https://www.linkedin.com/in/cosme-fulanito-7061381b/">
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a @click="clearForm" style="color:white" class="btn btn-danger">Cancelar</a>
                                <a @click="updateUser" style="color:white" class="btn btn-success">Guardar</a>
                            </div>
                        </b-modal>
                        <b-modal ref="modal-2" content-class="shadow" title="Actualizar foto de perfil" hide-footer>
                            <div class="form-group">
                                <label for="photo_profile" >Foto</label>
                                <input type="file" class="form-control"  v-on:change="onImageChange" id="photo_profile" name="photo_profile" placeholder="*******">
                            </div>
                            <div class="modal-footer">
                                <a @click="clearForm" style="color:white" class="btn btn-danger">Cancelar</a>
                                <a @click="updateUserPhoto" style="color:white" class="btn btn-success">Guardar</a>
                            </div>
                        </b-modal>
                        <b-modal ref="modal-3" content-class="shadow" title="Cambiar portada" hide-footer>
                            <div class="form-group">
                                <label for="photo_profile" >Foto</label>
                                <input type="file" class="form-control"  v-on:change="onImageChangeP" id="photo_port">
                            </div>
                            <div class="modal-footer">
                                <a @click="clearForm" style="color:white" class="btn btn-danger">Cancelar</a>
                                <a @click="updateUserPhotoPort" style="color:white" class="btn btn-success">Guardar</a>
                            </div>
                        </b-modal>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
   import Axios from "axios";
   import toastr from "toastr";
   import Datepicker from 'vuejs-datepicker';
   import {en, es} from 'vuejs-datepicker/dist/locale'
   import moment from "moment";
   import { BModal, VBModal } from 'bootstrap-vue'
   import { required, minLength } from 'vuelidate/lib/validators'
    export default {
        components: {
            Datepicker,
            'b-modal': BModal
        },
        directives: {
            // Note that Vue automatically prefixes directive names with `v-`
            'b-modal': VBModal
        },
        mounted() {
            this.getUser()
        },
        data() {
            return {
                user: {},
                name: '',
                email:null,
                position:null,
                password:null,
                password_confirmation: null,
                gender:0,
                birth_date:null,
                marital_status:0,
                address:null,
                phone:null,
                photo_profile:null,
                twitter:null,
                facebook:null,
                linkedin:null,
                description:null,
                photo_port:null,
                showDesc: false,
                es: es
            }
        },
        methods: {
            async getUser() {
                await Axios.get(`/api/user/${this.$route.params.id}`,{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
                    this.user = res.data
                })

            },
            showModal() {
                this.$refs['modal-user'].show()
                this.name = this.user.name
                this.email = this.user.email
                this.position = this.user.position
                this.password = this.user.password
                this.gender = this.user.gender
                this.birth_date = this.user.birth_date
                this.marital_status = this.user.marital_status
                this.address = this.user.address
                this.phone = this.user.phone
                this.twitter = this.user.twitter
                this.facebook = this.user.facebook
                this.linkedin = this.user.linkedin
            },
            showModal2() {
                this.$refs['modal-2'].show()
            },
            showModal3() {
                this.$refs['modal-3'].show()
            },
            updateUser(e) {
                let me =this;
                this.$v.$touch()

                if (this.$v.$invalid) {
                    this.submitStatus = 'ERROR'
                } else {
                    Axios.put(`/api/user/${this.user.id}`,{
                    'name':this.name,
                    'email':this.email,
                    'birth_date':this.customFormatter(this.birth_date),
                    'marital_status':this.marital_status,
                    'address':this.address,
                    'phone':this.phone,
                    'twitter':this.twitter,
                    'photo_profile':this.photo_profile,
                    'facebook':this.facebook,
                    'linkedin':this.linkedin,
                    'password':this.password,
                    'position':this.position,
                    'password_confirmation':this.password_confirmation,
                    'gender':this.gender,
                    },{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(function (res) {
                        me.clearForm()
                        toastr.success('Usuario Actualizado');
                        me.getUser()
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();

            },
            updateUserPhoto(e) {
                let me =this;
                me.$v.$touch()
                if (me.photo_profile == null) {
                    me.submitStatus = 'ERROR'
                } else {
                    Axios.put(`/api/user/photo/${me.user.id}`,{
                    'photo_profile':me.photo_profile
                    },{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(function (res) {
                        me.clearForm()
                        me.getUser()
                        toastr.success('Foto de perfil Actualizada');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();
            },
            updateUserPhotoPort(e) {
                let me =this;
                me.$v.$touch()
                if (me.photo_port == null) {
                    me.submitStatus = 'ERROR'
                } else {
                    Axios.put(`/api/user/photoport/${me.user.id}`,{
                    'photo_port':me.photo_port
                    },{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(function (res) {
                        me.getUser()
                        me.clearForm()
                        toastr.success('Foto de portada Actualizada');
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();
            },
            updateUserDescription(e) {
                let me =this;
                me.$v.$touch()
                if (me.description == null) {
                    me.submitStatus = 'ERROR'
                } else {
                    Axios.put(`/api/user/desc/${me.user.id}`,{
                    'description':me.description
                    },{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(function (res) {
                        me.getUser()
                        me.EditDesc()
                        toastr.success('Descripción Actualizada');
                        console.log(res);

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();
            },
            clearForm() {
                this.$refs['modal-user'].hide()
                this.$refs['modal-3'].hide()
                this.$refs['modal-2'].hide()
                this.name = null
                this.email = null
                this.password = null
                this.password_confirmation = null
                this.gender = 0
                this.position = null
                this.birth_date = null
                this.marital_status = 0
                this.address = null
                this.phone = null
                this.photo_profile = null
                this.photo_por = null
                this.twitter = null
                this.facebook = null
                this.linkedin = null
            },
            customFormatter(date) {
                return moment(date).format('YYYY-MM-DD');
            },
            onImageChange(e){
                let input = e.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    let vm = this;
                    reader.onload = e => {
                        this.previewImageUrl = e.target.result;
                        vm.photo_profile = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            onImageChangeP(e){
                let input = e.target;
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    let vm = this;
                    reader.onload = e => {
                        this.previewImageUrl = e.target.result;
                        vm.photo_port = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            },
            EditDesc(){
                this.showDesc = !this.showDesc
                this.description = null
            }
        },
        validations: {
            name: {
                required,
                minLength: minLength(4)
            },
            birth_date: {
                required
            },
            address: {
                required
            },
            email: {
                required
            },
            gender: {
                required
            },
            position: {
                required
            },
            phone: {
                required
            },
            marital_status: {
                required
            },
            linkedin: {
                required
            },
            email: {
                required
            }
        }
    }
</script>
