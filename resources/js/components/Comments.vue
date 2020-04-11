<template>
    <div>
        <div class="comments-area">
            <div class="sec-title">
                <h2>Comentarios ({{ comments.length }})</h2>
            </div>
            <div class="comment-box">
                <div
                    class="comment"
                    v-for="comment in comments"
                    :key="comment.id"
                >
                    <div class="comment-inner">
                        <div class="comment-info">
                            <h5 class="name" v-text="comment.name"></h5>
                            <span
                                class="date"
                                v-text="comment.created_at"
                            ></span>
                        </div>
                        <div class="text" v-text="comment.comment"></div>
                        <div class="replay-btn"><a href="#">Reply</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comments-form-area">
            <div class="sec-title"><h2>Deja tu comentario</h2></div>
            <form action="#" method="post" class="comment-form default-form">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                        <textarea
                            v-model="comment"
                            placeholder="Comentario"
                            :class="{ 'form-control-error': $v.comment.$error }"
                        ></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input
                            type="text"
                            v-model="name"
                            placeholder="Nombre"
                            :class="{ 'form-control-error': $v.name.$error }"
                        />
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                        <input
                            type="email"
                            v-model="email"
                            placeholder="Correo electronico"
                            :class="{ 'form-control-error': $v.email.$error }"
                        />
                    </div>
                    <div
                        class="col-lg-12 col-md-12 col-sm-12 form-group message-btn"
                    >
                        <a
                            @click="saveComment"
                            style="color:white"
                            class="theme-btn-two"
                        >
                            Publicar
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import Axios from "axios";
import toastr from "toastr";
import moment from "moment";
import { required, minLength, sameAs } from "vuelidate/lib/validators";
export default {
    mounted() {
        this.getComments();
    },
    data() {
        return {
            comments: [],
            name: "",
            email: null,
            comment: null
        };
    },
    methods: {
        // birth_date: me.customFormatter(me.birth_date),
        async getComments() {
            await Axios.get("/api/comments/" + this.$attrs.post_id)
                .then(res => {
                    for (let i = 0; i < res.data.length; i++) {
                        const e = res.data[i];
                        e.created_at = this.customFormatter(e.created_at);
                    }
                    this.comments = res.data;
                })
                .catch(err => {
                    console.log(err);
                });
        },
        async saveComment(e) {
            let me = this;
            me.$v.$touch();
            if (me.$v.$invalid) {
                me.submitStatus = "ERROR";
            } else {
                Axios.defaults.headers.post["Content-Type"] =
                    "multipart/form-data";
                await Axios.post("/api/comment", {
                    name: me.name,
                    email: me.email,
                    comment: me.comment,
                    post_id: this.$attrs.post_id
                })
                    .then(function(res) {
                        me.clearForm();
                        toastr.success("Comentario publicado");
                        me.getComments();
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            }
            e.preventDefault();
        },
        clearForm() {
            this.name = null;
            this.email = null;
            this.comment = null;
        },
        customFormatter(date) {
            return moment(date)
                .locale("es")
                .format("LL");
        }
    },
    validations: {
        name: {
            required
        },
        email: {
            required
        },
        comment: {
            required
        }
    }
};
</script>
