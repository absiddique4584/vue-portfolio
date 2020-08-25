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
                                <h3 class="card-title">Update Category <router-link to="/portfolio"><button class="btn btn-success">Go Back</button></router-link></h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" @submit.prevent="updateCategory()">

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">Edit Category Name</label>
                                        <input type="text" v-model="form.name" name="name" class="form-control" id="name"
                                               :class="{ 'is-invalid': form.errors.has('name') }">
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="status">Edit status(active,inactive)</label>
                                        <input type="text" v-model="form.status" name="status" class="form-control" id="status"
                                               :class="{ 'is-invalid': form.errors.has('status') }">
                                        <has-error :form="form" field="status"></has-error>
                                    </div>
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
    data(){
        return{
            form:new Form({
                name:'',
                status:'',
            })
        }
    },
    mounted() {
        axios.get(`/edit-category/${this.$route.params.categoryID}`)
            .then((response)=>{
                this.form.fill(response.data.category)
            })
    },
    methods:{
        updateCategory(){
            this.form.post(`/update-category/${this.$route.params.categoryID}`)
                .then((response)=>{
                    this.$router.push('/portfolio')

                    toast.fire({
                        icon: 'success',
                        title: 'Category Updated successfully'
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
