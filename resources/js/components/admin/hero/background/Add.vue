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
                                <h3 class="card-title">Add New Background Image <router-link to="/hero"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" enctype="multipart/form-data" @submit.prevent="addBackground()" >

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Add status (active,inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status" placeholder="Add New status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
                                </div>

                                <div class="form-group" style="margin-left: 20px;">
                                    <input @change = "changePhoto($event)" name="image" type="file" :class="{ 'is-invalid': form.errors.has('image') }">
                                    <img :src="form.image" alt="" width="80" height="80">
                                    <has-error :form="form" field="image"></has-error>
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
                image:'',
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
                    this.form.image = event.target.result
                    console.log(event.target.result)
                };
                reader.readAsDataURL(file);
            }

        },
        addBackground(){
            this.form.post('/background/add')
                .then(()=>{
                    this.$router.push('/hero')
                    toast.fire({
                        type: 'success',
                        title: 'A New Background Added successfully'
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
