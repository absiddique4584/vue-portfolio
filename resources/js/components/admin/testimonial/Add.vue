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
                                <h3 class="card-title">Add New Testimonial <router-link to="/testimonials"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data" @submit.prevent="addTestimonial()" >



                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Add Name</label>
                                        <input type="text" v-model="form.name" name="name" class="form-control" id="name" placeholder="Add New Name"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Add Title</label>
                                        <input type="text" v-model="form.title" name="title" class="form-control" id="title" placeholder="Add New title"
                                               :class="{ 'is-invalid': form.errors.has('title') }">
                                        <has-error :form="form" field="title"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="desc">Add Description</label>
                                        <input type="text" v-model="form.desc" name="desc" class="form-control" id="desc" placeholder="Add New Description"
                                               :class="{ 'is-invalid': form.errors.has('desc') }">
                                        <has-error :form="form" field="desc"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Add status(active,inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status" placeholder="Add New status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>

                                <div class="form-group" >
                                    <input @change = "changePhoto($event)" name="photo" type="file" :class="{ 'is-invalid': form.errors.has('photo') }">
                                    <img :src="form.photo" alt="" width="80" height="80">
                                    <has-error :form="form" field="photo"></has-error>
                                </div>



                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
    name: "Add",
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
                swal.fire({
                    type: 'error',
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
        addTestimonial(){
            this.form.post('/testimonial/add')
                .then(()=>{
                    this.$router.push('/testimonials')
                    toast.fire({
                        type: 'success',
                        title: 'A New Testimonial Added successfully'
                    })
                })
                .catch(()=>{

                })
        }
    }

}
</script>

<style scoped>

</style>
