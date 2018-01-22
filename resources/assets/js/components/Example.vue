<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                    <input type="file" multiple @change="onChange">
                    <button @click="upload">submit</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                attachment: null,
                form: new FormData
            }
        },
        computed: {

        },
        methods: {
            onChange(e) {
                let selected = e.target.files[0];
                this.attachment = selected;
            },
            upload() {
                this.form.append('pic', this.attachment);
                const config = {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                };
                axios.post('/blog1/public/testupload', this.form, config)
                    .then(response=>{

                    }).catch(response=> {

                })
                ;
            }
        }
    }
</script>
<style scoped>
    .fade-enter{
      transform: translateX(-500px);
    }

    .fade-enter-active{
        animation: slideIn 0.3s;

    }

    .fade-enter-to{

    }

    .fade-leave{

    }

    .fade-leave-active{
        animation: slideOut 0.3s;
    }

    .fade-leave-to{

    }
    @keyframes slideIn{
        from{transform: translateX(-500px);}
        to{transform: translateX(0px);}
    }

    @keyframes slideOut{
        from{transform: translateX(0px);}
        to{transform: translateX(-500px);}
    }
    .menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 150px;
        background: #DF314D;
        height: 100%;
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0,0.5);
    }

</style>