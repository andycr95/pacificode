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
                                        <span>En esta sección se encuentran todos los usuarios del sistema</span>
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
                                <button type="button" style="color:white; margin: 10px 0" class="btn btn-success"  @click="showModal">Nuevo usuario</button>
                                <div class="table-responsive dt-responsive">
                                    <table class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Nombres</th>
                                                <th>Correo</th>
                                                <th>Cargo</th>
                                                <th>Genero</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="user in users" v-bind:key="user.id">
                                                <td><router-link :to="{ name: 'user', params: { id: user.id, user }}">{{user.name}}</router-link></td>
                                                <td>{{user.email}}</td>
                                                <td>{{user.position}}</td>
                                                <td>{{user.gender}}</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombres</th>
                                                <th>Correo</th>
                                                <th>Cargo</th>
                                                <th>Genero</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <b-modal ref="modal-1" hide-backdrop content-class="shadow" title="Registrar usuario" hide-footer>
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
                                        <datepicker :class="{ 'form-control-error': $v.birth_date.$error }" :format="customFormatter" :language="es" v-model.trim="birth_date" :bootstrap-styling="true">
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
                                        <label for="photo_profile" >Foto</label>
                                        <input type="file" class="form-control"  v-on:change="onImageChange" :class="{ 'form-control-error': $v.photo_profile.$error }" id="photo_profile" name="photo_profile" placeholder="*******">
                                    </div>
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
                                        <input type="password" class="form-control" :class="{ 'form-control-error': $v.password.$error }" v-model.trim="password" id="password" name="password" placeholder="*******">
                                        <span class="message-error" v-if="!$v.password.minLength">La contraseña debe tener al menos {{ $v.password.$params.minLength.min }} letras.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirm">Confirmar Contraseña</label>
                                        <input id="password-confirm" v-model.trim="password_confirmation" :class="{ 'form-control-error': $v.password_confirmation.$error }" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        <span class="messages error" v-if="!$v.password_confirmation.sameAsPassword">Las contraseñas deben ser iguales.</span>
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
                                <a @click="saveUser" style="color:white" class="btn btn-success">Guardar</a>
                            </div>
                        </b-modal>
                    </div>
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
   import { required, minLength, sameAs } from 'vuelidate/lib/validators'
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
            this.getUsers()
        },
        data() {
            return {
                users: [],
                errors: [],
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
                show: false,
                es: es
            }
        },
        methods: {
            showModal() {
                this.$refs['modal-1'].show()
            },
            async getUsers() {
                await Axios.get('/api/user',{headers:{'Authorization':this.$session.get('Authorization'), 'Accept':'application/json'}}).then(res =>{
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
            async saveUser(e) {
                let me =this;
                let url = '/api/user' //Ruta que hemos creado para enviar una usuario y guardarlo
                me.$v.$touch()
                if (me.$v.$invalid) {
                    me.submitStatus = 'ERROR'
                } else {
                    Axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
                    Axios.defaults.headers.post['Authorization'] = this.$session.get('Authorization');
                    await Axios.post(url,{ //estas variables son las que enviaremos para que crear el usuario
                        'name':me.name,
                        'email':me.email,
                        'birth_date':me.customFormatter(me.birth_date),
                        'marital_status':me.marital_status,
                        'address':me.address,
                        'phone':me.phone,
                        'twitter':me.twitter,
                        'photo_profile':me.photo_profile,
                        'facebook':me.facebook,
                        'linkedin':me.linkedin,
                        'password':me.password,
                        'position':me.position,
                        'password_confirmation':me.password_confirmation,
                        'gender':me.gender,
                    }).then(function (res) {
                        me.clearForm()
                        toastr.success('Usuario registrado');
                        me.getUsers()
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                e.preventDefault();

            },
            clearForm() {
                this.$refs['modal-1'].hide()
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
            photo_profile: {
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
            password: {
                required,
                minLength: minLength(6)
            },
            password_confirmation: {
                sameAsPassword: sameAs('password')
            },
            email: {
                required
            }
        }
    }
</script>
