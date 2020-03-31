<template>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <!-- statustic-card start -->
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-yellow text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Nuevos clientes</p>
                                                <h4 class="m-b-0">852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-green text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Entradas</p>
                                                <h4 class="m-b-0">$5,852</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-pink text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Tickets</p>
                                                <h4 class="m-b-0">42</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-c-blue text-white">
                                    <div class="card-block">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <p class="m-b-5">Ordenes</p>
                                                <h4 class="m-b-0">242</h4>
                                            </div>
                                            <div class="col col-auto text-right">
                                                <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statustic-card start -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Axios from 'axios'
    export default {
        mounted() {
            this.login()
        },
        methods:{
            login(){
                if (!this.$session.get('Authorization')) {
                    Axios.post('/api/login',
                    {'email':sessionStorage.getItem('email'),'password':sessionStorage.getItem('pwd')},
                    {headers:{'Content-Type':'application/json', 'X-Requested-With':'XMLHttpRequest'} }).then(res =>{
                        if (res.status == 200) {
                            let token = res.data.token_type+' '+res.data.access_token
                            this.$session.set('Authorization',token)
                            this.$session.set('user_id',res.data.user.id)
                        }
                    }).catch(err =>{
                        console.log(err);
                    })
                }
            }
        }
    }
</script>
