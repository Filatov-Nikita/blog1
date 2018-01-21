<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component {{test}}</div>
{{get()}}
                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        computed: {
            test() {
                return this.$store.state.vuex;
            },

        },
        methods: {
            get() {
                this.$http.get('/products.php')
                    .then(function (response) {
                        console.log(response.data);
                    }).catch(e => {
                    console.log(e);
                });
            }
        },
        watch: {

        }
    }
</script>
