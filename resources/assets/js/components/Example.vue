<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                    <input type="file" multiple @change="onChange" ref="input">
                    <button @click="upload">submit</button>
                    <div class="bar">
                        <div class="progress" :style="progressWidth"> {{percentCompleted}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                attachment: [],
                percentCompleted: ''
            }
        },
        computed: {
                progressWidth(){
					return {
						width: this.percentCompleted + '%'
					}
				}
        },
        methods: {
            onChange(e) {
                let selected = e.target.files;
                for(let i = 0; i < selected.length; i++) {
                    this.attachment.push(selected[i]);
                }
                console.log(this.attachment)
            },
            upload() {
                let form = new FormData;
                for(let i = 0; i < this.attachment.length; i++) {
                    form.append('pics[]', this.attachment[i]);
                }
                console.log(form);
                const config = {
                    headers: {'Content-Type': 'multipart/form-data'},
                      onUploadProgress: progressEvent => {
                      this.percentCompleted = Math.floor((progressEvent.loaded * 100) / progressEvent.total);
                     }
                };

                
                axios.post('/blog1/public/testupload', form, config)
                    .then((response)=>{
                        this.attachment = [];
                        form.delete('pics');
                        this.$refs.input.value = '';
                        return response;
                    })
                    .catch(response=> {
                       console.log(this);
                    });
            },
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
.bar {
    text-align: center;
    color:dimgray;
    max-width: 300px;
    border-radius: 12px;
    margin-top:15px;
    overflow: hidden;

}
.progress {
    width: 0%;
    height: 15px;
    background: #f4645f;
}
</style>