<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-around">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Testimonial <router-link to="/testimonials"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data" @submit.prevent="updateTestimonial()" >



                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Add Name</label>
                                        <input type="text" v-model="form.name" name="name" class="form-control" id="name"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Add Title</label>
                                        <input type="text" v-model="form.title" name="title" class="form-control" id="title"
                                               :class="{ 'is-invalid': form.errors.has('title') }">
                                        <has-error :form="form" field="title"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="desc">Add Description</label>
                                        <input type="text" v-model="form.desc" name="desc" class="form-control" id="desc"
                                               :class="{ 'is-invalid': form.errors.has('desc') }">
                                        <has-error :form="form" field="desc"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Add status(active,inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>

                                <div class="form-group" style="margin-left: 20px;">
                                    <input @change = "changePhoto($event)" name="photo" type="file" :class="{ 'is-invalid': form.errors.has('photo') }">
                                    <img :src="updateImage()" alt="" width="80" height="80">
                                    <has-error :form="form" field="photo"></has-error>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
name: "Edit",
    mounted() {
        axios.get(`/edit-testimonial/${this.$route.params.testID}`)
            .then((response)=>{
                this.form.fill(response.data.testimonial)
            })
    },
    data(){
        return{
            form:new Form({
                photo:'',
                name:'',
                title:'',
                desc:'',
                status:'',
            })
        }
    },
    methods:{
        changePhoto(event){
            let file = event.target.files[0];

            if(file.size>1048576){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>This File Is Too Much Big</a>'
                })
            }else{
                let reader = new FileReader();
                reader.onload = event => {
                    this.form.photo = event.target.result
                    console.log(event.target.result)
                };
                reader.readAsDataURL(file);
            }

        },
        updateTestimonial(){
            this.form.post(`update-testimonial/${this.$route.params.testID}`)
                .then(()=>{
                    this.$router.push('/testimonials')
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! Testimonial Updated successfully'
                    })
                })
                .catch(()=>{

                })
        },
        updateImage(){
            let img = this.form.photo;
            if(img.length>100){
                return  this.form.photo
            }else{
                return `uploads/testimonial/${this.form.photo}`
            }

        }
    }

}
</script>

<style scoped>

</style>
