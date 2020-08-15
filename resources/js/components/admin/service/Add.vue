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
                                <h3 class="card-title">Add New Service <router-link to="/Services"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="addServices()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="icon">Add Icon
                                            (bxl-dribbble,bx-file,bx-tachometer,bx-layer,bx-slideshow,bx-arch)
                                        </label>
                                        <input type="text" v-model="form.icon" name="icon" class="form-control" id="icon" placeholder="Add New icon"
                                               :class="{ 'is-invalid': form.errors.has('icon') }">
                                        <has-error :form="form" field="icon"></has-error>
                                    </div>
                                </div>

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
            icon:'',
            name:'',
            desc:'',
            status:'',
        })
       }
    },
    methods:{
        addServices(){
            this.form.post('/add-service')
                .then(( response ) => {
                    //console.log(response.data)
                    this.$router.push('/Services')
                    toast.fire({
                        icon: 'success',
                        title: 'Yah! A Service Has Been successfully Added'
                    })
                }).catch(()=>{

            })
        }
    }

}
</script>

<style scoped>

</style>
