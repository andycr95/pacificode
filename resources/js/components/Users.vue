<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Usuarios</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Usuarios</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            <div class="card-block">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Nuevo usuario</button>
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nombres</th>
                                                <th>Correo</th>
                                                <th>Genero</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="user in users" v-bind:key="user.id">
                                                <td>{{user.name}}</td>
                                                <td>{{user.email}}</td>
                                                <td>{{user.gender}}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombres</th>
                                                <th>Correo</th>
                                                <th>Genero</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Registrar usuario</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="container">
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Nombres</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" v-model="name" name="name" id="name" placeholder="Cosme fulanito">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Correo</label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" v-model="email" id="email" name="email" placeholder="ejemplo@pacificode.co">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Contraseña</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" v-model="password" id="password" name="password" placeholder="*******">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Confirmar Contraseña</label>
                                                <div class="col-sm-10">
                                                    <input id="password-confirm" v-model="password_confirmation" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Genero</label>
                                                <div class="col-sm-10">
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"><input class="form-check-input" type="radio" v-model="gender"  name="gender" id="gender-1" value="1"> Masculino</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label"><input class="form-check-input" type="radio" v-model="gender" name="gender" id="gender-2" value="2"> Femenimo</label>
                                                    </div>
                                                    <span class="messages"></span>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" @click="clearForm" class="btn">Cancelar</a>
                                        <a @click="saveUser" class="btn btn-primary">Guardar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
   import Axios from "axios";
   import toastr from "toastr";
    export default {
        mounted() {
            this.show = true;
            this.getUsers()
        },
        data() {
            return {
                users: [],
                errors: [],
                name:null,
                email:null,
                password:null,
                password_confirmation: null,
                gender:0,
                show: false
            }
        },
        methods: {
            getUsers() {
                Axios.get('/api/user').then(res =>{
                    for (let i = 0; i < res.data.length; i++) {
                        const e = res.data[i];
                        if (e.gender == 1) {
                            e.gender = 'Masculino'
                        } else {
                            e.gender = 'Feminino'
                        }
                    }
                    this.users = res.data;
                }).catch(err =>{
                    console.log(err);
                })
            },
            saveUser(e) {
                let me =this;
                let url = '/api/user' //Ruta que hemos creado para enviar una usuario y guardarlo
                if (!me.name) {
                    me.errors.push('El campo nombre está vacio!')
                }

                if (!me.email) {
                    me.errors.push('El campo correo está vacio!')
                }

                if (me.gender == 0) {
                    me.errors.push('No ha seleccionado un genero')
                }

                if (me.password != me.password_confirmation) {
                    me.errors.push('Las contraseñas no coinciden!')
                }

                if (me.errors.length > 0) {
                    me.errors.forEach(err => {
                        toastr.error(err)
                    });
                    me.errors = [];
                } else {
                    Axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'name':this.name,
                    'email':this.email,
                    'password':this.password,
                    'password_confirmation':this.password_confirmation,
                    'gender':this.gender,
                    }).then(function (response) {
                        toastr.success('Usuario registrado');
                        me.getUsers()
                        me.clearForm()
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }



                e.preventDefault();
            },
            clearForm() {
                this.name = null
                this.email = null
                this.password = null
                this.password_confirmation = null
                this.gender = 0
            }
        }
    }
</script>
